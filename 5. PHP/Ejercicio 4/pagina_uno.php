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
    if (isset($_SESSION["contador"])) {
        echo "Paginas visitadas: " . $_SESSION["contador"];
        echo "<br>";
    }
    ?>
    <a href="pagina_dos.php">Link a la pagina 2</a>
    <br>
    <a href="pagina_tres.php">Link a la pagina 3</a>
</body>
</html>