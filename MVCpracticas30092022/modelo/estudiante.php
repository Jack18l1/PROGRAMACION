<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";
class estudiantes {
    private $_CodEst;
    private $_NomEst;
    private $_ApellidosEst;
    private $_DniEst;
    private $_CorreoEst;
    private $_DirecEst;
    private $_TlfEst;
    private $_tabla="estudiantes";
    private $_bd;

    public function __construct($CodEst=null, $NomEst=null,$ApellidosEst=null,$DniEst=null,$CorreoEst=null,$DirecEst=null,$TlfEst=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_CodEst = $CodEst;
        $this->_NomEst= $NomEst;
        $this->_ApellidosEst= $ApellidosEst;
        $this->_DniEst= $DniEst;
        $this->_CorreoEst= $CorreoEst;
        $this->_DirecEst= $DirecEst;
        $this->_TlfEst= $TlfEst;
    }
    public function leer(){
        $sql ="SELECT * FROM ". $this->_tabla .";";
        return $this->_bd->ejecutar($sql);
    }
     public function leerUno(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE CodEst=".$this->_CodEst;
        return $this->_bd->ejecutar($sql);    
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE CodEst=".$this->_CodEst;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE ". $this->_tabla 
            . " SET NomEst='".$this->_NomEst."',"
            . " ApellidosEst='".$this->_ApellidosEst."',"
            . " DniEst='".$this->_DniEst."',"
            . " CorreoEst='".$this->_CorreoEst."',"
            . " DirecEst='".$this->_DirecEst."',"
            . " TlfEst='".$this->_TlfEst."'"
            ." WHERE CodEst=".$this->_CodEst;

        return $this->_bd->ejecutar($sql);
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
            ." (CodEst, NomEst, ApellidosEst, DniEst,CorreoEst,DirecEst,TlfEst) VALUES (".
            $this->_CodEst .",'". $this->_NomEst ."','". $this->_ApellidosEst."','".$this->_DniEst ."','".$this->_CorreoEst ."','".$this->_DirecEst."','". $this->_TlfEst."'"
            .");";
            return $this->_bd->ejecutar($sql);
        }
}
