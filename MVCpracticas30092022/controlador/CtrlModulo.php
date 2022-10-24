<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'modulo.php';
require_once REC . DIRECTORY_SEPARATOR . 'Libreria.php';

/*
* Clase CtrlPrincipal
*/
class CtrlModulo extends Controlador {
    public function index($msg=array('titulo'=>'','cuerpo'=>'')){
        $tipo = new modulo ();
        $misTipos = $tipo->leer();
        # var_dump($misTipos);exit();
        $menu= Libreria::getMenu();
        $migas = array(
            '?'=>'Inicio',
        );

        $datos = array(
            'titulo'=>"Tabla Modulo",
            'contenido'=>Vista::mostrar('modulo/mostrar.php',$misTipos,true),
            'menu'=>$menu,
            'migas'=>$migas,
            'msg'=>$msg
        );
    
        $this->mostrarVista('template.php',$datos);
        
    }

    public function editar(){
        $idmodulo = $_GET["idmodulo"];
        $tipo = new modulo ($idmodulo);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editar : " .  $idmodulo,
            'tipo'=>$miTipo["data"][0]
        );
        
        $this->mostrarVista('modulo/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $idmodulo = $_POST["idmodulo"];
        $periodo =$_POST["periodo"];
        $horarios =$_POST["horarios"];
        $observaciones= $_POST ["observaciones"];
        $idprograma= $_POST ["idprograma"];
        $miTipo = new modulo ($idmodulo,$periodo,$horarios,$observaciones,$idprograma); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $idmodulo  = $_GET["id"];
        $tipo = new modulo ($idmodulo );
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Modulo: ",
           
        );
        
        $this->mostrarVista('modulo/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $idmodulo = $_POST["idmodulo"];
        $periodo =$_POST["periodo"];
        $horarios =$_POST["horarios"];
        $observaciones= $_POST ["observaciones"];
        $idprograma= $_POST ["idprograma"];
        $miTipo = new modulo ($idmodulo,$periodo,$horarios,$observaciones,$idprograma); 
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}