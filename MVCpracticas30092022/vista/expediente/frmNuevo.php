<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Expediente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlExpediente&accion=guardarNuevo" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text">Id del expediente: </span>
            <input type="text" class="form-control" placeholder="idExp:"  name="idExp" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Fecha del Fut: </span>
            <input type="text" class="form-control" placeholder="FechaFut"  name="FechaFut" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Numero del fut: </span>
            <input type="text" class="form-control" placeholder="NumFut"  name="NumFut" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Informe del expediente: </span>
            <input type="text" class="form-control" placeholder="informeExp"  name="informeExp" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Id del programa: </span>
            <input type="text" class="form-control" placeholder="idPrograma"  name="idPrograma" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Codigo: </span>
            <input type="text" class="form-control" placeholder="Codigo"  name="Codigo" value="">
        </div>
        <div class="input-group mb-3">
            <button class="btn btn-outline-secondary" type="submit">Guardar</button>
        </div>
    </form>
    <p><a href="?" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Retornar</a></p>
</body>
</html>