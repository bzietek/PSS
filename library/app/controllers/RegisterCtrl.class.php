<?php

namespace app\controllers;

use app\forms\RegisterForm;
use core\App;
use core\ParamUtils;
use core\SessionUtils;
use core\Utils;
use core\Validator;
use PDOException;

class RegisterCtrl {

    private $form;

    public function __construct() {
        $this->form = new RegisterForm();
        $this->user_data = array();
    }

    public function validate(): bool {
        if (!empty(SessionUtils::load("id", true))) return true;

        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->firstName = ParamUtils::getFromRequest('firstName');
        $this->form->lastName = ParamUtils::getFromRequest('lastName');
        $this->form->password = ParamUtils::getFromRequest('password');
        $this->form->repeatedPassword = ParamUtils::getFromRequest('repeatedPassword');

        $v = new Validator();

        $v->validate($this->form->login,[
            'trim' => true,
            'required' => true,
            'required_message' => 'Login użytkownika jest wymagana',
            'min_length' => 3,
            'max_length' => 50,
            'validator_message' => 'Login użytkownika powinnien zawierać od 3 do 50 znaków'
        ]);

        $v->validate($this->form->firstName,[
            'trim' => true,
            'required' => true,
            'required_message' => 'Imię jest wymagane',
            'min_length' => 3,
            'max_length' => 25,
            'validator_message' => 'Imię powinno zawierać od 3 do 25 znaków'
        ]);

        $v->validate($this->form->lastName,[
            'trim' => true,
            'required' => true,
            'required_message' => 'Nazwisko jest wymagane',
            'min_length' => 3,
            'max_length' => 30,
            'validator_message' => 'Nazwisko powinno zawierać od 3 do 30 znaków'
        ]);

        $v->validate($this->form->password,[
            'required' => true,
            'required_message' => 'Hasło jest wymagane',
            'min_length' => 4,
            'max_length' => 50,
            'validator_message' => 'Hasło powinno zawierać od 4 do 50 znaków'
        ]);

        if($this->form->password != $this->form->repeatedPassword){
            Utils::addErrorMessage("Podane hasła muszą być takie same");
        }

        if(App::getMessages()->isError()) return false;

        //check if unique
        try {
            $isLoginInDb = App::getDB()->has("users", ["login" => $this->form->login]);

            if($isLoginInDb) Utils::addErrorMessage("Login użytkownika jest już zajęta");

            if(App::getMessages()->isError()) return false;


        }catch(PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych");
        }

        return !App::getMessages()->isError();
    }

    private function addUser(){
        try{
            App::getDB()->insert("users", [
                "login" => $this->form->login,
                "password" => md5($this->form->password),
                "firstName" => $this->form->firstName,
                "lastName" => $this->form->lastName
            ]);
            $this->user_data["id"] = intval(App::getDB()->id()); // id() jest z klasy meedo, bierze id z poprzednio wrzuconego obiektu

//            rodo
            App::getDB()->update("users", [
                "updatedBy" => $this->user_data["id"],
                "createdBy" => $this->user_data["id"]
            ],
                ["IdUser" => $this->user_data["id"]]
            );

            //domyslna rola
            App::getDB()->insert("user_role",
                [
                    "IDUser" => $this->user_data["id"], /// w bazie danych w tabeli user_role powinno byc IdUser nie IDUser
                    "roleName" => "czytelnik",
                    ]);

            return true;
        }catch(PDOException $e){
            echo($e);
        }
        return false;
    }


    public function action_register_show() {
        $this->generateView();
    }
    public function generateView() {
        App::getSmarty()->assign("form", $this->form);
        App::getSmarty()->display("Register.tpl");
    }

    public function action_register() {
        if($this->validate() && $this->addUser()){
            Utils::addInfoMessage("Pomyślnie utworzono konto.");
            App::getRouter()->forwardTo("login_show");
        }else{
            $this->form->password = "";
            $this->form->repeatedPassword = "";

            $this->generateView();
        }

    }
}