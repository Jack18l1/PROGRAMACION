<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'anexo3.php';

/*
* Clase CtrlPrincipal
*/
class CtrlAnexo3 extends Controlador {
    public function index(){
        $tipo = new Anexo3();
        $misTipos = $tipo->leer();
        
        $datos = array(
            'titulo'=>"Tabla Anexo 3",
            'anexo3'=>$misTipos
        );
        
        $this->mostrarVista('anexo3/mostrar.php',$datos);
        
    }

    public function editar(){
        $idanexo3 = $_GET["idanexo3"];
        $tipo = new Anexo3 ($idanexo3);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editando Tipos de Persona: " . $idanexo3,
            'tipo'=>$miTipo[0]
        );
        
        $this->mostrarVista('anexo3/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $idanexo3 = $_POST["idanexo3"];
        $RUC =$_POST["RUC"];
        $idservicio = $_POST ["idservicio"];
        $idexp =$_POST["idexp"];
        $idsupervisoremp =$_POST["idsupervisoremp"];
        $iddocente =$_POST["iddocente"];
        $miTipo = new Anexo3 ($idanexo3,$RUC,$idservicio,$idexp,$idsupervisoremp,$iddocente); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $idanexo3 = $_GET["idanexo3"];

        $tipo = new Anexo3 ($idanexo3);
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo anexo 3: ",
           
        );
        
        $this->mostrarVista('anexo3/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $idanexo3 = $_POST["idanexo3"];
        $RUC =$_POST["RUC"];
        $idservicio = $_POST ["idservicio"];
        $idexp =$_POST["idexp"];
        $idsupervisoremp =$_POST["idsupervisoremp"];
        $iddocente =$_POST["iddocente"];
        $miTipo = new Anexo3 ($idanexo3,$RUC,$idservicio,$idexp,$idsupervisoremp,$iddocente ); 
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}