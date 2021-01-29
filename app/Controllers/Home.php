<?php

class Home extends Controller {

    public function __construct() {
        
    }

    public function index() {
        $this->view('home/index');
    }

    public function sobre() {
        $this->view('home/sobre');
    }
}