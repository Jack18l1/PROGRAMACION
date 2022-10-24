<?php

require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";


class modulo {
    private $_idmodulo;
    private $_periodo;
    private $_horarios;
    private $_observaciones;
    private $_idprograma;
    private $_tabla="modulo";
    private $_bd;

    public function __construct($idmodulo=null, $periodo=null, $horarios=null, $observaciones=null, $idprograma=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_idmodulo =$idmodulo;
        $this->_periodo=$periodo;
        $this->_horarios=$horarios;
        $this->_observaciones= $observaciones;
        $this->_idprograma= $idprograma;
    }
    public function leer(){
        $sql ="SELECT * FROM ". $this->_tabla .";";
        return $this->_bd->ejecutar($sql);
    }
     public function leerUno(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE idmodulo=".$this->_idmodulo;
        return $this->_bd->ejecutar($sql);    
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE idmodulo=".$this->_idmodulo;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE ". $this->_tabla 
            . " SET periodo='".$this->_periodo."',"
            . " horarios='".$this->_horarios."',"
            . " observaciones='".$this->_observaciones."',"
            . " idprograma='".$this->_idprograma."'"
            ." WHERE idmodulo=".$this->_idmodulo;
       
        return $this->_bd->ejecutar($sql);
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
        ."(idmodulo,periodo,horarios,observaciones,idprograma) VALUES ('".
        $this->_idmodulo."','". 
        $this->_periodo."','".
        $this->_horarios."','".
        $this->_observaciones."','".
        $this->_idprograma."')";
        return $this->_bd->ejecutar($sql);
    }
}
