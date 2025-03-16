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

        try {
            $genreId = App::getDB()->get("genre", "IdGenre", ["genreName" => $this->form->genre]);


            if (!$genreId) {
                Utils::addErrorMessage("Wybrany gatunek nie istnieje.");
                $this->generateSearchView();
                return;
            }

            if ($this->form->onlyAvailableBooks == "yes") {
                $this->books = App::getDB()->select("books", [
                    "[>]genre" => ["IdGenre" => "IdGenre"] // right join
                ], [
                    "books.IdBook",
                    "books.title",
                    "books.author",
                    "genre.genreName",
                    "books.availableCopies"
                ], [
                    "AND" => [
                        "books.IdGenre" => $genreId,
                        "books.availableCopies[>]" => 0
                    ]
                ]);
            }

            else{
                $this->books = App::getDB()->select("books", [
                    "[>]genre" => ["IdGenre" => "IdGenre"] // right join
                ], [
                    "books.IdBook",
                    "books.title",
                    "books.author",
                    "genre.genreName",
                    "books.availableCopies"
                ], [
                    "AND" => [
                        "books.IdGenre" => $genreId,
                    ]
                ]);
            }


        } catch (PDOException $e) {
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }
        $this->generateTableView();
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

        App::getRouter()->forwardTo("reader_search");
    }

    private function generateSearchView() {
        App::getSmarty()->assign("form", $this->form);
        App::getSmarty()->display("Reader.tpl");
    }

    private function generateTableView() {
        App::getSmarty()->assign("form", $this->form);
        App::getSmarty()->assign("books", $this->books ?? []);
        App::getSmarty()->display("ReaderList.tpl");
    }

}
