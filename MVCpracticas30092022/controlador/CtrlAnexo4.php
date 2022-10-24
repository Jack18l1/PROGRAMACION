<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'Anexo4.php';

/*
* Clase CtrlPrincipal
*/
class CtrlAnexo4 extends Controlador {
    public function index(){
        $tipo = new Anexo4 ();
        $misTipos = $tipo->leer();
        
        $datos = array(
            'titulo'=>"Tabla Anexo 4",
            'Anexo4'=>$misTipos
        );
    
        $this->mostrarVista('anexo4/mostrar.php',$datos);
        
    }

    public function editar(){
        $idanexo4 = $_GET["idanexo4"];
        $tipo = new Anexo4 ($idanexo4);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editar : " .  $idanexo4,
            'tipo'=>$miTipo[0]
        );
        
        $this->mostrarVista('anexo4/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $idanexo4 = $_POST["idanexo4"];
        $problemas_detectados =$_POST["problemas_detectados"];
        $observacion =$_POST["observacion"];
        $RUC = $_POST ["RUC"];
        $miTipo = new Anexo4 ($idanexo4,$problemas_detectados,$observacion,$RUC); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $idanexo4 = $_GET["idanexo4"];
        $tipo = new Anexo4 ($idanexo4);
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Anexo 4: ",
           
        );
        
        $this->mostrarVista('anexo4/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $idanexo4 = $_POST["idanexo4"];
        $problemas_detectados =$_POST["problemas_detectados"];
        $observacion =$_POST["observacion"];
        $RUC = $_POST ["RUC"];
        $miTipo = new Anexo4 ($idanexo4,$problemas_detectados,$observacion,$RUC); 
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}