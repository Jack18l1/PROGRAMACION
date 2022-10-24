<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <h1><?=$titulo?></h1>
    <a href="?ctrl=CtrlAnexo4&accion=nuevo" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Nuevo Anexo</a>
        <a href="index.php" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Retornar</a>
    <table class="table table-striped">
        <tr>
            <th>idanexo4</th>
            <th>problemas_detectados</th>
            <th>observacion</th>
            <th>RUC</th>

        </tr>
        <?php foreach ($Anexo4 as $c) { ?>
            <tr>
                <td><?=$c['idanexo4']?></td>
                <td><?=$c['problemas_detectados']?></td>
                <td><?=$c['observacion']?></td>
                <td><?=$c['RUC']?></td>
                <td>
                    <a href="?ctrl=CtrlAnexo4&accion=editar&idanexo4=<?=$c['idanexo4']?>">
                        <i class="bi bi-pencil-square"></i> Editar</a>
                    / 
                    <a href="?ctrl=CtrlAnexo4&accion=eliminar&idanexo4=<?=$c['idanexo4']?>">
                        <i class="bi bi-trash"></i>  Eliminar</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>