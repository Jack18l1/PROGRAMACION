<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'expediente.php';

/*
* Clase CtrlPrincipal
*/
class CtrlExpediente extends Controlador {
    public function index(){
        $tipo = new expediente ();
        $misTipos = $tipo->leer();
        
        $datos = array(
            'titulo'=>"Tabla Expediente",
            'expediente'=>$misTipos
        );
    
        $this->mostrarVista('expediente/mostrar.php',$datos);
        
    }

    public function editar(){
        $idExp = $_GET["idExp"];
        $tipo = new expediente ($idExp);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editar : " .  $idExp,
            'tipo'=>$miTipo[0]
        );
        
        $this->mostrarVista('expediente/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $idExp =$_POST["idExp"];
        $FechaFut =$_POST["FechaFut"];
        $NumFut =$_POST["NumFut"];
        $informeExp =$_POST["informeExp"];
        $Codigo =$_POST["Codigo"];
        $idPrograma =$_POST["idPrograma"];
        $miTipo = new expediente ($idExp,$FechaFut,$NumFut,$informeExp,$Codigo,$idPrograma); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $idExp = $_GET["idExp"];
        $tipo = new  expediente  ($idExp);
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Expediente: ",
           
        );
        
        $this->mostrarVista('expediente/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        
        $idExp =$_POST["idExp"];
        $FechaFut =$_POST["FechaFut"];
        $NumFut =$_POST["NumFut"];
        $informeExp =$_POST["informeExp"];
        $Codigo =$_POST["Codigo"];
        $idPrograma =$_POST["idPrograma"];
        $miTipo = new expediente ($idExp,$FechaFut,$NumFut,$informeExp,$Codigo,$idPrograma);
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}