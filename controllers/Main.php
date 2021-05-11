<?php
namespace Controllers;
use MVC\Router;
use Model\Producto;
class Main{

    public function __construct(){
        
    }

    public static function main(Router $router){
        $productos = Producto::all();
        //bichos($productos);
        $datos= array(
            'productos' => $productos,
            'color'=>'rojo'
        );
        $router->render('main/index', $datos);
    }

    public static function agregar(Router $router){
        $datos=array();
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            $producto = new Producto();
            //$producto->nombre_producto=$_POST['nombre_producto'];
            $producto->setProducto($_POST);
            $producto->agregar();
        }
        $router->render('main/agregar', $datos);
    }
}//class