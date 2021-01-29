<?php

class Home extends Controller {

    public function __construct() {

    }

    public function index() {
        $dados = [
            'titulo' => 'Sistema-Escolar'
        ];

        $this->view( 'home/index', $dados );
    }

    public function sobre() {
        $this->view( 'home/sobre' );
    }
}