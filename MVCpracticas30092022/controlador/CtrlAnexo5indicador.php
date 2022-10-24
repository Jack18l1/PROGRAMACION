<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'anexo5indicador.php';

/*
* Clase CtrlPrincipal
*/
class CtrlAnexo5indicador extends Controlador {
    public function index(){
        $tipo = new anexo5indicador();
        $misTipos = $tipo->leer();
        
        $datos = array(
            'titulo'=>"Tabla Anexo 5 Indicador",
            'anexo5indicador'=>$misTipos
        );
        
        $this->mostrarVista('anexo5indicador/mostrar.php',$datos);
        
    }

    public function editar(){
        $idanexo5ind = $_GET["idanexo5ind"];
        $tipo = new anexo5indicador ($idanexo5ind);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editando Anexo 5 Indicador: " . $idanexo5ind,
            'tipo'=>$miTipo[0]
        );
        
        $this->mostrarVista('anexo5indicador/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $idanexo5ind = $_POST["idanexo5ind"];
        $Fecha=$_POST["Fecha"];
        $Nota = $_POST ["Nota"];
        $miTipo = new anexo5indicador ($idanexo5ind,$Fecha,$Nota); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $idanexo5ind = $_GET["idanexo5ind"];

        $tipo = new anexo5indicador ($idanexo5ind);
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo anexo 5 Indicador: ",
           
        );
        
        $this->mostrarVista('anexo5indicador/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $idanexo5ind = $_POST["idanexo5ind"];
        $Fecha =$_POST["Fecha"];
        $miTipo = new anexo5indicador ($idanexo5ind,$Fecha); 
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}