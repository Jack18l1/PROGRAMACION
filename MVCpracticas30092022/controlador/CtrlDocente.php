<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'docente.php';

/*
* Clase CtrlPrincipal
*/
class CtrlDocente extends Controlador {
    public function index(){
        $tipo = new docente ();
        $misTipos = $tipo->leer();
        
        $datos = array(
            'titulo'=>"Tabla Docente",
            'docente'=>$misTipos
        );
    
        $this->mostrarVista('docente/mostrar.php',$datos);
        
    }

    public function editar(){
        $idDoc = $_GET["idDoc"];
        $tipo = new docente ($idDoc);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editar : " .  $idDoc,
            'tipo'=>$miTipo[0]
        );
        
        $this->mostrarVista('docente/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $idDoc = $_POST["idDoc"];
        $NomDoc =$_POST["NomDoc"];
        $ApellidosDoc =$_POST["ApellidosDoc"];
        $DniDoc = $_POST ["DniDoc"];
        $miTipo = new docente ($idDoc,$NomDoc,$ApellidosDoc,$DniDoc); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $idDoc = $_GET["idDoc"];
        $tipo = new docente ($idDoc);
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Docente: ",
           
        );
        
        $this->mostrarVista('docente/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $idDoc  = $_POST["idDoc"];
        $NomDoc =$_POST["NomDoc"];
        $ApellidosDoc =$_POST["ApellidosDoc"];
        $DniDoc = $_POST ["DniDoc"];
        $miTipo = new docente ($idDoc,$NomDoc,$ApellidosDoc,$ApellidosDoc,$DniDoc); 
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}