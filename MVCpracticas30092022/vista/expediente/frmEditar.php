<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Expediente</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlExpediente&accion=guardarEditar" method="post">
        Id del Expediente: <input type="text" name="idExp" readonly
            value="<?=$tipo['idExp']?>"><br>
        Fecha del Fut: <input type="text" name="FechaFut" 
            value="<?=$tipo['FechaFut']?>"><br>
        Numero del fut: <input type="text" name="NumFut" 
            value="<?=$tipo['NumFut']?>"><br>
        Informe del expediente: <input type="text" name="informeExp" 
            value="<?=$tipo['informeExp']?>"><br>
        Id del programa: <input type="text" name="idPrograma" 
            value="<?=$tipo['idPrograma']?>"><br>
        Codigo: <input type="text" name="Codigo" 
            value="<?=$tipo['Codigo']?>"><br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?">Retornar</a></p>
</body>
</html>