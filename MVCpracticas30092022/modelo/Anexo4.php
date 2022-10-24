<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";
class Anexo4 {
    private $_idanexo4;
    private $_problemas_detectados;
    private $_observacion;
    private $_RUC;
    private $_tabla="anexo4";
    private $_bd;

    public function __construct($idanexo4=null, $problemas_detectados=null, $observacion=null, $RUC=null, $idexp=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_idanexo4= $idanexo4;
        $this->_problemas_detectados= $problemas_detectados;
        $this->_observacion= $observacion;
        $this->_RUC= $RUC;

    }
    public function leer(){
        $sql ="SELECT * FROM ". $this->_tabla .";";
        return $this->_bd->ejecutar($sql);
    }
     public function leerUno(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE idanexo4=".$this->_idanexo4;
        return $this->_bd->ejecutar($sql);    
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE idanexo4=".$this->_idanexo4;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE ". $this->_tabla 
            . " SET problemas_detectados='".$this->_problemas_detectados."',"
            . "observacion='".$this->_observacion."',"
            . "RUC='".$this->_RUC."',"
            . " idanexo4='".$this->_idanexo4."'"
            ." WHERE idanexo4=".$this->_idanexo4;
        return $this->_bd->ejecutar($sql);
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
            ." (idanexo4, problemas_detectados,observacion,RUC) VALUES (".
                $this->_idanexo4 .",'". 
                $this->_problemas_detectados ."','". 
                $this->_observacion ."','". 
                $this->_RUC ."'"
            .");";
        return $this->_bd->ejecutar($sql);
    }
}
