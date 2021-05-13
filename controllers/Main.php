<?php
namespace Controllers;
use MVC\Router;
use Model\Producto;
class Main{

    public function __construct(){
        
    }

    public static function main(Router $router){
        $productos = Producto::all();
        if (isset($_GET['insercion']) && $_GET['insercion']=== '1') {
            $mensaje = mensaje('El producto se agrego correctamente', 'bg-success');
        }else{
            $mensaje = null;
        }
        $datos= array(
            'productos' => $productos,
            'mensaje'=> $mensaje
        );
        $router->render('main/index', $datos);
    }

    public static function agregar(Router $router){
        $producto = new Producto();
        $errores= Producto::getErrores();
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            $producto->setProducto($_POST);
            $errores= $producto->validar();
            
            if (empty($errores)) {
                
                $resultado = $producto->agregar();
                if ($resultado) {
                    header('location: '. URL . '?insercion=1');
                }
            }
        }
        $datos=array(
            'errores' => $errores,
            'producto'=> $producto
        );
        $router->render('main/agregar', $datos);
    }
}//class