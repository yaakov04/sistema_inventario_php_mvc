<?php
namespace Controllers;
use MVC\Router;
use Model\Producto;
class Main{

    public function __construct(){
        
    }

    public static function main(Router $router){
        $productos = Producto::all();
        $mensaje = null;
        if (isset($_GET['guardado']) && $_GET['guardado']=== '1') {
            $mensaje = mensaje('El registro se guardo correctamente', 'bg-success');
        }
        if (isset($_GET['error']) && $_GET['error']=== '1') {
            $mensaje = mensaje('No es un id valido', 'bg-danger');
        }
        if (isset($_GET['eliminar']) && $_GET['eliminar']=== '1') {
            $mensaje = mensaje('Registro eliminado correctamente', 'bg-success');
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
            $producto->setProducto($_POST['producto']);
            $errores= $producto->validar();
            
            if (empty($errores)) {
                
                $resultado = $producto->guardar();
                if ($resultado) {
                    header('location: '. URL . '?guardado=1');
                }
            }
        }
        $datos=array(
            'errores' => $errores,
            'producto'=> $producto
        );
        $router->render('main/agregar', $datos);
    }//agregar

    public static function editar(Router $router){
        $id = $_GET['producto'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
        if (!$id) {
            header('location: '.URL. '?error=1');
        }
        $errores= Producto::getErrores();
        $producto = Producto::find($id);
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            $producto->sincronizar($_POST['producto']);
            $errores= $producto->validar();
            if (empty($errores)) {
                $resultado= $producto->guardar();
                if ($resultado) {
                    header('location: '. URL . '?guardado=1');
                }
            }
        }
       
        $datos=array(
            'errores' => $errores,
            'producto'=> $producto
        );
        $router->render('main/editar', $datos);
    }//
    public static function eliminar(){
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            $id = $_POST['id'];
            if (!$id) {
                header('location: '.URL. '?error=1');
            }
            $id = filter_var($id, FILTER_VALIDATE_INT);
            $producto = Producto::find($id);
            $resultado = $producto->eliminar();
            if ($resultado) {
                header('location: '. URL . '?eliminar=1');
            }
        }
    }
}//class