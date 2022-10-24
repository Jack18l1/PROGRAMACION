<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Anexo3</title>
</head>
<body>
    <h3><?=$titulo?></h3>
    <form action="?ctrl=CtrlAnexo3&accion=guardarEditar" method="post">
        idanexo3: <input type="text" name="idanexo3" readonly
            value="<?=$tipo['idanexo3']?>"><br>
        RUC: <input type="text" name="RUC"
            value="<?=$tipo['RUC']?>"><br>
        idservicio: <input type="text" name="idservicio"
            value="<?=$tipo['idservicio']?>"><br>
        idexp: <input type="text" name="idexp"
            value="<?=$tipo['idexp']?>"> <br>
        idsupervisoremp: <input type="text" name="idsupervisoremp"
            value="<?=$tipo['idsupervisoremp']?>"> <br>
        iddocente: <input type="text" name="iddocente"
            value="<?=$tipo['iddocente']?>"> <br>
        <input type="submit" value="Guardar">
    </form>
    <p><a href="?">Retornar</a></p>
</body>
</html>