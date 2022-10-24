<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supervisor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <h1><?=$encabezado?></h1>
    <a href="?accion=nuevo" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Nuevo Supervisor</a>
        <a href="index.php" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Retornar</a>
    <table class="table table-striped">
        <tr>
            <th>idsupervisoremp</th>
            <th>cargo</th>
            <th>nombreSE</th>
            <th>observaciones</th>
            <th>ruc</th>
        </tr> 

        <?php foreach ($supervisor as $s) { ?>
            <tr>
                <td><?=$s['idsupervisoremp']?></td>
                <td><?=$s['cargo']?></td>
                <td><?=$s['nombreSE']?></td>
                <td><?=$s['observaciones']?></td>
                <td><?=$s['ruc']?></td>
                <td>
                    <a href="?ctrl=Ctrlsupervisor&accion=editar&idsupervisoremp=<?=$s['idsupervisoremp']?>">
                        <i class="bi bi-pencil-square"></i> Editar</a>
                    / 
                    <a href="?ctrl=Ctrlsupervisor&accion=eliminar&idsupervisoremp=<?=$s['idsupervisoremp']?>">
                        <i class="bi bi-trash"></i>  Eliminar</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>