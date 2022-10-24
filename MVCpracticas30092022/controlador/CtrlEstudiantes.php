<?php
require_once SYS . DIRECTORY_SEPARATOR . 'controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'estudiante.php';
require_once REC . DIRECTORY_SEPARATOR . 'Libreria.php';

/*
* Clase CtrlPrincipal
*/
class CtrlEstudiantes extends Controlador {
    public function index($msg=array('titulo'=>'','cuerpo'=>'')){
        $tipo = new estudiantes ();
        $misTipos = $tipo->leer();
        # var_dump($misTipos);exit();
        $menu= Libreria::getMenu();
        $migas = array(
            '?'=>'Inicio',
        );

        $datos = array(
            'titulo'=>"Tabla Estudiantes",
            'contenido'=>Vista::mostrar('estudiante/mostrar.php',$misTipos,true),
            'menu'=>$menu,
            'migas'=>$migas,
            'msg'=>$msg
        );
    
        $this->mostrarVista('template.php',$datos);
        
    }

    public function editar(){
        $CodEst = $_GET["CodEst"];
        $tipo = new estudiantes ($CodEst);
        $miTipo = $tipo->leerUno();
        $datos = array(
            'titulo'=>"Editar : " .  $CodEst,
            'tipo'=>$miTipo["data"][0]
        );
        
        $this->mostrarVista('estudiante/frmEditar.php',$datos);
    }
    public function guardarEditar(){
        $CodEst =$_POST["CodEst"];
        $NomEst =$_POST["NomEst"];
        $ApellidosEst =$_POST["ApellidosEst"];
        $DniEst =$_POST["DniEst"];
        $CorreoEst =$_POST["CorreoEst"];
        $DirecEst =$_POST["DirecEst"];
        $TlfEst =$_POST["TlfEst"];
        $miTipo = new estudiantes ($CodEst,$NomEst,$ApellidosEst,$DniEst,$CorreoEst,$DirecEst,$TlfEst); 
        $miTipo->editar();
       
        $this->index(); // Recargo la Pagina
    }
    public function eliminar(){
        $CodEst = $_GET["id"];
        $tipo = new  estudiantes  ($CodEst);
        $tipo->eliminar();

        $this->index(); // Recargo la Pagina
    }
    public function nuevo(){
        $datos = array(
            'titulo'=>"Nuevo Estudiantes: ",
           
        );
        
        $this->mostrarVista('estudiante/frmNuevo.php',$datos);
    }
    public function guardarNuevo(){
        $CodEst = $_POST ["CodEst"];
        $NomEst = $_POST["NomEst"];
        $ApellidosEst =$_POST["ApellidosEst"];
        $DniEst =$_POST["DniEst"];
        $CorreoEst =$_POST["CorreoEst"];
        $DirecEst = $_POST ["DirecEst"];
        $TlfEst =$_POST["TlfEst"];
        $miTipo = new estudiantes ($CodEst,$NomEst,$ApellidosEst,$DniEst,$CorreoEst,$DirecEst,$TlfEst); 
        $miTipo->nuevo();

        $this->index(); // Recargo la Pagina
    }
}