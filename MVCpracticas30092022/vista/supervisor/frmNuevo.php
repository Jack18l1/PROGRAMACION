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
    <h3><?=$encabezado?></h3>
    <form action="?ctrl=Ctrlsupervisor&accion=guardarNuevo" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text">Id Supervisor: </span>
            <input type="text" class="form-control" placeholder="idsupervisoremp:"  name="idsupervisoremp" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Cargo: </span>
            <input type="text" class="form-control" placeholder="cargo"  name="cargo" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Nombre del Supervisor encargado: </span>
            <input type="text" class="form-control" placeholder="nombreSE"  name="nombreSE" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Observaciones: </span>
            <input type="text" class="form-control" placeholder="observaciones:"  name="observaciones" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">ruc: </span>
            <input type="text" class="form-control" placeholder="ruc:"  name="ruc" value="">
        </div>
    
        <div class="input-group mb-3">
            <button class="btn btn-outline-secondary" type="submit">Guardar</button>
        </div>
    </form>
    <p><a href="?" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Retornar</a></p>
</body>
</html>