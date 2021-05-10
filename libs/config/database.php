<?php
function database() : mysqli{
    $database = new mysqli('localhost', 'root', '123456', 'sistema_inventario');
    if(!$database){
        echo 'no se pudo conectar';
        exit;
    }
    return $database;
}//