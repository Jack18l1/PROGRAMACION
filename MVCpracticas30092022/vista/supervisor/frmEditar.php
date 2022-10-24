<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar supervisor</title>
</head>
<body>
    <h3><?=$encabezado?></h3>
    <form action="?ctrl=Ctrlsupervisor&accion=guardarEditar" method="post">
        Id supervisor : <input type="text" name="idsupervisoremp" readonly
            value="<?=$supervisor['idsupervisoremp']?>"><br>
            Cargo : <input type="text" name="cargo" 
            value="<?=$supervisor['cargo']?>"><br>
            Nombre de supervisor : <input type="text" name="nombreSE" 
            value="<?=$supervisor['nombreSE']?>"><br>
            Observaciones : <input type="text" name="observaciones" 
            value="<?=$supervisor['observaciones']?>"><br>
            ruc : <input type="text" name="ruc" 
            value="<?=$supervisor['ruc']?>"><br>
        
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?">Retornar</a></p>
</body>
</html>