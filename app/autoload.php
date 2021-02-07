<?php

spl_autoload_register(function($classe){
    $diretorios = [
        'Libraries',
        'Helpers'
    ];

    foreach($diretorios as $diretorio) {
        $file = __DIR__.'/'.$diretorio.'/'.$classe.'.php';
        if(file_exists($file)) {
            require_once $file;
        }
    }
});

