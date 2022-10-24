<?php

require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";


class anexo5indicador {
    private $_idanexo5ind;
    private $_Fecha;
    private $_Nota;
    private $_tabla="anexo5indicador";
    private $_bd;

    public function __construct($idanexo5ind=null, $Fecha=null,$Nota=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->idanexo5ind = $idanexo5ind;
        $this->_Fecha= $Fecha;
        $this->_Nota= $Nota;
    }
    public function leer(){
        $sql ="SELECT * FROM ". $this->_tabla .";";
        return $this->_bd->ejecutar($sql);
    }
     public function leerUno(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE idanexo5ind=".$this->idanexo5ind;
        return $this->_bd->ejecutar($sql);    
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE idanexo5ind=".$this->idanexo5ind;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE ". $this->_tabla 
            . " SET Fecha='".$this->_Fecha."',"
            . " Nota='".$this->_Nota."'"
            ." WHERE idanexo5ind=".$this->idanexo5ind;
        return $this->_bd->ejecutar($sql);
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
            ." (idanexo5ind, Fecha, Nota) VALUES (".
                $this->idanexo5ind .",'". $this->_Fecha ."','". $this->_Nota."'"
            .");";
        return $this->_bd->ejecutar($sql);
    }
}
