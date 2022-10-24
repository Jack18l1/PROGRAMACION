<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <h1><?=$encabezado?></h1>
    <a href="?ctrl=Ctrlvistas&accion=nuevo" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Nueva Visita</a>
        <a href="index.php" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Retornar</a>
    <table class="table table-striped">
        <tr>
            <th>idVisitas</th>
            <th>FechaDeSuper</th>
            <th>Tarea</th>
            <th>EstadoDeAvance</th>
        </tr>
        <?php foreach ($visitas as $V) { ?>
            <tr>
                <td><?=$V['idvisitas']?></td>
                <td><?=$V['FechaDeSuper']?></td>
                <td><?=$V['Tareas']?></td>
                <td><?=$V['EstadoDeAvance']?></td>
                <td>
                    <a href="?ctrl=Ctrlvistas&accion=editar&idvisitas=<?=$V['idvisitas']?>">
                        <i class="bi bi-pencil-square"></i> Editar</a>
                    / 
                    <a href="?ctrl=Ctrlvistas&accion=eliminar&idvisitas=<?=$V['idvisitas']?>">
                        <i class="bi bi-trash"></i>  Eliminar</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>