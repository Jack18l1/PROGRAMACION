<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <h1><?=$titulo?></h1>
    <a href="?ctrl=CtrlDocente&accion=nuevo" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Nuevo Docente</a>
        <a href="index.php" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Retornar</a>
    <table class="table table-striped">
        <tr>
            <th>Id Docente</th>
            <th>Nombre del Docente</th>
            <th>Apellidos del Docente</th>
            <th>DNI Docente</th>
        </tr>
        <?php foreach ($docente as $a) { ?>
            <tr>
                <td><?=$a['idDoc']?></td>
                <td><?=$a['NomDoc']?></td>
                <td><?=$a['ApellidosDoc']?></td>
                <td><?=$a['DniDoc']?></td>
                <td>
                    <a href="?ctrl=CtrlDocente&accion=editar&idDoc=<?=$a['idDoc']?>">
                        <i class="bi bi-pencil-square"></i> Editar</a>
                    / 
                    <a href="?ctrl=CtrlDocente&accion=eliminar&idDoc=<?=$a['idDoc']?>">
                        <i class="bi bi-trash"></i>  Eliminar</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>