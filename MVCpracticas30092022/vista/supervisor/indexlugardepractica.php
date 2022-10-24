<?php
require_once './persistencia/BaseDeDatos.php';
require_once './modelo/lugardepractica.php';
require_once './Html.php';
abstract class Index
{
    static public function run(){
        $accion = ! empty($_REQUEST['accion'])?$_REQUEST['accion']:'mostrar';
        switch ($accion){
            case 'nuevo':
                self::nuevo();
                break;
            case 'editar':
                self::editar();
                break;
            case 'guardarNuevo':
                self::guardar('nuevo');
                break;
            case 'guardarEditar':
                self::guardar('editar');
                break;
            case 'eliminar':
                self::eliminar();
                break;
            default:
                self::mostrar();
        }
    }
    static public function nuevo(){
        $datosHtml = array(
            'encabezado'=>'Nuevo Lugar de practica'
        );
        Html::mostrar('lugardepractica/frmNuevo.php',$datosHtml); 
    }
    static public function editar(){
        if (isset($_REQUEST['idlugar'])) {
            $lugardepractica = new lugardepractica ($_REQUEST['idlugar']);
            $miLugardepractica=$lugardepractica->leerUno();
            $datosHtml = array(
                'encabezado'=>'Editar Lugardepractica: '.$_REQUEST['idlugar'],
                'lugardepractica'=>$miLugardepractica[0] # enviamos el primero
            );
            Html::mostrar('lugardepractica/frmEditar.php',$datosHtml);
        } else 
            echo "...El Id a EDITAR es requerido";
    }
    static public function eliminar(){
        if (isset($_REQUEST['idlugar'])) {
            $lugardepractica = new lugardepractica ($_REQUEST['idlugar']);
            $lugardepractica->eliminar();
            #Volvemos a mostrar los datos
            self::mostrar();
        } else 
            echo "...El idlugar a Eliminar es requerido";
    }
    static public function guardar($op){
        $lugardepractica = new lugardepractica (
                    $_POST['idlugar'],
                    $_POST['laboratorio'],
                    $_POST['campo'],
                    $_POST['idanexo5'],
                );
        switch ($op){
            case 'nuevo': 
                $lugardepractica->nuevo();
                break;
            case 'editar':
                $lugardepractica->editar();
                break;
        }
        #Volvemos a mostrar los datos
        self::mostrar();
    }
    static public function mostrar(){
        $lugardepractica = new lugardepractica();
        $datosHtml = array(
            'encabezado'=>'Listado de Lugardepractica',
            'lugardepractica'=>$lugardepractica->leer()
        );
        Html::mostrar('lugardepractica/mostrar.php',$datosHtml);
    }
}

Index::run();