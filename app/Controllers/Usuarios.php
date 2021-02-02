<?php

class Usuarios extends Controller {
    private $usuarioModel;

    public function __construct() {
        $this->usuarioModel = $this->model( 'Usuario' );
    }

    public function index() {
        $this->view( 'usuarios/index' );
    }

    public function cadastrar() {
        $formulario = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );

        if ( isset( $formulario ) ) {
            $dados = [
                'nome' => trim( rtrim( $formulario['nome'] ) ),
                'email' => trim( rtrim( $formulario['email'] ) ),
                'senha' => $formulario['senha'],
                'confirm_senha' => $formulario['confirm_senha'],
            ];

            if ( in_array( '', $formulario ) ) {

                if ( empty( $formulario['nome'] ) ) {
                    $dados['nome_erro'] = 'Preencha o campo nome';
                }

                if ( empty( $formulario['email'] ) ) {
                    $dados['email_erro'] = 'Preencha o campo e-mail';
                }

                if ( empty( $formulario['senha'] ) ) {
                    $dados['senha_erro'] = 'Preencha o campo senha';
                }

                if ( empty( $formulario['confirm-senha'] ) ) {
                    $dados['confirm_senha_erro'] = 'Confirme a senha';
                }

            } else {
                if ( !Validacoes::nome( $formulario['nome'] ) ) {
                    $dados['nome_erro'] = 'O nome informado não é válido';
                } elseif ( !Validacoes::email( $formulario['email'] ) ) {
                    $dados['email_erro'] = 'O e-mail informado não é válido';
                } elseif ( !Validacoes::senha( $formulario['senha'] ) ) {
                    $dados['senha_erro'] = 'A senha deve ter no mínimo 6 caracteres';
                } elseif ( !Validacoes::confirmSenha( $formulario['senha'], $formulario['confirm_senha'] ) ) {
                    $dados['confirm_senha_erro'] = 'As senhas não conferem';
                } else {
                    $dados['senha'] = password_hash( $formulario['senha'], PASSWORD_DEFAULT );

                    if ( $this->usuarioModel->armazenar( $dados ) ) {
                        echo 'Cadastro realizado';
                    } else {
                        die( 'Erro ao armazenar Usuario' );
                    }
                }

            }

        } else {
            $dados = [];
        }

        $this->view( 'usuarios/cadastrar', $dados );
    }

    public function login() {
        $form = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );

        if ( isset( $form ) ) {
            $dados = [
                'email' => $form['email'],
                'senha' => $form['senha']
            ];
            if ( in_array( '', $form ) ) {
                if ( empty( $form['email'] ) ) {
                    $dados['email_erro'] = 'Preencha o campo e-mail';
                }
                if ( empty( $form ) ) {
                    $dados['senha_erro'] = 'Preencha o campo senha';
                }
            } else {
                if ( !Validacoes::email( $form['email'] ) ) {
                    $dados['email_erro'] = 'O e-mail informado não é válido';
                } else {
                    $login = $this->usuarioModel->checarLogin( $form['email'], $form['senha'] );
                    if ( $login ) {

                        $this->usuarioModel->criarSessao( $login );
                        Url::redirecionar( 'home/' );
                        // echo 'Logado';
                    } else {
                        // echo 'Email ou senha incorretos';
                    }

                }
            }
        } else {
            $dados = [];
        }

        $this->view( 'usuarios/login', $dados );
    }

    public function sair() {
        unset( $_SESSION['usuario_id'] );
        unset( $_SESSION['usuario_nome'] );
        unset( $_SESSION['usuario_email'] );
        session_destroy();

        Url::redirecionar( 'usuarios/login' );
    }

    public function perfil() {
        $this->view( 'usuarios/perfil' );
    }

    public function listar() {
        $dados = [
            $this->usuarioModel->listarUsuarios(10)
        ];
        $this->view( 'usuarios/listar', $dados );
    }

}