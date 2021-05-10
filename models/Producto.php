<?php
namespace Model;

class Producto {
    protected static $db;
    public function __construct(public string $nombre='',public string $proveedor='',public string $descripcion='', public float $precio=0.0,public int $stock=0, public string $fecha_registro='', public string $editado=''){

    }//

    public static function setDB($database){
        self::$db=$database;
    }

    public static function all(){
        $query = "SELECT * FROM  inventario ";
        $consulta=self::consultarSQL($query);
        return $consulta;
    }

    public static function consultarSQL($query){
        $resultado = self::$db->query($query);
        $array=array();
        while($resgistro = $resultado->fetch_assoc()){
            $array[]=self::crearObjeto($resgistro);
        }
        $resultado->free();
        return $array;
    }

    protected static function crearObjeto($resgistro){
        $objeto = new self;
        foreach($resgistro as $key=>$value){
            if(property_exists($objeto, $key)){
                $objeto->$key=$value;
            }
        }
        return $objeto;
    }
    
}//class