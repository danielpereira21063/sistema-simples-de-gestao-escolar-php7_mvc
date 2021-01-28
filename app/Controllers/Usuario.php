<?php

class Usuario extends Controller {
    public function index() {
        $this->view('usuario/index');
    }

    public function login() {
        $this->view('usuario/login');
    }

    public function cadastrar() {
        $this->view('usuario/cadastrar');
    }
}