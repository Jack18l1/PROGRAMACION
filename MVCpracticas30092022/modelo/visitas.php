<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";
class visitas {
    private $_idvisitas;
    private $_FechaDeSuper;
    private $_Tareas;
    private $_EstadoDeAvance;
    private $_tabla="visitas";
    private $_bd;

    public function __construct($idvisitas=null, $FechaDeSuper=null,$Tareas=null, $EstadoDeAvance=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_idvisitas = $idvisitas;
        $this->_FechaDeSuper= $FechaDeSuper;
        $this->_Tareas= $Tareas;
        $this->_EstadoDeAvance= $EstadoDeAvance;
    }
    public function leer(){
        $sql ="SELECT * FROM ". $this->_tabla .";";
        return $this->_bd->ejecutar($sql);
    }
     public function leerUno(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE idvisitas=".$this->_idvisitas;
        return $this->_bd->ejecutar($sql);    
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE idvisitas=".$this->_idvisitas;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE ". $this->_tabla 
            . " SET FechaDeSuper='".$this->_FechaDeSuper."',"
            . " Tareas='".$this->_Tareas."',"
            . " EstadoDeAvance='".$this->_EstadoDeAvance."'"
            ." WHERE idvisitas=".$this->_idvisitas;
        return $this->_bd->ejecutar($sql);
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
            ." (idvisitas, FechaDeSuper,Tareas , EstadoDeAvance) VALUES (".
                $this->_idvisitas .",'". $this->_FechaDeSuper ."','". $this->_Tareas."','". $this->_EstadoDeAvance."'"
            .");";
            return $this->_bd->ejecutar($sql);
        }
}