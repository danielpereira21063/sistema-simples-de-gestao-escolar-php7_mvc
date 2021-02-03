<?php

class Usuario {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function checarEmail( $email ) {
        $this->db->query( "SELECT * FROM usuarios WHERE email = :email" );
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
        $this->db->query( "SELECT * FROM usuarios WHERE email = :email" );
        $this->db->bind( ':email', $email );
        if ( $this->db->resultado() ) {
            $result = $this->db->resultado();

            if ( password_verify( $senha, $result->senha ) ) {
                return $result;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function criarSessao($usuario) {
        $_SESSION['usuario_id'] = $usuario->id;
        $_SESSION['usuario_nome'] = $usuario->nome;
        $_SESSION['usuario_email'] = $usuario->email;
    }

    public function listarUsuarios($limite) {
        $this->db->query("SELECT id, nome, email, data_criacao FROM usuarios LIMIT $limite");
        if($this->db->resultados()) {
            return $this->db->resultados();
        } else {
            return false;
        }
    }
}