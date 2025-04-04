<?php

namespace app\forms;

class SearchForm {
    public $onlyAvailableBooks;
    public $genre;
    public $searchTerm;
    public $page;
    public $recordsPerPage;
    
    public function __construct() {
        $this->page = 1;
        $this->recordsPerPage = 10;
    }
}