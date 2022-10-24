<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'gerentes.php';

/*
* Clase CtrlPrincipal
*/
class CtrlGerentes extends Controlador {
    public function index(){
        $tipo = new gerentes ();
        $misTipos = $tipo->leer();
        
        $datos = array(
            'titulo'=>"Tabla Gerentes",
            'gerentes'=>$misTipos
        );
    
        $this->mostrarVista('gerentes/mostrar.php',$datos);
        
    }

    public function editar(){
        $idGer = $_GET["idGer"];
        $tipo = new gerentes ($idGer);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editar : " .  $idGer,
            'tipo'=>$miTipo[0]
        );
        
        $this->mostrarVista('gerentes/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $idGer = $_POST["idGer"];
        $NomGer =$_POST["NomGer"];
        $ApellidosGer =$_POST["ApellidosGer"];
        $RucGer = $_POST ["RucGer"];
        $miTipo = new gerentes ($idGer,$NomGer,$ApellidosGer,$RucGer); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $idGer = $_GET["idGer"];
        $tipo = new gerentes ($idGer);
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Anexo 4: ",
           
        );
        
        $this->mostrarVista('gerentes/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $idGer= $_POST["idGer"];
        $NomGer =$_POST["NomGer"];
        $ApellidosGer =$_POST["ApellidosGer"];
        $RucGer= $_POST ["RucGer"];
        $miTipo = new gerentes ($idGer,$NomGer,$ApellidosGer,$RucGer); 
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}