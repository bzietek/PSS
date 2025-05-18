<?php

namespace app\controllers;

use app\forms\LoginForm;
use core\App;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use core\Utils;
use core\Validator;
use PDOException;

class LoginCtrl {

    private $form;
    private $user_data;

    public function __construct() {
        $this->form = new LoginForm();
    }
    public function validate(): bool {
        if(!empty(SessionUtils::load("id", true))) return true;

        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->password = ParamUtils::getFromRequest('password');

        $v = new Validator();
        $v->validate($this->form->login,[
            'trim' => true,
            'required' => true,
            'required_message' => 'Login jest wymagany',
            'min_length' => 3,
            'max_length' => 50,
            'validator_message' => 'Login użytkownika powinnien zawierać od 3 do 50 znaków'
        ]);

        $v->validate($this->form->password,[
            'required' => true,
            'required_message' => 'Hasło jest wymagane',
        ]);

        if(App::getMessages()->isError()) return false;

        try{
            $this->user_data = App::getDB()->get("users", ["IdUser", "login", "firstName", "lastName"],[
                "login" => $this->form->login,
                "password" => md5($this->form->password)
            ]);
            if(empty($this->user_data)){
                Utils::addErrorMessage("Nieprawidłowy login lub hasło");
            }
        }catch(PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }

        return !App::getMessages()->isError();
    }

    private function addRole(): bool{
        try{
            $role = App::getDB()->get("user_role", "roleName", ["IDUser" => $this->user_data["IdUser"]]);
            RoleUtils::addRole($role);
            return true;
        }catch(PDOException $e){
            Utils::addErrorMessage("Nie udało się połączyć z bazą danych.");
        }
        return false;
    }

    public function action_login() {
        if($this->validate() && $this->addRole()){
            SessionUtils::store("id", $this->user_data["IdUser"]);
            SessionUtils::store("login", $this->user_data["login"]);
            SessionUtils::store("firstName", $this->user_data["firstName"]);
            SessionUtils::store("lastName", $this->user_data["lastName"]);
            if(RoleUtils::inRole("czytelnik")){
                App::getRouter()->redirectTo("reader_search");
            }

            if(RoleUtils::inRole("admin")){
                App::getRouter()->redirectTo("admin_show");
            }

            if(RoleUtils::inRole("bibliotekarz")){
                App::getRouter()->redirectTo("librarian_show");
            }

        }else{
            $this->form->password = "";
            $this->generateView();
        }

    }
    public function action_logout() {
        SessionUtils::remove("IdUser");
        SessionUtils::remove("login");
        SessionUtils::remove("firstName");
        SessionUtils::remove("lastName");

        $_SESSION = null;
        session_destroy();
        App::getRouter()->redirectTo('login_show');
    }

    public function generateView(){
        $row = App::getDB()->get("cms_content", ["content", "updated_at"], [
            "section" => "main_text"
        ]);
        App::getSmarty()->assign("cmsText", $row["content"] ?? "");
        App::getSmarty()->assign("cmsUpdated", $row["updated_at"] ?? null);
        App::getSmarty()->assign("form", $this->form);
        App::getSmarty()->display("Login.tpl");

    }

    public function action_login_show() {
        $this->generateView();
    }
}