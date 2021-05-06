<?php
namespace Controllers;
use MVC\Router;
class Main{

    public static function main(Router $router){
        $datos= array(
            'mensaje' => 'pasando datos',
            'color'=>'rojo'
        );
        $router->render('main/index', $datos);
    }

    public static function registrar_producto(){
        echo '<br>Registrando Producto';
    }
}//class