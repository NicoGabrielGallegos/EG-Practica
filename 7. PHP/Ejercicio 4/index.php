<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1 class="titulo">Ejercicio N°4</h1>
    <p class="enunciado"><small><i>
    Confeccionar una página que simule ser la de un periódico. La misma debe permitir configurar qué 
    tipo de titular deseamos que aparezca al visitarla, pudiendo ser: 
    <br><br>
    Noticia política, Noticia económica o Noticia deportiva. 
    <br><br>
    Mediante tres objetos de tipo radio, permitir seleccionar qué titular debe mostrar el periódico. 
    Almacenar en una cookie el tipo de titular que desea ver el cliente. La primera vez que visita el 
    sitio deben aparecer los tres titulares. Disponer un hipervínculo a una tercer página que borre la 
    cookie creada.
    </i></small></p>
    <br>
    <a href="news.php">Ir al periódico ></a>
</body>
</html>