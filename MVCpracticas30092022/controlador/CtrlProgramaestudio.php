<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'programaestudio.php';

/*
* Clase CtrlPrincipal
*/
class CtrlProgramaestudio extends Controlador {
    public function index(){
        $tipo = new programaestudio();
        $misTipos = $tipo->leer();
        
        $datos = array(
            'titulo'=>"Tabla programaestudio",
            'programaestudio'=>$misTipos
        );
        
        $this->mostrarVista('programaestudio/mostrar.php',$datos);
        
    }

    public function editar(){
        $idprograma = $_GET["idprograma"];
        $tipo = new programaestudio ($idprograma);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editando programaestudio: " . $idprograma,
            'tipo'=>$miTipo[0]
        );
        
        $this->mostrarVista('programaestudio/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $idprograma = $_POST["idprograma"];
        $nombredelprogramadeestudio=$_POST["nombredelprogramadeestudio"];
        $responsable = $_POST ["responsable"];
        $miTipo = new programaestudio ($idprograma,$nombredelprogramadeestudio,$responsable); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $idprograma = $_GET["idprograma"];

        $tipo = new programaestudio ($idprograma);
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo programaestudio: ",
           
        );
        
        $this->mostrarVista('programaestudio/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $idprograma = $_POST["idprograma"];
        $nombredelprogramadeestudio =$_POST["nombredelprogramadeestudio"];
        $miTipo = new programaestudio ($idprograma,$nombredelprogramadeestudio); 
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}