<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Anexo 5 Indicador</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlAnexo5indicador&accion=guardarEditar" method="post">
        idanexo5ind : <input type="text" name="idanexo5ind" readonly
            value="<?=$tipo['idanexo5ind']?>"><br>
        Fecha: <input type="text" name="Fecha" 
            value="<?=$tipo['Fecha']?>"><br>
        Nota: <input type="text" name="Nota" 
            value="<?=$tipo['Nota']?>"><br>
        
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?">Retornar</a></p>
</body>
</html>