<?php

require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";

class criterios {
    private $_idcriterios;
    private $_Tipodecriterio;
    private $_tabla="criterios";
    private $_bd;

    public function __construct($idcriterios=null, $Tipodecriterio=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->idcriterios = $idcriterios;
        $this->_Tipodecriterio= $Tipodecriterio;
    }
    public function leer(){
        $sql ="SELECT * FROM ". $this->_tabla .";";
        return $this->_bd->ejecutar($sql);
    }
     public function leerUno(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE idcriterios=".$this->idcriterios;
        return $this->_bd->ejecutar($sql);    
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE idcriterios=".$this->idcriterios;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE ". $this->_tabla 
            . " SET Tipodecriterio='".$this->_Tipodecriterio."'"
            ." WHERE idcriterios=".$this->idcriterios;
        return $this->_bd->ejecutar($sql);
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
            ." (idcriterios, Tipodecriterio) VALUES (".
                $this->idcriterios .",'". $this->_Tipodecriterio ."'"
            .");";
        return $this->_bd->ejecutar($sql);
    }
}
