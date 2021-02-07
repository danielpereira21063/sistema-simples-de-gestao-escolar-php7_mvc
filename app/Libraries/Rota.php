<?php

class Rota {
    private $controlador = 'Home';
    private $metodo = 'index';
    private $parametros = [];

    public function __construct() {
        $url = $this->url() ? $this->url() : [0];

        if ( file_exists( '../app/Controllers/'.ucwords( $url[0] ).'.php' ) ) {
            $this->controlador = ucwords( $url[0] );
            unset( $url[0] );
        }
        require_once '../app/Controllers/'.$this->controlador.'.php';
        $this->controlador = new $this->controlador;

        if ( isset( $url[1] ) && !isset($url[2]) ) {
            if ( method_exists( $this->controlador, $url[1] ) ) {
                $this->metodo = $url[1];
                unset($url[1]);
            }
        } elseif(isset($url[2])) {
            if ( method_exists( $this->controlador, $url[2] ) ) {
                $this->metodo = $url[2];
                unset($url[2]);
            }
        }

        $this->parametros = $url ? array_values( $url ) : [];
        call_user_func_array( [$this->controlador, $this->metodo], $this->parametros );
    }

    public function url() {
        $url = filter_input( INPUT_GET, 'url', FILTER_SANITIZE_URL );
        if ( isset( $url ) ) {
            $url = trim( rtrim( $url, '/' ) );
            $url = explode( '/', $url );

            return $url;
        }
    }
}