<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Anexo5</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlAnexo5&accion=guardarEditar" method="post">
        id Anexo5: <input type="text" name="idAnexo5" readonly
            value="<?=$tipo['idAnexo5']?>"><br>
        RUC: <input type="text" name="RUC" 
            value="<?=$tipo['RUC']?>"><br>
        Horario: <input type="text" name="horario" 
            value="<?=$tipo['horario']?>"><br>
        
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?">Retornar</a></p>
</body>
</html>