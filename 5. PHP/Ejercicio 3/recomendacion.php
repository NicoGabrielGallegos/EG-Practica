<?php
$subject = $_POST['nom_visitante'] . " quiere mostrarte un sitio!!";

if(isset($_POST)) {
    $to = $_POST['mail_invitado'];
    $from = "From:" . $_POST['mail_visitante'];

    $message = "Hola, " . $_POST['nom_invitado'] . "!!\n";
    $message .= "Tu amigo " . $_POST['nom_visitante'] . " te esta invitando al sitio www.sitio.com.ar\n";
    $message .= "Que esperas para unirte!!";
}

echo $message;
mail($to, $subject, $message, $from);

echo "Su invitacion fue enviada con exito!";
?>