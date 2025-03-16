<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('login_show'); #default action

//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('login_show', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');

Utils::addRoute('register', 'RegisterCtrl');
Utils::addRoute('register_show', 'RegisterCtrl');

Utils::addRoute('reader', 'ReaderCtrl', ["czytelnik"]);
Utils::addRoute('reader_search', 'ReaderCtrl', ["czytelnik"]);
Utils::addRoute('reader_list', 'ReaderCtrl', ["czytelnik"]);
Utils::addRoute('borrowBook', 'ReaderCtrl', ["czytelnik"]);

Utils::addRoute('admin_show', 'AdminCtrl', ["admin"]);
Utils::addRoute('updateRole', 'AdminCtrl', ["admin"]);

Utils::addRoute('librarian_show', 'LibrarianCtrl', ["bibliotekarz"]);
Utils::addRoute('reclaim', 'LibrarianCtrl', ["bibliotekarz"]);

//Utils::addRoute('action_name', 'controller_class_name');