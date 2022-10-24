<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa o Institucion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <h1><?=$titulo?></h1>
    <a href="?ctrl=CtrlEmpresa&accion=nuevo" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Nueva Empresa o Institucion</a>
        <a href="index.php" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Retornar</a>
    <table class="table table-striped">
        <tr>
            <th>Ruc</th>
            <th>Direcion</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>idfut</th>
        </tr>
        <?php foreach ($empresaoinstitucion as $e) { ?>
            <tr>
                <td><?=$e['ruc']?></td>
                <td><?=$e['direcionei']?></td>
                <td><?=$e['nombreei']?></td>
                <td><?=$e['telefonoei']?></td>
                <td><?=$e['idfut']?></td>
                <td>
                    <a href="?ctrl=CtrlEmpresa&accion=editar&ruc=<?=$e['ruc']?>">
                        <i class="bi bi-pencil-square"></i> Editar</a>
                    / 
                    <a href="?ctrl=CtrlEmpresa&accion=eliminar&ruc=<?=$e['ruc']?>">
                        <i class="bi bi-trash"></i>  Eliminar</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>