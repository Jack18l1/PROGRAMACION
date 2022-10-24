<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Programa de estudio</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlProgramaestudio&accion=guardarEditar" method="post">
        Id programa : <input type="text" name="idprograma" readonly
            value="<?=$tipo['idprograma']?>"><br>
        Nombre del programa de estudio: <input type="text" name="nombredelprogramadeestudio" 
            value="<?=$tipo['nombredelprogramadeestudio']?>"><br>
        Responsable : <input type="text" name="responsable" 
            value="<?=$tipo['responsable']?>"><br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?">Retornar</a></p>
</body>
</html>