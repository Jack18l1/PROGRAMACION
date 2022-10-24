<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa de estudio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlProgramaestudio&accion=guardarNuevo" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text">Id programa: </span>
            <input type="text" class="form-control" placeholder="idprograma:"  name="idprograma" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Nombre del programa de estudio: </span>
            <input type="text" class="form-control" placeholder="nombredelprogramadeestudio"  name="nombredelprogramadeestudio" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Responsable: </span>
            <input type="text" class="form-control" placeholder="responsable"  name="responsable" value="">
        </div>   
          
        <div class="input-group mb-3">
            <button class="btn btn-outline-secondary" type="submit">Guardar</button>
        </div>
    </form>
    <p><a href="?" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Retornar</a></p>
</body>
</html>