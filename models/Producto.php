<?php
namespace Model;

class Producto {
    protected static $db;
    protected static $columnasDB = array('id','nombre_producto', 'proveedor','descripcion','precio','stock','fecha_registro','editado');
    protected static $errores = array();
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
        $atributos=$this->sanitizarAtributos();
        $query = " INSERT INTO inventario ( ";
        $query .= join(', ', array_keys($atributos));
        $query .= " ) VALUES ( ' ";
        $query .= join("', '", array_values($atributos));
        $query .= " ') ";
        $resultado = self::$db->query($query);
        return $resultado;
    }
    public function atributos(){
        $atributos = array();
        foreach(self::$columnasDB as $columna){
            if($columna==='id'||$columna==='fecha_registro'||$columna==='editado') continue;
            $atributos[$columna]= $this->$columna;
        }
        return $atributos;
    }
    public function sanitizarAtributos(){  
        $atributos = $this->atributos();
        $sanitizado = array();
        foreach($atributos as $key => $value){
            $sanitizado[$key]=self::$db->escape_string($value);
        }
        return $sanitizado;
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
    public static function getErrores(){
        return self::$errores;
    }
    public function validar(){
        if (!$this->nombre_producto) {
            self::$errores[]='El nombre es obligatorio';
        }
        if (!$this->proveedor) {
            self::$errores[]='El proveedor es obligatorio';
        }
        if (strlen($this->descripcion)<80) {
            self::$errores[]='La descripcion es obligatoria y debe tener al menos 80 caracteres';
        }
        if (!$this->precio) {
            self::$errores[]='El precio es obligatorio';
        }
        if (!$this->stock) {
            self::$errores[]='El stock es obligatorio';
        }
        return self::$errores;
    }
}//class