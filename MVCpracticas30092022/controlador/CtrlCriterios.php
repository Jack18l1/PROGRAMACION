<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'criterios.php';

/*
* Clase CtrlPrincipal
*/
class CtrlCriterios extends Controlador {
    public function index(){
        $tipo = new criterios ();
        $misTipos = $tipo->leer();
        
        $datos = array(
            'titulo'=>"Tabla Criterios",
            'criterios'=>$misTipos
        );
    
        $this->mostrarVista('criterios/mostrar.php',$datos);
        
    }

    public function editar(){
        $idcriterios  = $_GET["idcriterios"];
        $tipo = new criterios ($idcriterios);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editar : " .  $idcriterios,
            'tipo'=>$miTipo[0]
        );
        
        $this->mostrarVista('criterios/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $idcriterios = $_POST["idcriterios"];
        $Tipodecriterio =$_POST["Tipodecriterio"];        
        $miTipo = new criterios ($idcriterios,$Tipodecriterio); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $idcriterios  = $_GET["idcriterios"];
        $tipo = new criterios ($idcriterios);
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Anexo 4: ",
           
        );
        
        $this->mostrarVista('criterios/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $idcriterios =$_POST["idcriterios"];
        $Tipodecriterio =$_POST["Tipodecriterio"];
        $miTipo = new criterios ($idcriterios,$Tipodecriterio); 
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}