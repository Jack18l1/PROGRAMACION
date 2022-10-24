<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar modulo</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlModulo&accion=guardarEditar" method="post">
        Id modulo : <input type="text" name="idmodulo" readonly
            value="<?=$tipo['idmodulo']?>"><br>
            Periodo: <input type="text" name="periodo" 
            value="<?=$tipo['periodo']?>"><br>
            Horarios : <input type="text" name="horarios" 
            value="<?=$tipo['horarios']?>"><br>
            Observaciones : <input type="text" name="observaciones" 
            value="<?=$tipo['observaciones']?>"><br>
            Id programa : <input type="text" name="idprograma" 
            value="<?=$tipo['idprograma']?>"><br>
        
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?">Retornar</a></p>
</body>
</html>