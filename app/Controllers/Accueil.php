<?php

namespace App\Controllers;

class Accueil extends BaseController {
    
    public function __construct() {
         parent::__construct();
    }
    
    public function index() {
        $this->load_frontend_view('index');
    }
}
