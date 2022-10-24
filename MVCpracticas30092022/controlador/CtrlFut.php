<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'fut.php';

/*
* Clase CtrlPrincipal
*/
class CtrlFut extends Controlador {
    public function index(){
        $tipo = new fut();
        $misTipos = $tipo->leer();
        
        $datos = array(
            'titulo'=>"Tabla FUT",
            'fut'=>$misTipos
        );
        
        $this->mostrarVista('fut/mostrar.php',$datos);
        
    }

    public function editar(){
        $idFut = $_GET["idFut"];
        $tipo = new fut ($idFut);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editar: " . $idFut,
            'tipo'=>$miTipo[0]
        );
        
        $this->mostrarVista('fut/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $idFut= $_POST["idFut"];
        $Nrorecibo=$_POST["Nrorecibo"];
        $Fecha = $_POST ["Fecha"];
        $detalleFut =$_POST ["detalleFut"];
        $miTipo = new fut ($idFut,$Nrorecibo,$Fecha,$detalleFut); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $idFut= $_GET["idFut"];
        $tipo = new fut ($idFut);
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Fut: ",
           
        );
        
        $this->mostrarVista('fut/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $idFut = $_POST["idFut"];
        $Nrorecibo =$_POST["Nrorecibo"];
        $Fecha =$_POST["Fecha"];
        $detalleFut =$_POST["detalleFut"];
        $miTipo = new fut ($idFut,$Nrorecibo,$Fecha,$detalleFut); 
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}