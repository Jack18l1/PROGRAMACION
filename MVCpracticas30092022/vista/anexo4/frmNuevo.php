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
    <form action="?ctrl=CtrlAnexo4&accion=guardarNuevo" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text">idanexo4: </span>
            <input type="text" class="form-control" placeholder="idanexo4:"  name="idanexo4" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">problemas_detectados: </span>
            <input type="text" class="form-control" placeholder="problemas_detectados"  name="problemas_detectados" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">observacion: </span>
            <input type="text" class="form-control" placeholder="observacion"  name="observacion" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">RUC: </span>
            <input type="text" class="form-control" placeholder="RUC"  name="RUC" value="">
        </div>
    
        <div class="input-group mb-3">
            <button class="btn btn-outline-secondary" type="submit">Guardar</button>
        </div>
    </form>
    <p><a href="?" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Retornar</a></p>
</body>
</html>