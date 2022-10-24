<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expediente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <h1><?=$titulo?></h1>
    <a href="?ctrl=CtrlExpediente&accion=nuevo" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Nuevo Expediente</a>
        <a href="index.php" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Retornar</a>
    <table class="table table-striped">
        <tr>
            <th>Id del Expediente</th>
            <th>Fecha del Fut</th>
            <th>Numero del fut</th>
            <th>Informe del expediente</th>
            <th>Id del programa</th>
            <th>Codigo</th>
        </tr>
        <?php foreach ($expediente as $e) { ?>
            <tr>
                <td><?=$e['idExp']?></td>
                <td><?=$e['FechaFut']?></td>
                <td><?=$e['NumFut']?></td>
                <td><?=$e['informeExp']?></td>
                <td><?=$e['idPrograma']?></td>
                <td><?=$e['Codigo']?></td>
                <td>
                    <a href="?ctrl=CtrlExpediente&accion=editar&idExp=<?=$e['idExp']?>">
                        <i class="bi bi-pencil-square"></i> Editar</a>
                    / 
                    <a href="?ctrl=CtrlExpediente&accion=eliminar&idExp=<?=$e['idExp']?>">
                        <i class="bi bi-trash"></i>  Eliminar</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>