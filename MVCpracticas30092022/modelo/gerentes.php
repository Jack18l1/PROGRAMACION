<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";
class gerentes {
    private $_idGer;
    private $_NomGer;
    private $_ApellidosGer;
    private $_RucGer;
    private $_tabla="gerentes";
    private $_bd;

    public function __construct($idGer=null, $NomGer=null,$ApellidosGer=null,$RucGer=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_idGer = $idGer;
        $this->_NomGer= $NomGer;
        $this->_ApellidosGer= $ApellidosGer;
        $this->_RucGer= $RucGer;
    }
    public function leer(){
        $sql ="SELECT * FROM ". $this->_tabla .";";
        return $this->_bd->ejecutar($sql);
    }
     public function leerUno(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE idGer=".$this->_idGer;
        return $this->_bd->ejecutar($sql);    
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE idGer=".$this->_idGer;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE ". $this->_tabla 
            . " SET NomGer='".$this->_NomGer."',"
            . " ApellidosGer='".$this->_ApellidosGer."',"
            . " RucGer='".$this->_RucGer."'"
            ." WHERE idGer=".$this->_idGer;

        return $this->_bd->ejecutar($sql);
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
            ." (idGer, NomGer, ApellidosGer, RucGer) VALUES (".
                $this->_idGer .",'". 
                $this->_NomGer ."','". 
                $this->_ApellidosGer."','". 
                $this->_RucGer."'"
            .");";
            return $this->_bd->ejecutar($sql);
        }
}
