<?php

require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";


class indicador {
    private $_idIn;
    private $_Indicadores;
    private $_Criterios;
    private $_tabla="indicador";
    private $_bd;

    public function __construct($idIn=null, $Indicadores=null,$Criterios=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->idIn = $idIn;
        $this->_Indicadores= $Indicadores;
        $this->_Criterios= $Criterios;
    }
    public function leer(){
        $sql ="SELECT * FROM ". $this->_tabla .";";
        return $this->_bd->ejecutar($sql);
    }
     public function leerUno(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE idIn=".$this->idIn;
        return $this->_bd->ejecutar($sql);    
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE idIn=".$this->idIn;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE ". $this->_tabla 
            . " SET Indicadores='".$this->_Indicadores."',"
            . " Criterios='".$this->_Criterios."'"
            ." WHERE idIn=".$this->idIn;
        return $this->_bd->ejecutar($sql);
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
            ." (idIn, Indicadores,Criterios) VALUES (".
                $this->idIn .",'". $this->_Indicadores ."','". $this->_Criterios."'"
            .");";
        return $this->_bd->ejecutar($sql);
    }
}
