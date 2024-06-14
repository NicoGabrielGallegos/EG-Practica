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
    <h1 class="titulo">Ejercicio N°6</h1>
    <p class="enunciado"><small><i>
    Confeccionar un formulario que solicite ingresar el mail de un alumno. Si el mail existe en la tabla 
    alumnos, rescatar su nombre y almacenarlo en una variable de sesión. Además disponer un 
    hipervínculo a una tercera página que verifique si existe la variable de sesión y de la bienvenida al 
    alumno, en caso contrario mostrar un mensaje indicando que no puede visitar esta página.
    <br><br>
    Para la realización del ejercicio crear una base de datos con el nombre base2. La misma debe tener 
    una tabla denominada alumnos con atributos: codigo, nombre, codigocurso, mail.
    </i></small></p>
    <br>
    <a href="form.php">Ir al formulario ></a> <br>
    <a href="welcome.php">Ir a la bienvenida ></a>
</body>
</html>