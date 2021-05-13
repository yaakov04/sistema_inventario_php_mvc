<?php

function mensaje(string $mensaje, string $background){
    return "
    <div class='m-1 p-2 text-center text-uppercase $background color-blanco'>
        $mensaje
    </div>
    ";
}

function bichos($variable){
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
    exit;
}