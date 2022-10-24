<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'visitas.php';

/*
* Clase CtrlPrincipal
*/
class Ctrlvistas extends Controlador {
    public function index(){
        $tipo = new visitas ();
        $misTipos = $tipo->leer();
        
        $datos = array(
            'encabezado'=>"Tabla Visitas",
            'visitas'=>$misTipos
        );
    
        $this->mostrarVista('visitas/mostrar.php',$datos);
        
    }

    public function editar(){
        $idvisitas = $_GET["idvisitas"];
        $tipo = new visitas ($idvisitas);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editar : " .  $idvisitas,
            'visitas'=>$miTipo[0]
        );
        
        $this->mostrarVista('visitas/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $idvisitas = $_POST["idvisitas"];
        $FechaDeSuper =$_POST["FechaDeSuper"];
        $Tareas =$_POST["Tareas"];
        $EstadoDeAvance = $_POST ["EstadoDeAvance"];
        $miTipo = new visitas ($idvisitas,$FechaDeSuper,$Tareas,$EstadoDeAvance); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $idvisitas = $_GET["idvisitas"];
        $tipo = new visitas ($idvisitas);
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Anexo 4: ",
           
        );
        
        $this->mostrarVista('visitas/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $idvisitas = $_POST["idvisitas"];
        $FechaDeSuper =$_POST["FechaDeSuper"];
        $Tareas =$_POST["Tareas"];
        $EstadoDeAvance = $_POST ["EstadoDeAvance"];
        $miTipo = new visitas ($idvisitas,$FechaDeSuper,$Tareas,$EstadoDeAvance); 
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}