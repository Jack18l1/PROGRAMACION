<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anexo 5 Indicador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
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
                        <a class="dropdown-item" href="login.html">Logout</a>
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
                                            <a class="nav-link" href="password.html">ESTUDIANTE</a>
                                            <a class="nav-link" href="password.html">EXPEDIENTE</a>
                                            <a class="nav-link" href="password.html">FUT</a>
                                            <a class="nav-link" href="password.html">GERENTE</a>
                                            <a class="nav-link" href="password.html">INDICADOR</a>
                                            <a class="nav-link" href="password.html">LUGAR DE PRACTICA</a>
                                            <a class="nav-link" href="password.html">MODULO</a>
                                            <a class="nav-link" href="password.html">PROGRAMA DE ESTUDIOS</a>
                                            <a class="nav-link" href="password.html">SUPERVISOR</a>
                                            <a class="nav-link" href="password.html">TAREAS</a>
                                            <a class="nav-link" href="password.html">VISITAS</a>
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
                            <a class="nav-link" href="http://localhost/login/admin/principal.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Cerrar Session
                            </a>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Eliut
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Administrador</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Tipo persona</li>
                        </ol>
                        
                        
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                <!-- COPIAR Y PEGAR-->
                                TABLA ANEXO 5 INDICADOR
                                <h1></h1>
                                    <a href="?ctrl=CtrlAnexo5indicador&accion=nuevo" class="btn btn-primary">
                                        <i class="bi bi-plus-circle"></i> Nuevo Indicador</a>
                                        
                                    <a href="http://localhost/login/admin/principal.php" class="btn btn-primary">
                                        <i class="bi bi-plus-circle"></i> Retornar</a>
                                <table class="table table-striped">
                                        <tr>
                                            <th>idanexo5ind</th>
                                            <th>Fecha</th>
                                            <th>Nota</th>
                                        </tr>
                                        <?php foreach ($anexo5indicador as $a) { ?>
                                            <tr>
                                                <td><?=$a['idanexo5ind']?></td>
                                                <td><?=$a['Fecha']?></td>
                                                <td><?=$a['Nota']?></td>
                                                <td>
                                                    <a href="?ctrl=CtrlAnexo5indicador&accion=editar&idanexo5ind=<?=$a['idanexo5ind']?>">
                                                        <i class="bi bi-pencil-square"></i> Editar</a>
                                                    / 
                                                    <a href="?ctrl=CtrlAnexo5indicador&accion=eliminar&idanexo5ind=<?=$a['idanexo5ind']?>">
                                                        <i class="bi bi-trash"></i>  Eliminar</a>
                                                    
                                                </td>
                                            </tr>
                                        <?php } ?>
                                </table>
                                <!-- COPIAR Y PEGAR-->
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                
            </div>
        </div>
<body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
</body>
</html>