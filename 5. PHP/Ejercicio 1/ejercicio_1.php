<?php
$to = "xx@xx.com";
$subject = "Prueba de correo HTML";
$message = "
<html>
<head>
    <title>Correo HTML</title>
</head>
<body>
    <h1>¡Prueba!</h1>
    <p>Esto es una prueba de envío de correo <b>HTML<b/> a través del servidor</p>
</body>
</thml>
";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html; charset=iso-8859-1\r\n";
mail($to, $subject, $message, $headers);
?>
