<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ejercitación 1</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <?php
    include('validacion.php');
    // Este nombre es valido
    comprobar_nombre_usuario('nombre_valido');
    // Este nombre es invalido por ser demasiado largo
    comprobar_nombre_usuario('nombre_invalido_por_ser_muy_largo');
    // Este nombre es invalido por ser demasiado corto
    comprobar_nombre_usuario('sm');
    // Este nombre es invalido por contener caracteres especiales
    comprobar_nombre_usuario('nombre_extraño_con_ñ');
    ?>
</body>
</html>