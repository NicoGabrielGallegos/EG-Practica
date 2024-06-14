<?php
session_start();

if (isset($_COOKIE["ck_counter"])) {
    $counter = $_COOKIE["ck_counter"] + 1;
} else {
    $counter = 1;
}
setcookie("ck_counter", $counter, time()+86400*365);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1 class="titulo">Contador</h1>
    <p>
    <?php
    if (isset($_COOKIE["ck_counter"])) {
        echo "¡Ya has accedido a esta página $counter veces!";
    } else {
        echo "Bienvenido, esta es tu primera vez en esta página!";
    }
    ?>
    </p>
    <a href="index.php">< Volver al enunciado</a>
</body>
</html>