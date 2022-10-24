<?php

require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";

class expediente {
    private $_idExp;
    private $_FechaFut;
    private $_NumFut;
    private $_informeExp;
    private $_idPrograma;
    private $_Codigo;
    private $_tabla="expediente";
    private $_bd;

    public function __construct($idExp=null, $FechaFut=null,$NumFut=null,$informeExp=null,$idPrograma=null,$Codigo=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_idExp = $idExp;
        $this->_FechaFut= $FechaFut;
        $this->_NumFut= $NumFut;
        $this->_informeExp= $informeExp;
        $this->_idPrograma= $idPrograma;
        $this->_Codigo= $Codigo;
    }
    public function leer(){
        $sql ="SELECT * FROM ". $this->_tabla .";";
        return $this->_bd->ejecutar($sql);
    }
     public function leerUno(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE idExp=".$this->_idExp;
        return $this->_bd->ejecutar($sql);    
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE idExp=".$this->_idExp;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE ". $this->_tabla 
            . " SET FechaFut='".$this->_FechaFut."',"
            . " NumFut='".$this->_NumFut."',"
            . " informeExp='".$this->_informeExp."',"
            . " idPrograma='".$this->_idPrograma."',"
            . " Codigo='".$this->_Codigo."'"
            ." WHERE idExp=".$this->_idExp;

        return $this->_bd->ejecutar($sql);
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
            ." (idExp, FechaFut, NumFut, informeExp, idPrograma, Codigo) VALUES (".
            $this->_idExp .",'". $this->_FechaFut ."','". $this->_NumFut."','".$this->_informeExp ."','".$this->_idPrograma ."','".$this->_Codigo."'"
            .");";
            return $this->_bd->ejecutar($sql);
        }
}
