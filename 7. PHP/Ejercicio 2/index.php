<?php
session_start(); 
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
    <h1 class="titulo">Ejercicio N°2</h1>
    <p class="enunciado"><small><i>
        Crear una cookie llamada “contador” que lleve la cuenta en el lado cliente del número de veces que
        se ha accedido a la página contador.php. Si es la primera vez que se accede, la página dará la 
        bienvenida al usuario. Si ya se ha accedido anteriormente, la página hará uso de la cookie para 
        mostrar el número de veces que se ha visitado dicha página.
    </i></small></p>
    <br>
    <a href="contador.php">Ir a la página Contador ></a>
</body>
</html>