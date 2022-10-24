<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Docente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlEstudiantes&accion=guardarNuevo" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text">Codigo Estudiante: </span>
            <input type="text" class="form-control" placeholder="CodEst:"  name="CodEst" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Nombre de Estudiante: </span>
            <input type="text" class="form-control" placeholder="NomEst"  name="NomEst" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Apellidos de Estudiante: </span>
            <input type="text" class="form-control" placeholder="ApellidosEst"  name="ApellidosEst" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">DNI del Estudiante: </span>
            <input type="text" class="form-control" placeholder="DniEst"  name="DniEst" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Correo del Estudiante: </span>
            <input type="text" class="form-control" placeholder="CorreoEst"  name="CorreoEst" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Dirección del Estudiante: </span>
            <input type="text" class="form-control" placeholder="DirecEst"  name="DirecEst" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Telefono del Estudiante: </span>
            <input type="text" class="form-control" placeholder="TlfEst"  name="TlfEst" value="">
        </div>
        <div class="input-group mb-3">
            <button class="btn btn-outline-secondary" type="submit">Guardar</button>
        </div>
    </form>
    <p><a href="?" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Retornar</a></p>
</body>
</html>