<?php
session_start();

if (isset($_POST["color_mode"])) {
    setcookie("ck_color_mode", $_POST["color_mode"], time()+86400*365);
    $color_mode = $_POST["color_mode"];
} else if (isset($_COOKIE["ck_color_mode"])) {
    $color_mode = $_COOKIE["ck_color_mode"];
} else {
    $color_mode = "light_mode";
}

if (isset($_POST["border_mode"])) {
    setcookie("ck_border_mode", $_POST["border_mode"], time() + 86400*365);
    $border_mode = $_POST["border_mode"];
} else if (isset($_COOKIE["ck_border_mode"])) {
    $border_mode = $_COOKIE["ck_border_mode"];
} else {
    $border_mode = "pointed";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="main.css">
    <?php
    echo "<link rel='stylesheet' href='$color_mode.css'>";
    echo "<link rel='stylesheet' href='$border_mode.css'>";
    ?>
</head>
<body>
    <h1 class="titulo">Ejercicio N°1</h1>
    <p class="enunciado"><small><i>
        Crear una página que puede configurarse con distintos estilos CSS. El usuario es quien decide qué
        aspecto desea que tenga la página, por medio de un formulario. Luego la página es capaz de recordar,
        entre los distintos accesos que realice el usuario, el aspecto que había elegido para mostrar la web.
    </i></small></p>
    <br>
    <div class="form-container">
        <form action="index.php" method="POST">
            <fieldset class="form-fieldset">
                <legend>Configurar colores</legend>
                <select name="color_mode" id="mode" class="form-select">
                    <option value="dark_mode" <?php if ($color_mode == "dark_mode") { echo "selected"; } ?>>Modo oscuro</option>
                    <option value="light_mode" <?php if ($color_mode == "light_mode") { echo "selected"; } ?>>Modo claro</option>
                </select>
                <br><br>
                <button type="submit" value="change_mode" class="form-button">Actualizar colores</button>
            </fieldset>
        </form>
        <form action="index.php" method="POST">
            <fieldset class="form-fieldset">
                <legend>Configurar bordes</legend>
                <select name="border_mode" id="mode" class="form-select">
                    <option value="pointed" <?php if ($border_mode == "pointed") { echo "selected"; } ?>>Sin redondeo</option>
                    <option value="rounded" <?php if ($border_mode == "rounded") { echo "selected"; } ?>>Con redondeo</option>
                </select>
                <br><br>
                <button type="submit" value="change_mode" class="form-button">Actualizar bordes</button>
            </fieldset>
        </form>
    </div>
    <br><br>
    <?php
        echo "Se están utilizando las hojas de estilos '$color_mode.css' y '$border_mode.css'";
    ?>
</body>
</html>