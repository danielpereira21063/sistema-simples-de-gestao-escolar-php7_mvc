<?php

class Url {
    public static function redirecionar($url) {
        echo '<script> window.location = "'.URL.'/'.$url.'";</script>';
    }
}