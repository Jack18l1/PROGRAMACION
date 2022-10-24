<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tareas Asignadas</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlTareas&accion=guardarEditar" method="post">
        id tareas asignadas : <input type="text" name="idTareasAsig" readonly
            value="<?=$tipo['idTareasAsig']?>"><br>
        Nombre de Tareas Asignadas: <input type="text" name="NombreTareasAsig" 
            value="<?=$tipo['NombreTareasAsig']?>"><br>
        
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?">Retornar</a></p>
</body>
</html>