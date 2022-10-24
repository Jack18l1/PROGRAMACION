<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";

class supervisor {
    private $_idsupervisoremp;
    private $_cargo;
    private $_nombreSE;
    private $_observaciones;
    private $_ruc;
    private $_tabla="supervisor";
    private $_bd;

    public function __construct($idsupervisoremp=null, $cargo=null, $nombreSE=null, $observaciones=null, $ruc=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_idsupervisoremp =$idsupervisoremp;
        $this->_cargo=$cargo;
        $this->_nombreSE=$nombreSE;
        $this->_observaciones= $observaciones;
        $this->_ruc= $ruc;
    }
    public function leer(){
        $sql ="SELECT * FROM ". $this->_tabla .";";
        return $this->_bd->ejecutar($sql);
    }
     public function leerUno(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE idsupervisoremp=".$this->_idsupervisoremp;
        return $this->_bd->ejecutar($sql);    
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE idsupervisoremp=".$this->_idsupervisoremp;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE ". $this->_tabla 
            . " SET cargo='".$this->_cargo."',"
            . " nombreSE='".$this->_nombreSE."',"
            . " observaciones='".$this->_observaciones."',"
            . " ruc='".$this->_ruc."'"
            ." WHERE idsupervisoremp=".$this->_idsupervisoremp;
       
        return $this->_bd->ejecutar($sql);
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
        ."(idsupervisoremp,cargo,nombreSE,observaciones,ruc) VALUES ('".
        $this->_idsupervisoremp."','". 
        $this->_cargo."','".
        $this->_nombreSE."','".
        $this->_observaciones."','".
        $this->_ruc."')";
        return $this->_bd->ejecutar($sql);
    }
}