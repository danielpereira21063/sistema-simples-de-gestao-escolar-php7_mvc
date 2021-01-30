<?php

class Usuarios extends Controller {
    private $usuarioModel;

    public function __construct() {
        $this->usuarioModel = $this->model( 'Usuario' );
    }

    public function index() {
        $this->view( 'usuario/index' );
    }

    public function login() {
        $form = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );

        if ( isset( $form ) ) {
            $dados = [
                'email' => trim( rtrim( $form['email'] ) ),
                'senha' => $form['senha']
            ];
            if ( in_array( '', $form ) ) {
                if ( empty( $form['email'] ) ) {
                    $dados['email_erro'] = 'Preencha o campo e-mail';
                }
                if ( empty( $form['senha'] ) ) {
                    $dados['senha_erro'] = 'Preencha o campo senha';
                }
            } else {
                if ( !Validacoes::email( $form['email'] ) ) {
                    $dados['email_erro'] = 'O e-mail informado não é válido';
                } else {
                    if($this->usuarioModel->checarLogin($form['email'], $form['senha'])){
                        // Url::redirecionar('home/index');
                        echo 'Logado';
                    } else {
                        echo 'Email ou senha incorretos';
                    }

                }
            }
        } else {
            $dados = [];
        }

        $this->view( 'usuario/login', $dados );
    }

    public function cadastrar() {
        $form = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );

        if ( isset( $form ) ) {
            $dados = [
                'nome' => trim( rtrim( $form['nome'] ) ),
                'email' => trim( rtrim( $form['email'] ) ),
                'senha' => $form['senha'],
                'confirm_senha' => $form['confirm_senha']
            ];
            if ( in_array( '', $form ) ) {
                if ( empty( $form['nome'] ) ) {
                    $dados['nome_erro'] = 'Preencha o campo nome';
                }
                if ( empty( $form['email'] ) ) {
                    $dados['email_erro'] = 'Preencha o campo e-mail';
                }
                if ( empty( $form['senha'] ) ) {
                    $dados['senha_erro'] = 'Preencha o campo senha';
                }
                if ( empty( $form['confirm_senha'] ) ) {
                    $dados['confirm_senha_erro'] = 'Confirme sua senha';
                }
            } else {
                if ( !Validacoes::nome( $form['nome'] ) ) {
                    $dados['nome_erro'] = 'O nome informado não é válido';
                } elseif ( !Validacoes::email( $form['email'] ) ) {
                    $dados['email_erro'] = 'O e-mail informado não é válido';
                } elseif ( !Validacoes::senha( $form['senha'] ) ) {
                    $dados['senha_erro'] = 'A senha deve ter no mínimo 6 caracteres';
                } elseif ( !Validacoes::confirmSenha( $form['senha'], $form['confirm_senha'] ) ) {
                    $dados['confirm_senha_erro'] = 'As senhas não conferem';
                } elseif ( !$this->usuarioModel->checarEmail( $dados['email'] ) ) {
                    $dados['email_erro'] = 'Este e-mail já foi cadastrado';
                } else {
                    $dados['senha'] = password_hash( $form['senha'], PASSWORD_DEFAULT );
                    if ( $this->usuarioModel->armazenar( $dados ) ) {
                        echo 'Cadastro realizado';
                    } else {
                        die( 'Erro ao cadastrar usuario' );
                    }
                }
            }
        } else {
            $dados = [];
        }

        var_dump( $form );
        $this->view( 'usuario/cadastrar', $dados );
    }
}