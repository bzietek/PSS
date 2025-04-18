<?php

namespace app\controllers;

use app\forms\SearchForm;
use core\App;
use core\ParamUtils;
use core\SessionUtils;
use core\Utils;
use core\Validator;
use PDOException;

class ReaderCtrl
{
    private $form;
    private $books;

    public function __construct() {
        $this->form = new SearchForm();
    }

    public function validate(): bool {
        $this->form->onlyAvailableBooks = ParamUtils::getFromRequest('onlyAvailableBooks');
        $this->form->genre = ParamUtils::getFromRequest('genre');

        $v = new Validator();

        $v->validate($this->form->onlyAvailableBooks, [
            'required' => true,
            'required_message' => 'Określ czy pokazywać tylko dostępne książki',
            'regexp' => '/^(yes|no)$/',
            'validator_message' => 'Dostępne wartości to "yes" i "no"'
        ]);

        $v->validate($this->form->genre, [
            'required' => true,
            'required_message' => 'Musisz wybrać jakiś gatunek',
        ]);

        if(App::getMessages()->isError()) return false;

        try {
            $isGenreInDb = App::getDB()->has("genre", ["genreName" => $this->form->genre]);

            if(!$isGenreInDb) Utils::addErrorMessage("Nie mamy takiego gatunku książek");

            if(App::getMessages()->isError()) return false;


        }catch(PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }

        return !App::getMessages()->isError();
    }

    public function action_reader_search() {
        $this->generateSearchView();
    }

    public function action_reader_list() {
        if (!$this->validate()) {
            $this->generateSearchView();
            return;
        }

        // Pobieramy numer strony, domyślnie 1
        $page = ParamUtils::getFromRequest('page', true, '1');
        $page = max(1, intval($page)); // Konwersja na liczbę i zabezpieczenie przed wartościami ujemnymi
        $resultsPerPage = 10; // Liczba książek na stronę
        $offset = ($page - 1) * $resultsPerPage;

        try {
            $genreId = App::getDB()->get("genre", "IdGenre", ["genreName" => $this->form->genre]);

            if (!$genreId) {
                Utils::addErrorMessage("Wybrany gatunek nie istnieje.");
                $this->generateSearchView();
                return;
            }

            $conditions = ["books.IdGenre" => $genreId];
            if ($this->form->onlyAvailableBooks == "yes") {
                $conditions["books.availableCopies[>]"] = 0;
            }

            // Pobieramy książki z limit i offset
            $this->books = App::getDB()->select("books", [
                "[>]genre" => ["IdGenre" => "IdGenre"]
            ], [
                "books.IdBook",
                "books.title",
                "books.author",
                "genre.genreName",
                "books.availableCopies"
            ], [
                "AND" => $conditions,
                "LIMIT" => [$offset, $resultsPerPage]
            ]);

            // Pobieramy całkowitą liczbę książek, aby obliczyć liczbę stron
            $totalBooks = App::getDB()->count("books", ["AND" => $conditions]);
            $totalPages = ceil($totalBooks / $resultsPerPage);

        } catch (PDOException $e) {
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }

        // Przekazujemy dane do widoku
        App::getSmarty()->assign("currentPage", $page);
        App::getSmarty()->assign("totalPages", $totalPages);
        $this->generateSearchView();
    }

    public function action_borrowBook() {
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $id = ParamUtils::getFromPost('IdBook');

            if ($id) {
                App::getDB()->update("books", [
                    "availableCopies[-]" => 1
                ], [
                    "IdBook" => $id
                ]);
                echo "OK";
            } else {
                echo "Błąd: brak IdBook";
            }
            return;
        }
        $bookId = ParamUtils::getFromRequest('IdBook');
        $userId = SessionUtils::load("id", true);


        if (!$userId) {
            Utils::addErrorMessage("Musisz być zalogowany, aby wypożyczyć książkę");
            App::getRouter()->redirectTo("login_show");
            return;
        }

        try {
            App::getDB()->update("books", ["availableCopies[-]" => 1], ["IdBook" => $bookId]);
            App::getDB()->insert("borrow", [
                "IdBook" => $bookId,
                "createdBy" => $userId,
                "damageDescription" => null,
                "returnDate" => null
            ]);
            Utils::addInfoMessage("Książka wypożyczona pomyślnie");
        } catch (PDOException $e) {
            Utils::addErrorMessage("Błąd podczas wypożyczania książki");
        }

        App::getRouter()->forwardTo("reader_search"); // wymyslic jak zrobic zeby po kliknieciu wypozycz, zostawac na widoku tableki z wynikami
    }

    public function action_reader_search_ajax() {
        header('Content-Type: application/json');

        $this->form->onlyAvailableBooks = ParamUtils::getFromRequest('onlyAvailableBooks');
        $this->form->genre = ParamUtils::getFromRequest('genre');
        $page = intval(ParamUtils::getFromRequest('page', true, '1'));
        $booksPerPage = 5;
        $offset = ($page - 1) * $booksPerPage;

        if (!$this->form->genre) {
            echo json_encode(["success" => false, "message" => "Nie wybrano gatunku."]);
            return;
        }

        try {
            $where = ["genre.genreName" => $this->form->genre];
            if ($this->form->onlyAvailableBooks === "yes") {
                $where["books.availableCopies[>]"] = 0;
            }

            // najpierw pobierz ID gatunku na podstawie nazwy
            $genreID = App::getDB()->get("genre", "IdGenre", [
                "genreName" => $this->form->genre
            ]);

            if (!$genreID) {
                echo json_encode(["success" => false, "message" => "Nie znaleziono takiego gatunku."]);
                return;
            }

            $where = ["books.IdGenre" => $genreID];
            if ($this->form->onlyAvailableBooks === "yes") {
                $where["books.availableCopies[>]"] = 0;

            }

            $totalBooks = App::getDB()->count("books", $where);


            $totalPages = ceil($totalBooks / $booksPerPage);

            $books = App::getDB()->select("books", [
                "[>]genre" => ["IdGenre" => "IdGenre"]
            ], [
                "books.IdBook",
                "books.title",
                "books.author",
                "books.availableCopies",
                "genre.genreName(genre)"
            ], array_merge($where, ["LIMIT" => [$offset, $booksPerPage]]));

            echo json_encode([
                "success" => true,
                "books" => $books,
                "totalPages" => $totalPages,
                "currentPage" => $page
            ]);
        } catch (\PDOException $e) {
            echo json_encode(["success" => false, "message" => "Błąd bazy danych: " . $e->getMessage()]);
        }
    }


    private function generateSearchView() {
        App::getSmarty()->assign("form", $this->form);
        App::getSmarty()->assign("books", $this->books ?? []);
        App::getSmarty()->display("Reader.tpl");
    }

    private function generateTableView() {
        App::getSmarty()->assign("form", $this->form);
        App::getSmarty()->display("Reader.tpl");
    }

}
