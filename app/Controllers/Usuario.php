<?php

class Usuario extends Controller {
    public function index() {
        $this->view( 'usuario/index' );
    }

    public function login() {
        $this->view( 'usuario/login' );
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
                if(!Validacoes::nome($form['nome'])) {
                    $dados['nome_erro'] = 'O nome informado não é válido';
                }
                if(!Validacoes::email($form['email'])) {
                    $dados['email_erro'] = 'O e-mail informado não é válido';
                }
                if(!Validacoes::senha($form['senha'])) {
                    $dados['senha_erro'] = 'A senha deve ter no mínimo 6 caracteres';
                }
                if(!Validacoes::confirmSenha($form['senha'], $form['confirm_senha'])) {
                    $dados['confirm_senha_erro'] = 'As senhas não conferem';
                }
            }
        } else {
            $dados = [];
        }

        var_dump( $form );
        $this->view( 'usuario/cadastrar', $dados );
    }
}