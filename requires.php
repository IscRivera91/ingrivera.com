<?php

    require_once('config/config.php');
    require_once('redirect.php');

    spl_autoload_register(function($nombreClase){
        if (file_exists('clases/'.$nombreClase.'.php')){
            require_once('clases/'.$nombreClase.'.php');
        }
    });





	