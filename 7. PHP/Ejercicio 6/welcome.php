<?php
session_start(); 
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
    <h1 class="titulo">Bienvenida</h1>
    <?php
    if(isset($_SESSION["nombre"])) {
        echo "<p>¡Bienvenido, " . $_SESSION["nombre"] . "!</p>";
    } else {
        echo "<p>Usted no puede visitar esta página</p>";
    }
    ?>
    <a href="index.php">< Volver al enunciado</a>
</body>
</html>