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
    <a href="?ctrl=CtrlAnexo3&accion=nuevo" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Nuevo Anexo</a>
        <a href="index.php" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Retornar</a>
    <table class="table table-striped">
        <tr>
            <th>idanexo3</th>
            <th>RUC</th>
            <th>idservicio</th>
            <th>idexp</th>
            <th>idsupervisoremp</th>
            <th>iddocente</th>
        </tr>
        <?php foreach ($anexo3 as $a) { ?>
            <tr>
                <td><?=$a['idanexo3']?></td>
                <td><?=$a['RUC']?></td>
                <td><?=$a['idservicio']?></td>
                <td><?=$a['idexp']?></td>
                <td><?=$a['idsupervisoremp']?></td>
                <td><?=$a['iddocente']?></td>
                <td>
                    <a href="?ctrl=CtrlAnexo3&accion=editar&idanexo3=<?=$a['idanexo3']?>">
                        <i class="bi bi-pencil-square"></i> Editar</a>
                    / 
                    <a href="?ctrl=CtrlAnexo3&accion=eliminar&idanexo3=<?=$a['idanexo3']?>">
                        <i class="bi bi-trash"></i>  Eliminar</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>