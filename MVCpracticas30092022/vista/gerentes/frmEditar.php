<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar gerente</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlGerentes&accion=guardarEditar" method="post">
        Id gerente : <input type="text" name="idGer" readonly
            value="<?=$tipo['idGer']?>"><br>
        Nombre de gerente: <input type="text" name="NomGer" 
            value="<?=$tipo['NomGer']?>"><br>
        Apellidos de gerente: <input type="text" name="ApellidosGer" 
            value="<?=$tipo['ApellidosGer']?>"><br>
        Ruc del gerente: <input type="text" name="RucGer" 
            value="<?=$tipo['RucGer']?>"><br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?">Retornar</a></p>
</body>
</html>