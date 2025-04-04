<?php

namespace app\controllers;

use app\forms\AdminForm;
use core\App;
use core\ParamUtils;
use core\Utils;
use PDOException;

class AdminCtrl {

    private $users;
    private $form;
    public function __construct() {
        $this->form = new AdminForm();
    }

    public function action_admin_show() {
        $this->users = App::getDB()->select("users", [
            "[>]user_role" => ["IdUser" => "IdUser"]
        ], [
            "users.IdUser",
            "users.firstName",
            "users.lastName",
            "user_role.roleName"
        ]);

        App::getSmarty()->assign("form", $this->form);
        App::getSmarty()->assign("users", $this->users ?? []);
        App::getSmarty()->display("Admin.tpl");
    }

    public function action_updateRole() {
        $userId = ParamUtils::getFromRequest('IdUser');
        $newRole = ParamUtils::getFromRequest('newRole');

        try {
            App::getDB()->update("user_role", ["roleName" => $newRole], ["IDUser" => $userId]);
        } catch (PDOException $e) {
            Utils::addErrorMessage("Błąd podczas aktualizacji roli użytkownika");
        }
        App::getRouter()->forwardTo("admin_show");
    }
}