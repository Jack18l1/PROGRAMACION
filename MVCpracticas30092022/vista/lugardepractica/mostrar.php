<section class="content">
    <div class="container-fluid">
        
        <a href="?ctrl=CtrlLugardepractica&accion=nuevo" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Nuevo Anexo5</a>
            <a href="index.php" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Retornar</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>idlugar</th>
                    <th>laboratorio</th>
                    <th>campo</th>
                    <th>idanexo5</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $a) { ?>
                <tr>
                    <td><?=$a['idlugar']?></td>
                    <td><?=$a['laboratorio']?></td>
                    <td><?=$a['campo']?></td>
                    <td><?=$a['idanexo5']?></td>
                    <td>
                        <a href="?ctrl=CtrlLugardepractica&accion=editar&idlugar=<?=$a['idlugar']?>">
                            <i class="bi bi-pencil-square"></i> Editar</a>
                        / 
                        <a data-id="<?=$a['idlugar']?>" data-nombre="<?=$a['laboratorio']?>" class="eliminar" href="#">
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
                <p class="login-box-msg">¿Estas seguiro que deseas eliminar el registro?</p>
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