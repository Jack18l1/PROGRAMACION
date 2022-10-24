<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Modelo.php';
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";

class Usuario extends Modelo {
    private $_id;
    private $_nombre;
    private $_login;
    private $_clave;
    private $_estado;
    private $_perfil;
    private $_tabla="usuarios";
    private $_bd;

    public function __construct($id=null, $RUC=null,
                $login=null, $clave=null, $estado=null, $perfil=null){
        $this->_bd = new BaseDeDatos(new MySQL());
        $this->_id = $id;
        $this->_nombre= $RUC;
        $this->_login= $login;
        $this->_clave= $clave;
        $this->_estado= $estado;
        $this->_perfil= $perfil;
    }
    public function validarUsuario(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE login='".$this->_login ."' and clave='".$this->_clave ."'";
        return $this->_bd->ejecutar($sql);
    }
    public function leer(){
        $sql ="SELECT * FROM ". $this->_tabla .";";
        return $this->_bd->ejecutar($sql);
    }
     public function leerUno(){
        $sql= "SELECT * FROM ". $this->_tabla 
            . " WHERE idAnexo5=".$this->_id;
        
        $datos= $this->_bd->ejecutar($sql);  
        //var_dump($datos);exit();
        if (is_array($datos['data'])){
            $this->_id = $datos['data'][0]["idAnexo5"];
            $this->_nombre = $datos['data'][0]["RUC"];  
        }
        
        return $datos; 
    }
    public function eliminar(){
        $sql= "Delete FROM ". $this->_tabla 
            . " WHERE idAnexo5=".$this->_id;
        return $this->_bd->ejecutar($sql);    
    }
    public function editar(){
        $sql ="UPDATE ". $this->_tabla 
            . " SET RUC='".$this->_nombre."'"
            ." WHERE idAnexo5=".$this->_id;
        return $this->_bd->ejecutar($sql);
    }

    public function nuevo(){
        $sql = "INSERT INTO ". $this->_tabla 
            ." (idAnexo5, RUC) VALUES (".
                $this->_id .",'". $this->_nombre ."'"
            .");";
        return $this->_bd->ejecutar($sql);
    }
    public function getId(){
        return $this->_id;
    }
    public function getNombre(){
        return $this->_nombre;
    }
    public function setLogin($login){
        $this->_login=$login;
    }
    public function setClave($clave){
        $this->_clave=$clave;
    }

}
