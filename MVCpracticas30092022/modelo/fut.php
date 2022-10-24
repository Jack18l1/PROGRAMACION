<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";
class fut {
    private $_idFut;
    private $_Nrorecibo;
    private $_Fecha;
    private $_detalleFut;
    private $_tabla="fut";
    private $_bd;

    public function __construct($idFut=null, $Nrorecibo=null,$Fecha=null,$detalleFut=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->idFut = $idFut;
        $this->_Nrorecibo= $Nrorecibo;
        $this->_Fecha= $Fecha;
        $this->_detalleFut= $detalleFut;
    }
    public function leer(){
        $sql ="SELECT * FROM ". $this->_tabla .";";
        return $this->_bd->ejecutar($sql);
    }
     public function leerUno(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE idFut=".$this->idFut;
        return $this->_bd->ejecutar($sql);    
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE idFut=".$this->idFut;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE ". $this->_tabla 
            . " SET Nrorecibo='".$this->_Nrorecibo."',"
            . " Fecha='".$this->_Fecha."',"
            . " detalleFut='".$this->_detalleFut."',"
            . " idFut='".$this->_idFut."'"
            ." WHERE idFut=".$this->idFut;

        return $this->_bd->ejecutar($sql);
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
            ." (idFut, Nrorecibo, Fecha, detalleFut) VALUES (".
                $this->idFut .",'". 
                $this->_Nrorecibo ."','". 
                $this->_Fecha."','". 
                $this->_detalleFut."'"
            .");";
            return $this->_bd->ejecutar($sql);
        }
}
