<html>
<head>
    <title> Listados completo con PAGINACIÓN </title>
</head>
<body>
    <?php
    include("conexion.inc");
    $num_per_page = 4;
    $page = isset( $_GET['page']) ? $_GET['page'] : null ;
    if (!$page) {
        $start = 0;
        $page = 1;
    }
    else {
        $start = ($page - 1) * $num_per_page;
    } // total de páginas
    $query = "SELECT * FROM capitales";
    $result = mysqli_query($connection, $query);
    $num_rows = mysqli_num_rows($result);
    $num_pages = ceil($num_rows/ $num_per_page);
    echo "Cantidad de Capitales encontradas: " . $num_rows . "<br>";
    echo "Se muestran paginas de $num_per_page Capitales cada una<br>";
    echo "Mostrando la pagina $page de $num_pages<p>";
    $query = "SELECT * FROM capitales LIMIT $start , $num_per_page";
    $result = mysqli_query($connection, $query);
    $num_rows = mysqli_num_rows($result);
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
    <br>
    <?php
    if ($num_pages > 1){
        for ($i = 1; $i <= $num_pages; $i++){
            if ($page == $i)
                //si muestro el índice de la página actual, no coloco enlace
                echo $page . " ";
            else
                //si la página no es la actual, coloco el enlace para ir a esa página
                echo "<a href='Listado_pag.php?page=" . $i ."'>" . $i . "</a> ";
        }
    }
    ?>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p align="center"><a href="Menu.html">Volver al men&uacute; del ABM</a></p>
</body>
</html>