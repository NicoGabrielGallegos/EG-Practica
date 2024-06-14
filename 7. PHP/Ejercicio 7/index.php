<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1 class="titulo">Ejercicio N°7</h1>
    <p class="enunciado"><small><i>
        Confeccionar un CARRITO DE COMPRAS simple, usando Base de Datos. Se debe crear una base de 
        datos con el nombre Compras. En dicha base crear una tabla llamada catálogo con los siguientes 
        atributos: 
        <br>
        <ul>
            <li>id</li>
            <li>producto del tipo varchar de 100 </li>
            <li>precio del tipo numérico decimal de 9 entero y 2 decimales.</li>
        </ul>
    </i></small></p>
    <br>
    <a href="catalogue.php">Ir al Catálogo ></a> <br>
    <a href="cart.php">Ir al Carrito ></a>
</body>
</html>