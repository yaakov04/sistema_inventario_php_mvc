<?php
namespace MVC;
class Router{
    public function __construct(){
        echo 'creando el router';
    }//

    public function comprobarRutas(){
        $urlActual= $_SERVER;
        bichos($urlActual);
    }

}