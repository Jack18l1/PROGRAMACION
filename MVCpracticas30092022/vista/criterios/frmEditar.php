<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Criterio</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlCriterios&accion=guardarEditar" method="post">
        idcriterios : <input type="text" name="idcriterios" readonly
            value="<?=$tipo['idcriterios']?>"><br>
        Tipodecriterio: <input type="text" name="Tipodecriterio" 
            value="<?=$tipo['Tipodecriterio']?>"><br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?">Retornar</a></p>
</body>
</html>