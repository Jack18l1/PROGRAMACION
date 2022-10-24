<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";
class tareasAsignadas {
    private $_idTareasAsig;
    private $_NombreTareasAsig;
    private $_tabla="tareasasignadas";
    private $_bd;

    public function __construct($idTareasAsig=null, $NombreTareasAsig=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_idTareasAsig = $idTareasAsig;
        $this->_NombreTareasAsig= $NombreTareasAsig;
    }
    public function leer(){
        $sql ="SELECT * FROM ". $this->_tabla .";";
        return $this->_bd->ejecutar($sql);
    }
     public function leerUno(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE idTareasAsig=".$this->_idTareasAsig;
        return $this->_bd->ejecutar($sql);    
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE idTareasAsig=".$this->_idTareasAsig;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE ". $this->_tabla 
            . " SET NombreTareasAsig='".$this->_NombreTareasAsig."'"
            ." WHERE idTareasAsig=".$this->_idTareasAsig;

        return $this->_bd->ejecutar($sql);
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
            ." (idTareasAsig, NombreTareasAsig) VALUES (".
                $this->_idTareasAsig .",'". $this->_NombreTareasAsig ."'"
                .");";
            return $this->_bd->ejecutar($sql);
        }
}

