<?php
session_start();

if (isset($_POST["sent"])) {
    $connection = mysqli_connect("localhost", "nico", "1234", "base2") or die("Problemas de conexión a la base de datos");
    $query = "SELECT * FROM alumnos a WHERE a.mail='" . $_POST["email"] . "'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    mysqli_close($connection);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $_SESSION["nombre"] = $row["nombre"];
        $found = true;
    } else {
        $found = false;
    }
    mysqli_free_result($result);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php
    if (isset($_POST["sent"])) {
        if ($found) {
            echo "<p class='message message-success'>El alumno fue encontrado!</p>";
        } else {
            echo "<p class='message message-error'>No existe un alumno con ese email</p>";
        }
    }
    ?>
    <h1 class="titulo">Formulario</h1>
    <form action="form.php" method="POST">
        <table>
            <tr>
                <td>
                    <label for="email">Email</label>
                </td>
                <td>
                    <input type="email" name="email" id="email" placeholder="email@ejemplo.com" class="form-input">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="sent" class="form-button">Buscar alumno</button>
                </td>
            </tr>
        </table>
    </form>
    <a href="index.php">< Volver al enunciado</a>
</body>
</html>