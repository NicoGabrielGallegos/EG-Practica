<html>
<head>
    <title>Baja</title>
</head>
<body>
    <?php
    include ("conexion.inc");
    $id = $_POST['Id'];
    $query = "SELECT * FROM capitales WHERE id='$id'";
    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result) == 0) {
        echo "No existe una Capital con ese ID...!!! <br>";
        echo "<A href='FormBajaIni.html'>Continuar</A>";
    }
    else {
        //Arma la instrucción SQL y luego la ejecuta
        $query= "DELETE FROM capitales WHERE id = '$id'";
        mysqli_query($connection, $query);
        echo "La Capital fue Borrada<br>" ;
        echo ("<A href='FormBajaIni.html'>Continuar</A><br>");
        echo "<A href='Menu.html'>Volver al menú del ABML</A>" ;
    }
    // Liberar conjunto de resultados
    mysqli_free_result($result);
    // Cerrar la conexion
    mysqli_close($connection);
    ?>
</body>
</html>