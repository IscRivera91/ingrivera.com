<?php
    function header_url(string $pagina){
        header('Location: '.RUTA_PROYECTO.$pagina);
        exit;
    }

    function get_url(string $pagina){
        return RUTA_PROYECTO.$pagina;
    }