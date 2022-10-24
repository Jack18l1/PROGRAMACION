<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <h1><?=$titulo?></h1>
    <a href="?ctrl=CtrlGerentes&accion=nuevo" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Nuevo Gerente</a>
        <a href="index.php" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Retornar</a>
    <table class="table table-striped">
        <tr>
            <th>Id Gerente</th>
            <th>Nombre del Gerente</th>
            <th>Apellidos del Gerente</th>
            <th>Ruc Gerente</th>
        </tr>
        <?php foreach ($gerentes as $c) { ?>
            <tr>
                <td><?=$c['idGer']?></td>
                <td><?=$c['NomGer']?></td>
                <td><?=$c['ApellidosGer']?></td>
                <td><?=$c['RucGer']?></td>
                <td>
                    <a href="?ctrl=CtrlGerentes&accion=editar&idGer=<?=$c['idGer']?>">
                        <i class="bi bi-pencil-square"></i> Editar</a>
                    / 
                    <a href="?ctrl=CtrlGerentes&accion=eliminar&idGer=<?=$c['idGer']?>">
                        <i class="bi bi-trash"></i>  Eliminar</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>