<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Fut</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlFut&accion=guardarEditar" method="post">
        id del Fut : <input type="text" name="idFut" readonly
            value="<?=$tipo['idFut']?>"><br>
        Numero del recibo: <input type="text" name="Nrorecibo" 
            value="<?=$tipo['Nrorecibo']?>"><br>
        Fecha del Fut: <input type="text" name="Fecha" 
            value="<?=$tipo['Fecha']?>"><br>
        Detalle del fut: <input type="text" name="detalleFut" 
            value="<?=$tipo['detalleFut']?>"><br>
        
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?">Retornar</a></p>
</body>
</html>