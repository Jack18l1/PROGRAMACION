<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Fut</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <h3><?=$encabezado?></h3>
    <form action="?ctrl=Ctrlvistas&accion=guardarNuevo" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text">idVisitas: </span>
            <input type="text" class="form-control" placeholder="idvisitas:"  name="idvisitas" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">FechaDeSuper: </span>
            <input type="text" class="form-control" placeholder="FechaDeSuper"  name="FechaDeSuper" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Tareas: </span>
            <input type="text" class="form-control" placeholder="Tareas"  name="Tareas" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">EstadoDeAvance: </span>
            <input type="text" class="form-control" placeholder="EstadoDeAvance"  name="EstadoDeAvance" value="">
        </div>
    
        <div class="input-group mb-3">
            <button class="btn btn-outline-secondary" type="submit">Guardar</button>
        </div>
    </form>
    <p><a href="?" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Retornar</a></p>
</body>
</html>