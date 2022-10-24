<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Estudiante</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlEstudiantes&accion=guardarEditar" method="post">
        Codigo Estudiante : <input type="text" name="CodEst" readonly
            value="<?=$tipo['CodEst']?>"><br>
        Nombre de Estudiante: <input type="text" name="NomEst" 
            value="<?=$tipo['NomEst']?>"><br>
        Apellidos de Estudiante: <input type="text" name="ApellidosEst" 
            value="<?=$tipo['ApellidosEst']?>"><br>
        DNI del Estudiante: <input type="text" name="DniEst" 
            value="<?=$tipo['DniEst']?>"><br>
        Correo del Estudiante: <input type="text" name="CorreoEst" 
            value="<?=$tipo['CorreoEst']?>"><br>
        Dirección del Estudiante: <input type="text" name="DirecEst" 
            value="<?=$tipo['DirecEst']?>"><br>
        Telefono del Estudiante: <input type="text" name="TlfEst" 
            value="<?=$tipo['TlfEst']?>"><br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?">Retornar</a></p>
</body>
</html>