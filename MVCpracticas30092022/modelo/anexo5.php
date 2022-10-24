<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";
class anexo5 extends Modelo{
    private $_idAnexo5;
    private $_RUC;
    private $_horario;
    private $_tabla="anexo5";
    private $_bd;

    public function __construct($idAnexo5=null, $RUC=null,$horario=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_idAnexo5 = $idAnexo5;
        $this->_RUC= $RUC;
        $this->_horario= $horario;
    }
    public function leer(){
        $sql ="SELECT * FROM ". $this->_tabla .";";
        return $this->_bd->ejecutar($sql);
    }
     public function leerUno(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE idAnexo5=".$this->_idAnexo5;
        return $this->_bd->ejecutar($sql);    
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE idAnexo5=".$this->_idAnexo5;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE ". $this->_tabla 
            . " SET RUC='".$this->_RUC."',"
            . " horario='".$this->_horario."'"
            ." WHERE idAnexo5=".$this->_idAnexo5;

        return $this->_bd->ejecutar($sql);
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
            ." (idAnexo5, RUC, horario) VALUES (".
                $this->_idAnexo5 .",'". $this->_RUC ."','". $this->_horario."'"
            .");";
            return $this->_bd->ejecutar($sql);
        }
}
