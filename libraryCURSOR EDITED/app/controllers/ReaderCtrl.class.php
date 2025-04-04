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
    private $totalRecords;
    private $totalPages;

    public function __construct() {
        $this->form = new SearchForm();
    }

    public function validate(): bool {
        $this->form->onlyAvailableBooks = ParamUtils::getFromRequest('onlyAvailableBooks');
        $this->form->genre = ParamUtils::getFromRequest('genre');
        $this->form->searchTerm = ParamUtils::getFromRequest('searchTerm');
        $this->form->page = ParamUtils::getFromRequest('page', true, 1);

        // If onlyAvailableBooks is not set, default to 'no'
        if ($this->form->onlyAvailableBooks === null) {
            $this->form->onlyAvailableBooks = 'no';
        }

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

    public function action_reader() {
        $this->generateView();
    }

    public function action_reader_list() {
        if (!$this->validate()) {
            $this->generateView();
            return;
        }

        try {
            $genreId = App::getDB()->get("genre", "IdGenre", ["genreName" => $this->form->genre]);

            if (!$genreId) {
                Utils::addErrorMessage("Wybrany gatunek nie istnieje.");
                $this->generateView();
                return;
            }

            $where = ["books.IdGenre" => $genreId];
            
            if ($this->form->onlyAvailableBooks == "yes") {
                $where["books.availableCopies[>]"] = 0;
            }

            if (!empty($this->form->searchTerm)) {
                $where["OR"] = [
                    "books.title[~]" => "%{$this->form->searchTerm}%",
                    "books.author[~]" => "%{$this->form->searchTerm}%"
                ];
            }

            // Get total count for pagination
            $this->totalRecords = App::getDB()->count("books", [
                "[>]genre" => ["IdGenre" => "IdGenre"]
            ], "books.IdBook", $where);

            $this->totalPages = ceil($this->totalRecords / $this->form->recordsPerPage);
            
            // Ensure page is within valid range
            $this->form->page = max(1, min($this->form->page, $this->totalPages));

            // Get paginated results
            $this->books = App::getDB()->select("books", [
                "[>]genre" => ["IdGenre" => "IdGenre"]
            ], [
                "books.IdBook",
                "books.title",
                "books.author",
                "genre.genreName",
                "books.availableCopies"
            ], [
                "AND" => $where,
                "LIMIT" => [($this->form->page - 1) * $this->form->recordsPerPage, $this->form->recordsPerPage]
            ]);

        } catch (PDOException $e) {
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }
        $this->generateView();
    }

    public function action_borrowBook() {
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

        App::getRouter()->redirectTo("reader");
    }

    private function generateView() {
        App::getSmarty()->assign("form", $this->form);
        App::getSmarty()->assign("books", $this->books ?? []);
        App::getSmarty()->assign("totalPages", $this->totalPages);
        App::getSmarty()->assign("currentPage", $this->form->page);
        App::getSmarty()->display("ReaderList.tpl");
    }
}
