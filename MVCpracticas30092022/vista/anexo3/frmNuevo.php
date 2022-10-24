<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlAnexo3&accion=guardarNuevo" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text">idanexo3: </span>
            <input type="text" class="form-control" placeholder="idanexo3:"  name="idanexo3" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">RUC: </span>
            <input type="text" class="form-control" placeholder="RUC"  name="RUC" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">idservicio: </span>
            <input type="text" class="form-control" placeholder="idservicio"  name="idservicio" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">idexp: </span>
            <input type="text" class="form-control" placeholder="idexp"  name="idexp" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">idsupervisoremp: </span>
            <input type="text" class="form-control" placeholder="idsupervisoremp"  name="idsupervisoremp" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">iddocente: </span>
            <input type="text" class="form-control" placeholder="iddocente"  name="iddocente" value="">
        </div>
    
        <div class="input-group mb-3">
            <button class="btn btn-outline-secondary" type="submit">Guardar</button>
        </div>
    </form>
    <p><a href="?" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Retornar</a></p>
</body>
</html>