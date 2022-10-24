<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Indicador</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlIndicador&accion=guardarEditar" method="post">
        id : <input type="text" name="idIn" readonly
            value="<?=$tipo['idIn']?>"><br>
        Indicadores: <input type="text" name="Indicadores" 
            value="<?=$tipo['Indicadores']?>"><br>
        Criterios: <input type="text" name="Criterios" 
            value="<?=$tipo['Criterios']?>"><br>
        
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?">Retornar</a></p>
</body>
</html>