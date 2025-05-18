<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;

class CmsCtrl {
    public function action_cms_panel() {
        $row = App::getDB()->get("cms_content", [
            "content",
            "updated_at"
        ], [
            "section" => "main_text"
        ]);

        App::getSmarty()->assign("mainText", $row["content"] ?? "");
        App::getSmarty()->assign("updatedAt", $row["updated_at"] ?? null);
        App::getSmarty()->display("cms.tpl");
    }

    public function action_cms_save() {
        $text = ParamUtils::getFromPost("mainText");

        if (ParamUtils::getFromPost("clear") === "1") {
            App::getDB()->update("cms_content", [
                "content" => "",
                "updated_at" => date("Y-m-d H:i:s")
            ], [
                "section" => "main_text"
            ]);
            Utils::addInfoMessage("Treść została wyczyszczona.");
            App::getRouter()->redirectTo("cms_panel");
            return;
        }

        $exists = App::getDB()->has("cms_content", [
            "section" => "main_text"
        ]);

        if ($exists) {
            App::getDB()->update("cms_content", [
                "content" => $text,
                "updated_at" => date("Y-m-d H:i:s")
            ], [
                "section" => "main_text"
            ]);
        } else {
            App::getDB()->insert("cms_content", [
                "section" => "main_text",
                "content" => $text,
                "updated_at" => date("Y-m-d H:i:s")
            ]);
        }

        Utils::addInfoMessage("Treść została zapisana.");
        App::getRouter()->redirectTo("cms_panel");
    }
}
