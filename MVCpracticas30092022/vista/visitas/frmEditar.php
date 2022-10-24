<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Visitas</title>
</head>
<body>
    <h3><?=$encabezado?></h3>
    <form action="?ctrl=Ctrlvistas&accion=guardarEditar" method="post">
        id Visitas : <input type="text" name="idvisitas" readonly
            value="<?=$visitas['idvisitas']?>"><br>
        Fecha de Super: <input type="text" name="FechaDeSuper" 
            value="<?=$visitas['FechaDeSuper']?>"><br>
        Tareas: <input type="text" name="Tareas" 
            value="<?=$visitas['Tareas']?>"><br>
        Estado de avance: <input type="text" name="EstadoDeAvance" 
            value="<?=$visitas['EstadoDeAvance']?>"><br>
        
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?">Retornar</a></p>
</body>
</html>