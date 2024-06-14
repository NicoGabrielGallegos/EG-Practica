<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1 class="titulo">Ejercicio N°5</h1>
    <p class="enunciado"><small><i>
        Realizar una página donde carguemos en un formulario el nombre de usuario y clave de un cliente. 
        Luego realizar una segunda página donde se creen dos variables de sesión. Y como última página 
        crear una tercera en la cual se recuperen los valores almacenados en las variables de sesión 
        anterior. 
    </i></small></p>
    <br>
    <a href="form.php">Ir al formulario ></a><br>
    <a href="setVars.php">Crear variables de sesión ></a><br>
    <a href="getVars.php">Recuperar variables de sesión ></a>
</body>
</html>