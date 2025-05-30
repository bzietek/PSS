<?php

namespace app\controllers;

use app\forms\LibrarianForm;
use core\App;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use core\Utils;
use core\Validator;
use PDOException;

class LibrarianCtrl{

    private $form;
    private $borrows;

    public function __construct()
    {
        $this->form = new LibrarianForm();
    }

    public function action_librarian_show() {
        $this->borrows = App::getDB()->select("borrow", [
            "[>]books" => ["IdBook" => "IdBook"],
            "[>]users" => ["createdBy" => "IdUser"]
        ], [
            "borrow.IdBorrow",
            "borrow.damageDescription",
            "books.title",
            "books.author",
            "users.firstName",
            "users.lastName",
            "borrow.returnDate"
        ]);

        App::getSmarty()->assign("borrows", $this->borrows ?? []);
        App::getSmarty()->display("Librarian.tpl");
    }

    public function action_reclaim() {
        $idBorrow = ParamUtils::getFromRequest('IdBorrow');
        $damageDescription = ParamUtils::getFromRequest('damageDescription');

        try {
            App::getDB()->update("borrow", [
                "damageDescription" => $damageDescription,
                "returnDate" => date("Y-m-d H:i:s")
            ], [
                "IdBorrow" => $idBorrow
            ]);

            $idBook = App::getDB()->get("borrow", "IdBook", ["IdBorrow" => $idBorrow]);

            App::getDB()->update("books", [
                "availableCopies[+]" => 1
            ], [
                "IdBook" => $idBook
            ]);

            Utils::addInfoMessage("Opis szkody został zaktualizowany, książka została zwrócona");
        } catch (PDOException $e) {
            Utils::addErrorMessage("Błąd podczas aktualizacji opisu szkody");
        }
        App::getRouter()->redirectTo("librarian_show");
    }
}
