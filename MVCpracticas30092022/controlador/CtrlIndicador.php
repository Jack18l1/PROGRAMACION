<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'indicador.php';

/*
* Clase CtrlPrincipal
*/
class CtrlIndicador extends Controlador {
    public function index(){
        $tipo = new indicador();
        $misTipos = $tipo->leer();
        
        $datos = array(
            'titulo'=>"Tabla Indicador",
            'indicador'=>$misTipos
        );
        
        $this->mostrarVista('indicador/mostrar.php',$datos);
        
    }

    public function editar(){
        $idIn = $_GET["idIn"];
        $tipo = new indicador ($idIn);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editando Indicador: " . $idIn,
            'tipo'=>$miTipo[0]
        );
        
        $this->mostrarVista('indicador/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $idIn = $_POST["idIn"];
        $Indicadores=$_POST["Indicadores"];
        $Criterios = $_POST ["Criterios"];
        $miTipo = new indicador ($idIn,$Indicadores,$Criterios); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $idIn = $_GET["idIn"];

        $tipo = new indicador ($idIn);
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Indicador: ",
           
        );
        
        $this->mostrarVista('indicador/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $idIn = $_POST["idIn"];
        $Indicadores =$_POST["Indicadores"];
        $miTipo = new indicador ($idIn,$Indicadores); 
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}