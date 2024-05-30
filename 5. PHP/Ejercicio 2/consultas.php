<?php
$to = "webmaster@domain.com";
$subject = "Consulta a traves de formulario";
$fecha = date("d-m-Y");
$hora = date("H :i:s");

if(isset($_POST)) {
    $from = "From:" . $_POST['mail'];
    $message = "Nombre: " . $_POST['nombre'] . "\n";
    $message .= "Mail: " . $_POST['mail'] . "\n";
    $message .= "Consulta: " . $_POST['consulta'] . "\n";
    $message .= "Fecha: " . $fecha . "\n";
    $message .= "Hora: " . $hora . "\n";
}

mail($to, $subject, $message, $from);

echo "Su consulta fue enviada con exito! En breve será respondida."
?>