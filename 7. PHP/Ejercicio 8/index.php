<?php
session_start();

if(isset($_POST["search"])) {
    $cancion = $_POST['cancion'];
    $connection = mysqli_connect("localhost", "nico", "1234", "prueba") or die("Error de conexión");
    $query = "SELECT * FROM buscador b WHERE b.cancion LIKE '%$cancion%'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    mysqli_close($connection);
} else {
    $cancion = '';
    $result = false;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1 class="titulo">Ejercicio N°8</h1>
    <p class="enunciado"><small><i>
        Confeccionar un BUSCADOR de canciones. Para ello deberá crear una base de datos llamada 
        prueba y una tabla denominada buscador con el atributo canciones
    </i></small></p>
    <br>
    <form action="index.php" method="POST">
        <table>
            <tr>
                <td>
                    <label for="cancion">Canción:</label>    
                </td>
                <td>
                    <input type="text" name="cancion", id="cancion" placeholder="Canción" class="form-input" value="<?= $cancion; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" class="form-button" name="search">Buscar</button>
                </td>
            </tr>
        </table>
    </form>
    <ul>
        <?php
        if($result) {
            while($row = mysqli_fetch_array($result)) {
                ?>
                <li><?= $row['cancion']; ?></li>
                <?php
            }
            mysqli_free_result($result);
        }
        ?>
    </ul>
</body>
</html>