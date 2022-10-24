<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";
class lugardepractica {
    private $_idlugar;
    private $_laboratorio;
    private $_campo;
    private $_idanexo5;
    private $_tabla="lugardepractica";
    private $_bd;

    public function __construct($idlugar=null, $laboratorio=null,$campo=null,$idanexo5=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_idlugar =$idlugar;
        $this->_laboratorio=$laboratorio;
        $this->_campo=$campo;
        $this->_idanexo5= $idanexo5;
    }
    public function leer(){
        $sql ="SELECT * FROM ". $this->_tabla .";";
        return $this->_bd->ejecutar($sql);
    }
     public function leerUno(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE idlugar=".$this->_idlugar;
        return $this->_bd->ejecutar($sql);    
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE idlugar=".$this->_idlugar;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE ". $this->_tabla 
            . " SET laboratorio='".$this->_laboratorio."',"
            . " campo='".$this->_campo."',"
            . " idanexo5='".$this->_idanexo5."'"
            ." WHERE idlugar=".$this->_idlugar;
        
        return $this->_bd->ejecutar($sql);
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
        ."(idlugar,laboratorio,campo,idanexo5) VALUES ('".
        $this->_idlugar."','". 
        $this->_laboratorio."','".
        $this->_campo."','".
        $this->_idanexo5."')";
        return $this->_bd->ejecutar($sql);
    }
}
