<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar lugardepractica</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlLugardepractica&accion=guardarEditar" method="post">
        Id lugar : <input type="text" name="idlugar" readonly
            value="<?=$tipo['idlugar']?>"><br>
            Laboratorio: <input type="text" name="laboratorio" 
            value="<?=$tipo['laboratorio']?>"><br>
            Campo : <input type="text" name="campo" 
            value="<?=$tipo['campo']?>"><br>
            Id anexo5 : <input type="text" name="idanexo5" 
            value="<?=$tipo['idanexo5']?>"><br>
        
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?">Retornar</a></p>
</body>
</html>