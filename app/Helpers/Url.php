<?php

class Url {
    public static function redirecionar($url) {
        header('Location: '.URL.'/'.$url);
    }
}