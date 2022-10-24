<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'empresaoinstitucion.php';

/*
* Clase CtrlPrincipal
*/
class CtrlEmpresa extends Controlador {
    public function index(){
        $tipo = new empresaoinstitucion ();
        $misTipos = $tipo->leer();
        
        $datos = array(
            'titulo'=>"Tabla Empresa o Institucion",
            'empresaoinstitucion'=>$misTipos
        );
    
        $this->mostrarVista('empresaoinstitucion/mostrar.php',$datos);
        
    }

    public function editar(){
        $ruc = $_GET["ruc"];
        $tipo = new empresaoinstitucion ($ruc);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editar : " .  $ruc,
            'tipo'=>$miTipo[0]
        );
        
        $this->mostrarVista('empresaoinstitucion/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $ruc = $_POST["ruc"];
        $direcionei =$_POST["direcionei"];
        $nombreei =$_POST["nombreei"];
        $telefonoei= $_POST ["telefonoei"];
        $idfut= $_POST ["idfut"];
        $miTipo = new empresaoinstitucion ($ruc,$direcionei,$nombreei,$telefonoei,$idfut); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $ruc  = $_GET["ruc"];
        $tipo = new empresaoinstitucion ($ruc );
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Empresa o Institucion: ",
           
        );
        
        $this->mostrarVista('empresaoinstitucion/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $ruc = $_POST["ruc"];
        $direcionei =$_POST["direcionei"];
        $nombreei =$_POST["nombreei"];
        $telefonoei= $_POST ["telefonoei"];
        $idfut= $_POST ["idfut"];
        $miTipo = new empresaoinstitucion ($ruc,$direcionei,$nombreei,$telefonoei,$idfut); 
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}