<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";
class empresaoinstitucion {
    private $_ruc;
    private $_direcionei;
    private $_nombreei;
    private $_telefonoei;
    private $_idfut;
    private $_tabla="empresaoinstitucion";
    private $_bd;

    public function __construct($ruc=null, $direcionei=null, $nombreei=null, $telefonoei=null, $idfut=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_ruc =$ruc;
        $this->_direcionei=$direcionei;
        $this->_nombreei=$nombreei;
        $this->_telefonoei= $telefonoei;
        $this->_idfut= $idfut;
    }
    public function leer(){
        $sql ="SELECT * FROM ". $this->_tabla .";";
        return $this->_bd->ejecutar($sql);
    }
     public function leerUno(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE ruc=".$this->_ruc;
        return $this->_bd->ejecutar($sql);    
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE ruc=".$this->_ruc;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE ". $this->_tabla 
            . " SET direcionei='".$this->_direcionei."',"
            . " nombreei='".$this->_nombreei."',"
            . " telefonoei='".$this->_telefonoei."',"
            . " idfut='".$this->_idfut."'"
            ." WHERE ruc=".$this->_ruc;
       
        return $this->_bd->ejecutar($sql);
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
        ."(ruc,direcionei,nombreei,telefonoei,idfut) VALUES ('".
        $this->_ruc."','". 
        $this->_direcionei."','".
        $this->_nombreei."','".
        $this->_telefonoei."','".
        $this->_idfut."')";
        return $this->_bd->ejecutar($sql);
    }
}
