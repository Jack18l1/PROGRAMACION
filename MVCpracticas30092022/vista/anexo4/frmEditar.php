<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Anexo4</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlAnexo4&accion=guardarEditar" method="post">
        idanexo4: <input type="text" name="idanexo4" readonly
            value="<?=$tipo['idanexo4']?>"><br>
        problemas_detectados: <input type="text" name="problemas_detectados"
            value="<?=$tipo['problemas_detectados']?>"><br>
        observacion: <input type="text" name="observacion"
            value="<?=$tipo['observacion']?>"><br>
        RUC: <input type="text" name="RUC"
            value="<?=$tipo['RUC']?>"> <br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?">Retornar</a></p>
</body>
</html>