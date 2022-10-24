<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";

class Anexo3 {
    private $_idanexo3;
    private $_RUC;
    private $_idservicio;
    private $_idexp;
    private $_idsupervisoremp;
    private $_iddocente;
    private $_tabla="anexo3";
    private $_bd;

    public function __construct($idanexo3=null, $RUC=null, $idservicio=null, $idexp=null, $idsupervisoremp=null, $iddocente=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_idanexo3= $idanexo3;
        $this->_RUC= $RUC;
        $this->_idservicio= $idservicio;
        $this->_idexp= $idexp;
        $this->_idsupervisoremp= $idsupervisoremp;
        $this->_iddocente= $iddocente;
    }
    public function leer(){
        $sql ="SELECT * FROM ". $this->_tabla .";";
        return $this->_bd->ejecutar($sql);
    }
     public function leerUno(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE idanexo3=".$this->_idanexo3;
        return $this->_bd->ejecutar($sql);    
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE idanexo3=".$this->_idanexo3;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE ". $this->_tabla 
            . " SET RUC='".$this->_RUC."',"
            . "idservicio='".$this->_idservicio."',"
            . "idexp='".$this->_idexp."',"
            . "idsupervisoremp='".$this->_idsupervisoremp."',"
            . "iddocente='".$this->_iddocente."',"
            . " idanexo3='".$this->_idanexo3."'"
            ." WHERE idanexo3=".$this->_idanexo3;
        return $this->_bd->ejecutar($sql);
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
            ." (idanexo3, RUC,idservicio,idexp,idsupervisoremp,iddocente) VALUES (".
                $this->_idanexo3 .",'". $this->_RUC ."','". $this->_idservicio ."','". $this->_idexp ."','". $this->_idsupervisoremp ."','". 
                $this->_iddocente."'"
            .");";
        return $this->_bd->ejecutar($sql);
    }
}
