<?php

class Validacoes {
    public static function nome( $nome ) {
        if ( preg_match( '/[a-zA-Z]+/m', $nome ) ) {
            return true;
        } else {
            return false;
        }
    }

    public static function email( $email ) {
        if ( filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
            return true;
        } else {
            return false;
        }
    }

    public static function senha( $senha ) {
        if ( strlen( $senha ) >= 6 ) {
            return true;
        } else {
            return false;
        }
    }

    public static function confirmSenha( $senha, $confirm_senha ) {
        if ( $senha === $confirm_senha ) {
            return true;
        } else {
            return false;
        }
    }
}