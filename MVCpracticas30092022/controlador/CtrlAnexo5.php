<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'anexo5.php';

require_once REC . DIRECTORY_SEPARATOR . 'Libreria.php';

/*
* Clase CtrlPrincipal
*/
class CtrlAnexo5 extends Controlador {
    public function index($msg=array('titulo'=>'','cuerpo'=>'')){
        $tipo = new anexo5 ();
        $misTipos = $tipo->leer();
        # var_dump($misTipos);exit();
        $menu= Libreria::getMenu();
        $migas = array(
            '?'=>'Inicio',
        );

        $datos = array(
            'titulo'=>"Tabla Anexo 5",
            'contenido'=>Vista::mostrar('anexo5/mostrar.php',$misTipos,true),
            'menu'=>$menu,
            'migas'=>$migas,
            'msg'=>$msg
        );
    
        $this->mostrarVista('template.php',$datos);
        
    }

    public function editar(){
        $idAnexo5 = $_GET["idAnexo5"];
        $tipo = new anexo5 ($idAnexo5);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editar : " .  $idAnexo5,
            'tipo'=>$miTipo["data"][0]
        );
        
        $this->mostrarVista('anexo5/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $idAnexo5 = $_POST["idAnexo5"];
        $RUC =$_POST["RUC"];
        $horario =$_POST["horario"];
        $miTipo = new anexo5 ($idAnexo5,$RUC,$horario); 
        $miTipo->editar();

        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $idAnexo5 = $_GET["id"];
        $tipo = new anexo5 ($idAnexo5);
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Anexo5: ",
           
        );
        
        $this->mostrarVista('anexo5/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $idAnexo5  = $_POST["idAnexo5"];
        $RUC =$_POST["RUC"];
        $horario =$_POST["horario"];
        $miTipo = new anexo5 ($idAnexo5,$RUC,$horario); 
        $miTipo->nuevo();
        $this->index(); // Recargo la Pagina
    }
}