<?php

class Controller {
    public function model( $model ) {
        require_once './../app/Models/'.$model.'.php';
        return new $model;
    }

    public function view( $view, $dados = [] ) {
        $viewFile = '../app/Views/'.$view.'.php';
        if ( file_exists( $viewFile ) ) {
            require_once $viewFile;
        } else {
            die( 'O arquivo de view não existe: '.'[<h5>'.$view.'.php</h5>]' );
        }
    }
}