<?php

class Usuario {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function checarEmail( $email ) {
        $this->db->query( 'SELECT * FROM usuarios WHERE email = :email' );
        $this->db->bind( ':email', $email );

        if ( !$this->db->resultado() ) {
            return true;
        } else {
            return false;
        }
    }

    public function armazenar( $dados ) {
        $this->db->query( 'INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)' );
        $this->db->bind( ':nome', $dados['nome'] );
        $this->db->bind( ':email', $dados['email'] );
        $this->db->bind( ':senha', $dados['senha'] );

        if ( $this->db->executar() ) {
            return true;
        } else {
            return false;
        }
    }

    public function checarLogin( $email, $senha ) {
        $this->db->query( 'SELECT * FROM usuarios WHERE email = :email' );
        $this->db->bind( ':email', $email );
        if ( $this->db->resultado() ) {
            $result = $this->db->resultado();

            if ( password_verify( $senha, $result->senha ) ) {
                return true;
            } else {
                return false;
            }
        }
    }
}