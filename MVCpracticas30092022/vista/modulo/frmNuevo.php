<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlModulo&accion=guardarNuevo" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text">Id modulo: </span>
            <input type="text" class="form-control" placeholder="idmodulo:"  name="idmodulo" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Periodo: </span>
            <input type="text" class="form-control" placeholder="periodo"  name="periodo" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Horarios: </span>
            <input type="text" class="form-control" placeholder="horarios"  name="horarios" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Observaciones: </span>
            <input type="text" class="form-control" placeholder="observaciones"  name="observaciones" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Id programa: </span>
            <input type="text" class="form-control" placeholder="idprograma:"  name="idprograma" value="">
        </div>
    
        <div class="input-group mb-3">
            <button class="btn btn-outline-secondary" type="submit">Guardar</button>
        </div>
    </form>
    <p><a href="?" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Retornar</a></p>
</body>
</html>