<?php
namespace Model;

class Producto {
    protected static $db;
    public function __construct(public int $id=0 ,public string $nombre_producto='',public string $proveedor='',public string $descripcion='', public float $precio=0.0,public int $stock=0, public string $fecha_registro='', public string $editado=''){

    }//

    public function setProducto($args=array()){
        $this->nombre_producto=$args['nombre_producto'];
        $this->proveedor=$args['proveedor'];
        $this->descripcion=$args['descripcion'];
        $this->precio=floatval($args['precio']);
        $this->stock= intval($args['stock']);
    }

    public function agregar(){
        $query = "INSERT INTO inventario (nombre_producto, proveedor, descripcion, precio, stock) VALUES ('$this->nombre_producto', '$this->proveedor', '$this->descripcion', '$this->precio', $this->stock)";
        self::$db->query($query);
    }

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