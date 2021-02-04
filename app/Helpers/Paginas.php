<?php

class Paginas {
    public static function alterarHeader($tituloPagina, $iconePagina) {
        echo "<script>
                    document.title = '".$tituloPagina."';
                    document.head.children[2].href = '".$iconePagina."';
                </script>";
    }
}