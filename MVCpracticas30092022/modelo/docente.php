<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";
class docente {
    private $_idDoc;
    private $_NomDoc;
    private $_ApellidosDoc;
    private $_DniDoc;
    private $_tabla="docentes";
    private $_bd;

    public function __construct($idDoc=null, $NomDoc=null,$ApellidosDoc=null,$DniDoc=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_idDoc = $idDoc;
        $this->_NomDoc= $NomDoc;
        $this->_ApellidosDoc= $ApellidosDoc;
        $this->_DniDoc= $DniDoc;
    }
    public function leer(){
        $sql ="SELECT * FROM ". $this->_tabla .";";
        return $this->_bd->ejecutar($sql);
    }
     public function leerUno(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE idDoc=".$this->_idDoc;
        return $this->_bd->ejecutar($sql);    
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE idDoc=".$this->_idDoc;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE ". $this->_tabla 
            . " SET NomDoc='".$this->_NomDoc."',"
            . " ApellidosDoc='".$this->_ApellidosDoc."',"
            . " DniDoc='".$this->_DniDoc."'"
            ." WHERE idDoc=".$this->_idDoc;

        return $this->_bd->ejecutar($sql);
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
            ." (idDoc, NomDoc, ApellidosDoc, DniDoc) VALUES (".
                $this->_idDoc .",'". 
                $this->_NomDoc ."','". 
                $this->_ApellidosDoc."','". 
                $this->_DniDoc."'"
            .");";
            return $this->_bd->ejecutar($sql);
        }
}
