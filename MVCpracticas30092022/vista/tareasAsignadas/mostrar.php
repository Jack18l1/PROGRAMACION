<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criterios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
<section class="content">
    <div class="container-fluid">
        
        <a href="?ctrl=CtrlTareas&accion=nuevo" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Nuevo Anexo5</a>
            <a href="index.php" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Retornar</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>idTareasAsig</th>
                    <th> NombreTareasAsig</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $a) { ?>
                <tr>
                    <td><?=$a['idTareasAsig']?></td>
                    <td><?=$a['NombreTareasAsig']?></td>
                    <td>
                        <a href="?ctrl=CtrlTareas&accion=editar&idTareasAsig=<?=$a['idTareasAsig']?>">
                            <i class="bi bi-pencil-square"></i> Editar</a>
                        / 
                        <a data-id="<?=$a['idTareasAsig']?>" data-nombre="<?=$a['NombreTareasAsig']?>" class="eliminar" href="#">
                            <i class="bi bi-trash"></i>  Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</section>

<div class="modal fade" id="modal-eliminar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Eliminando registro</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="login-box-msg">¿Estas seguiro que deseas eliminar el registro</p>
                <p class="reg-eliminacion"></p>
                <div class="row">
                <!-- /.col -->
                    <div class="col-4">
                        <a  class="btn btn-primary btn-block" id="btn-confirmar" href="">Si</a>
                    </div>
                    <div class="col-4">
                        <button type="button" data-dismiss="modal" class="btn btn-secundary btn-block">No</button>
                    </div>
                    <!-- /.col -->
                </div>
                

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
</body>
</html>