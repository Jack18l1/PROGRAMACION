<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'supervisor.php';

/*
* Clase CtrlPrincipal
*/
class Ctrlsupervisor extends Controlador {
    public function index(){
        $tipo = new supervisor ();
        $misTipos = $tipo->leer();
        
        $datos = array(
            'encabezado'=>"Tabla Supervisor",
            'supervisor'=>$misTipos
        );
    
        $this->mostrarVista('supervisor/mostrar.php',$datos);
        
    }

    public function editar(){
        $idsupervisoremp = $_GET["idsupervisoremp"];
        $tipo = new supervisor ($idsupervisoremp);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'encabezado'=>"Editar : " .  $idsupervisoremp,
            'supervisor'=>$miTipo[0]
        );
        
        $this->mostrarVista('supervisor/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $idsupervisoremp = $_POST["idsupervisoremp"];
        $cargo =$_POST["cargo"];
        $nombreSE =$_POST["nombreSE"];
        $ruc = $_POST ["ruc"];
        $miTipo = new supervisor ($idsupervisoremp,$cargo,$nombreSE,$ruc); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $idsupervisoremp = $_GET["idsupervisoremp"];
        $tipo = new supervisor ($idsupervisoremp);
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Anexo 4: ",
           
        );
        
        $this->mostrarVista('supervisor/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $idsupervisoremp = $_POST["idsupervisoremp"];
        $cargo =$_POST["cargo"];
        $nombreSE =$_POST["nombreSE"];
        $observaciones = $_POST ["observaciones"];
        $miTipo = new supervisor ($idsupervisoremp,$cargo,$nombreSE,$observaciones); 
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}