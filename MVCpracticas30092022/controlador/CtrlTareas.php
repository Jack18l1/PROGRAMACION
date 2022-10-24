<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'tareasAsignadas.php';
require_once REC . DIRECTORY_SEPARATOR . 'Libreria.php';

/*
* Clase CtrlPrincipal
*/
class CtrlTareas extends Controlador {
    public function index($msg=array('titulo'=>'','cuerpo'=>'')){
        $tipo = new tareasAsignadas ();
        $misTipos = $tipo->leer();
        # var_dump($misTipos);exit();
        $menu= Libreria::getMenu();
        $migas = array(
            '?'=>'Inicio',
        );

        $datos = array(
            'titulo'=>"Tabla Tareas Asignadas",
            'contenido'=>Vista::mostrar('tareasAsignadas/mostrar.php',$misTipos,true),
            'menu'=>$menu,
            'migas'=>$migas,
            'msg'=>$msg
        );
    
        $this->mostrarVista('template.php',$datos);
        
    }

    public function editar(){
        $idTareasAsig = $_GET["idTareasAsig"];
        $tipo = new tareasAsignadas ($idTareasAsig);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editar : " .  $idTareasAsig,
            'tipo'=>$miTipo["data"][0]
        );
        
        $this->mostrarVista('tareasAsignadas/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $idTareasAsig = $_POST["idTareasAsig"];
        $NombreTareasAsig =$_POST["NombreTareasAsig"];
        $miTipo = new tareasAsignadas ($idTareasAsig,$NombreTareasAsig); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $idTareasAsig = $_GET["id"];
        $tipo = new tareasAsignadas ($idTareasAsig);
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nueva Tarea: ",
           
        );
        
        $this->mostrarVista('tareasAsignadas/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $idTareasAsig  = $_POST["idTareasAsig"];
        $NombreTareasAsig =$_POST["NombreTareasAsig"];
        $miTipo = new tareasAsignadas ($idTareasAsig,$NombreTareasAsig); 
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}