<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar docente</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlDocente&accion=guardarEditar" method="post">
        Id Docente : <input type="text" name="idDoc" readonly
            value="<?=$tipo['idDoc']?>"><br>
        Nombre de Docente: <input type="text" name="NomDoc" 
            value="<?=$tipo['NomDoc']?>"><br>
        Apellidos de Docente: <input type="text" name="ApellidosDoc" 
            value="<?=$tipo['ApellidosDoc']?>"><br>
        DNI del Docente: <input type="text" name="DniDoc" 
            value="<?=$tipo['DniDoc']?>"><br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?">Retornar</a></p>
</body>
</html>