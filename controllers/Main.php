<?php
namespace Controllers;
use MVC\Router;
use Model\Producto;
class Main{

    public function __construct(){
        
    }

    public static function main(Router $router){
        $productos = Producto::all();
        bichos($productos);
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