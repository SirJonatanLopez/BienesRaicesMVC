<?php

function conectarDB() : mysqli{
    $db = new mysqli('localhost', 'root', 'admin', 'bienesraices_crud');
    if(!$db){
        echo 'No se pudo conectar';
        exit;
    }
    return $db;
}