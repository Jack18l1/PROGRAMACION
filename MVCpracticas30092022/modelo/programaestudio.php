<?php

require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";


class programaestudio {
    private $_idprograma;
    private $_nombredelprogramadeestudio;
    private $_responsable;
    private $_tabla="programaestudio";
    private $_bd;

    public function __construct($idprograma=null, $nombredelprogramadeestudio=null,$responsable=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->idprograma = $idprograma;
        $this->_nombredelprogramadeestudio= $nombredelprogramadeestudio;
        $this->_responsable= $responsable;
    }
    public function leer(){
        $sql ="SELECT * FROM ". $this->_tabla .";";
        return $this->_bd->ejecutar($sql);
    }
     public function leerUno(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE idprograma=".$this->idprograma;
        return $this->_bd->ejecutar($sql);    
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE idprograma=".$this->idprograma;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE ". $this->_tabla 
            . " SET nombredelprogramadeestudio='".$this->_nombredelprogramadeestudio."',"
            . " responsable='".$this->_responsable."'"
            ." WHERE idprograma=".$this->idprograma;
        return $this->_bd->ejecutar($sql);
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
            ." (idprograma, nombredelprogramadeestudio, responsable) VALUES (".
                $this->idprograma .",'". $this->_nombredelprogramadeestudio ."','". $this->_responsable."'"
            .");";
        return $this->_bd->ejecutar($sql);
    }
}

