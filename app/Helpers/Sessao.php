<?php

class Sessao {
    public static function logado() {
        if(isset($_SESSION['usuario_id']) && isset($_SESSION['usuario_nome']) && isset($_SESSION['usuario_email'])) {
            return true;
        } else {
            return false;
        }
    }

    public static function nomeUsuario() {
        if(isset($_SESSION['usuario_id'])) {
            $nomeUsuario = explode(' ', $_SESSION['usuario_nome']);
            if(isset($nomeUsuario[0]) && isset($nomeUsuario[5])) {
                if(strlen($nomeUsuario[1]) < 3 && strlen($nomeUsuario[2]) > 3 ) {
                    $nome = $nomeUsuario[0]. ' ' .$nomeUsuario[1]. ' ' .$nomeUsuario[2];
                } elseif(strlen($nomeUsuario[2]) > 3) {
                    $nome = $nomeUsuario[0]. ' ' .$nomeUsuario[2];
                } else {
                    $nome = $nomeUsuario[0]. ' ' .$nomeUsuario[1];
                }
            } elseif(isset($nomeUsuario[0]) && isset($nomeUsuario[3])) {
                // $nome = $nomeUsuario[0] . ' ' .$nomeUsuario[3];
                if(strlen($nomeUsuario[3]) > 3) {
                    $nome = $nomeUsuario[0]. ' '.$nomeUsuario[3];
                } elseif(strlen($nomeUsuario[2]) < 3) {
                    $nome = $nomeUsuario[0]. ' '.$nomeUsuario[1];
                }
            } elseif(isset($nomeUsuario[0]) && isset($nomeUsuario[2])) {
                if(strlen($nomeUsuario[2]) > 3) {
                    $nome = $nomeUsuario[0]. ' ' .$nomeUsuario[2];
                }
            } elseif(isset($nomeUsuario[0]) && isset($nomeUsuario[1])) {
                $nome = $nomeUsuario[0]. ' ' .$nomeUsuario[1];
            } else {
                $nome = $nomeUsuario[0];
            }
            return $nome;
        }
    }

    public static function primeiroNomeUser() {
        if(isset($_SESSION['usuario_id'])) {
            $nomeUsuario = explode(' ', $_SESSION['usuario_nome']);
            return $nomeUsuario;
        }
    }
}
