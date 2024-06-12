<head>
    <title>Modificacion</title>
</head>
<body>
    <?php
    include ("conexion.inc");
    //Captura datos desde el Form anterior
    $id = $_POST['Id'];
    $ciudad = $_POST['Ciudad'];
    $pais = $_POST['Pais'];
    $habitantes = $_POST['Habitantes'];
    $superficie = $_POST['Superficie'];
    $tieneMetro = $_POST['TieneMetro'];
    //Arma la instrucción SQL y luego la ejecuta
    $query = "UPDATE capitales
    SET ciudad='$ciudad', pais='$pais', habitantes='$habitantes', superficie='$superficie', tieneMetro='$tieneMetro'
    WHERE id='$id'";
    mysqli_query($connection, $query) or die (mysqli_error($connection));
    echo("La Capital fue Modificada<br>");
    echo("<A href= 'Menu.html'>Volver al Menu del ABM</A>");
    // Cerrar la conexion
    mysqli_close($connection);
    ?>
</body>
</html>