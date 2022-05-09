<?php

namespace App\Controllers;

class Logout extends BaseController {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->session->destroy();
        return redirect()->to('/'); 
    }

}
