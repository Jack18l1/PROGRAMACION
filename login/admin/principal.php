<?php 
//seguridad de sessiones paginacion
session_start();
error_reporting(0);
$varsesion= $_SESSION['usuario'];
if($varsesion== null || $varsesion=''){
    header("location:../index.html");
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <link rel="stylesheet" href="css/estilos.css">


    <!-- Bootstrap core CSS -->

    

        <title>PRINCIPAL</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="http://localhost/login/admin/principal.php">Eliut</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="cerrar_sesion.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="http://localhost/login/admin/principal.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Administrador
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                           
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Paginacion
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        TABLAS
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="http://localhost/MVCpracticas30092022/index.php?ctrl=CtrlIndicador">ANEXO 3</a>
                                            <a class="nav-link" href="http://localhost/MVCpracticas30092022/index.php?ctrl=CtrlIndicador">ANEXO 4</a>
                                            <a class="nav-link" href="http://localhost/MVCpracticas30092022/index.php?ctrl=CtrlIndicador">ANEXO 5</a>
                                            <a class="nav-link" href="http://localhost/MVCpracticas30092022/index.php?ctrl=CtrlIndicador">CRITERIO</a>
                                            <a class="nav-link" href="http://localhost/MVCpracticas30092022/index.php?ctrl=CtrlIndicador">DOCENTE</a>
                                            <a class="nav-link" href="http://localhost/MVCpracticas30092022/index.php?ctrl=CtrlIndicador">EMPRESA</a>
                                            <a class="nav-link" href="http://localhost/MVCpracticas30092022/index.php?ctrl=CtrlIndicador">ESTUDIANTE</a>
                                            <a class="nav-link" href="http://localhost/MVCpracticas30092022/index.php?ctrl=CtrlIndicador">EXPEDIENTE</a>
                                            <a class="nav-link" href="http://localhost/MVCpracticas30092022/index.php?ctrl=CtrlIndicador">FUT</a>
                                            <a class="nav-link" href="http://localhost/MVCpracticas30092022/index.php?ctrl=CtrlIndicador">GERENTE</a>
                                            <a class="nav-link" href="http://localhost/MVCpracticas30092022/index.php?ctrl=CtrlAnexo5indicador">INDICADOR</a>
                                            <a class="nav-link" href="http://localhost/MVCpracticas30092022/index.php?ctrl=CtrlIndicador">LUGAR DE PRACTICA</a>
                                            <a class="nav-link" href="http://localhost/MVCpracticas30092022/index.php?ctrl=CtrlIndicador">MODULO</a>
                                            <a class="nav-link" href="http://localhost/MVCpracticas30092022/index.php?ctrl=CtrlProgramaestudio">PROGRAMA DE ESTUDIOS</a>
                                            <a class="nav-link" href="http://localhost/MVCpracticas30092022/index.php?ctrl=CtrlIndicador">SUPERVISOR</a>
                                            <a class="nav-link" href="http://localhost/MVCpracticas30092022/index.php?ctrl=CtrlIndicador">TAREAS</a>
                                            <a class="nav-link" href="http://localhost/MVCpracticas30092022/index.php?ctrl=CtrlIndicador">VISITAS</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">COMPLEMENTOS</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Graficos
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Usuarios
                            </a>
                            <a class="nav-link" href="principaltablas.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Principal tablas
                            </a>
                            <a class="nav-link" href="cerrar_sesion.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Cerrar Session
                            </a>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        ELI
                    </div>
                </nav>
            </div>
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Bienvenido Administrador</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">??Que desea realizar?</li>
                        </ol>
                        <div class="container">
       
                        <div class="card">
                            <a title="Los Tejos" href="http://www.lostejos.com"><img src="img/img1.jpg" alt="Los Tejos" /></a>
                            <h4>Actualizacion de datos</h4>
                            <p>Lorem </p>
                            <a href="facebook.com">Leer m??s</a>
                        </div>
                        
                        <div class="card">
                            <img src="img/img2.jpg">
                            <h4>Tramite documentario (EFSRT)</h4>
                            <p>Lorem </p>
                            <a href="#">Leer m??s</a>
                        </div>
                        
                        <div class="card">
                            <img src="img/img3.jpg">
                            <h4>Visualizacion de notas</h4>
                            <p>Lorem </p>
                            <a href="#">Leer m??s</a>
                        </div>
                        <div class="card">
                            <img src="img/img3.jpg">
                            <h4>Presentacion del FUT</h4>
                            <p>Lorem </p>
                            <a href="#">Leer m??s</a>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>

    </body>
</html>
