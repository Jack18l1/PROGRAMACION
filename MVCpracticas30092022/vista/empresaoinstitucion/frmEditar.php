<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Empresa o Institucion</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlEmpresa&accion=guardarEditar" method="post">
        RUC : <input type="text" name="ruc" readonly
            value="<?=$tipo['ruc']?>"><br>
            Direcion: <input type="text" name="direcionei" 
            value="<?=$tipo['direcionei']?>"><br>
            Nombre : <input type="text" name="nombreei" 
            value="<?=$tipo['nombreei']?>"><br>
            Telefono : <input type="text" name="telefonoei" 
            value="<?=$tipo['telefonoei']?>"><br>
            Id FUT : <input type="text" name="idfut" 
            value="<?=$tipo['idfut']?>"><br>
        
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?">Retornar</a></p>
</body>
</html>