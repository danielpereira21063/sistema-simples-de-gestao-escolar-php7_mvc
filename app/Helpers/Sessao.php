<?php

class Sessao {
    public static function logado() {
        if(isset($_SESSION['usuario_id']) && isset($_SESSION['usuario_nome']) && isset($_SESSION['usuario_email'])) {
            return true;
        } else {
            return false;
        }
    }

    public static function mensagem($nome, $texto = null, $classe = null) {
        if(!empty($nome)) {
            if(!empty($texto) && empty($_SESSION[$nome])) {
                if(!empty($_SESSION[$nome])) {
                    unset($_SESSION[$nome]);
                }
                $_SESSION[$nome] = $texto;
                $_SESSION[$nome.'classe'] = $classe;
            }
            elseif(!empty($_SESSION[$nome]) && empty($texto)) {
                $classe = !empty($_SESSION[$nome.'classe']) ? $_SESSION[$nome.'classe'] : 'alert alert-success';
                echo '<div class="text-center '.$classe.'">'.$_SESSION[$nome].'</div>';
                unset($_SESSION[$nome]);
                unset($_SESSION[$nome.'classe']);
            }
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
        if(Sessao::logado()) {
            $nomeUsuario = explode(' ', $_SESSION['usuario_nome']);
            return $nomeUsuario;
        }
    }

    public static function idUsuarioLogado() {
        if(Sessao::logado()) {
            return $_SESSION['usuario_id'];
        } else {
            return false;
        }
    }

    public function nomeCompletoUsuario() {
        return $_SESSION['usuario_nome'];
    }

    public function emailUsuario() {
        return $_SESSION['usuario_email'];
    }
}
