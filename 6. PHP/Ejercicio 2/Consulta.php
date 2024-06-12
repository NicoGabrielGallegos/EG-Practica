<html>
<head>
    <title> Listados completo </title>
</head>
<body>
    <?php
    include("conexion.inc");
    $query = "SELECT * FROM capitales";
    $result = mysqli_query($connection, $query);
    $num_rows=mysqli_num_rows($result);
    ?>
    <table border=1>
        <tr>
            <td><b>Id</b></td>
            <td><b>Ciudad</b></td>
            <td><b>País</b></td>
            <td><b>Habitantes</b></td>
            <td><b>Superficie</b></td>
            <td><b>TieneMetro</b></td>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo ($row['id']); ?></td>
            <td><?php echo ($row['ciudad']); ?></td>
            <td><?php echo ($row['pais']); ?></td>
            <td><?php echo ($row['habitantes']); ?></td>
            <td><?php echo ($row['superficie']); ?></td>
            <td><?php echo ($row['tieneMetro']); ?></td>
        </tr>
        <?php
        }
        // Liberar conjunto de resultados
        mysqli_free_result($result);
        // Cerrar la conexion
        mysqli_close($connection);
        ?>
    </table>
    <p>&nbsp;</p>
    <p align="center"><a href="Menu.html">Volver al men&uacute; del ABML</a></p>
</body>
</html>