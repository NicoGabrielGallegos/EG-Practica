<html>
<head>
    <title>Alta Usuario</title>
</head>
<body>
    <?php
    include("conexion.inc");
    //Captura datos desde el Form anterior
    $ciudad = $_POST['Ciudad'];
    $pais = $_POST['Pais'];
    $habitantes = $_POST['Habitantes'];
    $superficie = $_POST['Superficie'];
    $tieneMetro = $_POST['TieneMetro'];
    //Arma la instrucción SQL y luego la ejecuta
    $query = "INSERT
    INTO capitales (ciudad, pais, habitantes, superficie, tieneMetro)
    VALUES ('$ciudad','$pais', '$habitantes', '$superficie', '$tieneMetro')";
    mysqli_query($connection, $query) or die (mysqli_error($link));
    echo("La Capital fue Registrada, pronto recibirás un email, confirmandote la actualización a nuestra pagina<br>");
    echo ("<A href='FormAlta.html'>Continuar</A><br>");
    echo ("<A href='Menu.html'>Volver al menú del ABML</A>");
    // Cerrar la conexion
    mysqli_close($connection);
    ?>
</body>
</html>