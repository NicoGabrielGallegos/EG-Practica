<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
    if (!isset($_SESSION["contador"])) {
        $_SESSION["contador"] = 1;
    } else {
        $_SESSION["contador"]++;
    }
    ?>
    <a href="pagina_uno.php">Recuento de visitas</a>
    <br>
    <a href="pagina_tres.php">Link a la pagina 3</a>
</body>
</html>