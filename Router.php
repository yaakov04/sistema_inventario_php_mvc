<?php
namespace MVC;
class Router{
    public $rutasGET= array();
    public $rutasPOST=array();

    public function __construct(){
       
    }//

    public function get($url, $fn){
        $this->rutasGET[$url]=$fn;
    }

    public function comprobarRutas(){
       
        $url=isset($_GET['url'])?$_GET['url']:null;

        if(!($url===null)){
            $url = str_replace('public/', '/', $url);
        }
       
        $urlActual= $url?? '/';
        
        $metodo = $_SERVER['REQUEST_METHOD'];


        if($metodo==='GET'){
            $fn = $this->rutasGET[$urlActual]?? null;
            
        }
        if($fn){
            
            call_user_func($fn, $this);
        }else{
            echo 'Pagina no existe';
        }
    }//

    public function render($vista, $datos=array()){
        foreach($datos as $key => $value){
            $$key = $value;
        }
        ob_start();
        include_once __DIR__."/views/{$vista}.php";
        $contenido = ob_get_clean();
        include_once __DIR__."/views/layout.php";
    }
}