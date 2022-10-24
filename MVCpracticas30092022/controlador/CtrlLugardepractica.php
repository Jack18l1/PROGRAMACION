<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'lugardepractica.php';
require_once REC . DIRECTORY_SEPARATOR . 'Libreria.php';

/*
* Clase CtrlPrincipal
*/
class CtrlLugardepractica extends Controlador {
    public function index($msg=array('titulo'=>'','cuerpo'=>'')){
        $tipo = new lugardepractica();
        $misTipos = $tipo->leer();
        # var_dump($misTipos);exit();
        $menu= Libreria::getMenu();
        $migas = array(
            '?'=>'Inicio',
        );

        $datos = array(
            'titulo'=>"Tabla Lugar de Practicas",
            'contenido'=>Vista::mostrar('lugardepractica/mostrar.php',$misTipos,true),
            'menu'=>$menu,
            'migas'=>$migas,
            'msg'=>$msg
        );
    
        $this->mostrarVista('template.php',$datos);
        
    }

    public function editar(){
        $idlugar = $_GET["idlugar"];
        $tipo = new lugardepractica ($idlugar);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editar : " .  $idlugar,
            'tipo'=>$miTipo["data"][0]
        );
        
        $this->mostrarVista('lugardepractica/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $idlugar = $_POST["idlugar"];
        $laboratorio =$_POST["laboratorio"];
        $campo =$_POST["campo"];
        $idanexo5 = $_POST ["idanexo5"];
        $miTipo = new lugardepractica ($idlugar,$laboratorio,$campo,$idanexo5); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $idlugar = $_GET["id"];
        $tipo = new lugardepractica ($idlugar);
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Lugar de Practica: ",
           
        );
        
        $this->mostrarVista('lugardepractica/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $idlugar  = $_POST["idlugar"];
        $laboratorio =$_POST["laboratorio"];
        $campo =$_POST["campo"];
        $idanexo5 = $_POST ["idanexo5"];
        $miTipo = new lugardepractica ($idlugar,$laboratorio,$campo,$idanexo5); 
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}