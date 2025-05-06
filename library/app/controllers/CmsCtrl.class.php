<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;

class CmsCtrl {
    public function action_cms_panel() {
        $text = App::getDB()->get("cms_content", "content", [
            "section" => "main_text"
        ]);

        App::getSmarty()->assign("mainText", $text);
        App::getSmarty()->display("cms.tpl");
    }

    public function action_cms_save() {
        $text = ParamUtils::getFromPost("mainText");

        $exists = App::getDB()->has("cms_content", [
            "section" => "main_text"
        ]);

        if ($exists) {
            App::getDB()->update("cms_content", [
                "content" => $text
            ], [
                "section" => "main_text"
            ]);
        } else {
            App::getDB()->insert("cms_content", [
                "section" => "main_text",
                "content" => $text
            ]);
        }

        Utils::addInfoMessage("Treść została zapisana.");
        App::getRouter()->redirectTo("cms_panel");
    }

}
