<?php
session_start();

if (isset($_POST["username"])) {
    setcookie("ck_username", $_POST["username"], time()+86400*365);
    $username = $_POST["username"];
} else if (isset($_COOKIE["ck_username"])) {
    $username = $_COOKIE["ck_username"];
} else {
    $username = "";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1 class="titulo">Formulario</h1>
    <form action="form.php" method="POST">
        <table>
            <tr>
                <td>
                    <label for="username">Nombre de Usuario</label>
                </td>
                <td>
                    <input type="text" name="username" id="username" placeholder="Nombre de Usuario" class="form-input" value="<?php echo $username; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" class="form-button">Cargar Usuario</button>
                </td>
            </tr>
        </table>
    </form>
    <a href="index.php">< Volver al enunciado</a>
</body>
</html>