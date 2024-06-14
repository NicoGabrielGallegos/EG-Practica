<?php
session_start();

if (isset($_POST["category"])) {
    setcookie("ck_category", $_POST["category"], time()+86400*365);
    $category = $_POST["category"];
} else if (isset($_COOKIE["ck_category"])) {
    $category = $_COOKIE["ck_category"];
} else {
    $category = "";
}
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
    <h1 class="titulo">Periódico</h1>
    <form action="news.php" method="POST">
        <fieldset class="form-fieldset">
            <legend>Buscar noticias sobre:</legend>
        <input type="radio" name="category" id="radio-politics" value="politics" <?php if($category == "politics") echo "checked"; ?>>
        <label for="radio-politics">Política</label>
        <br>
        <input type="radio" name="category" id="radio-economy" value="economy" <?php if($category == "economy") echo "checked"; ?>>
        <label for="radio-economy">Economía</label>
        <br>
        <input type="radio" name="category" id="radio-sports" value="sports" <?php if($category == "sports") echo "checked"; ?>>
        <label for="radio-sports">Deportes</label>
        </fieldset>
        <button type="submit" class="form-button">Filtrar</button>
    </form>
    <a href="remove_filter.php">Remover Filtro</a>
    <br>
    <br>
    <?php if($category == "politics" or !$category) { ?>
    <div class="new-container">
        <b>Noticia política</b>
        <p class="new-text"><small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, voluptatum voluptate? Sit possimus blanditiis velit sint soluta in magnam porro?</small></p>
    </div>
    <?php } if($category == "economy" or !$category) { ?>
    <div class="new-container">
        <b>Noticia económica</b>
        <p class="new-text"><small>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, non illum. Voluptatem excepturi maiores quos eius inventore at, quibusdam fugit consequuntur? Ut facere ipsa odio impedit possimus distinctio quos autem?</small></p>
    </div>
    <?php } if($category == "sports" or !$category) { ?>
    <div class="new-container">
        <b>Noticia deportiva</b>
        <p class="new-text"><small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab consequuntur sunt, voluptates reiciendis doloremque facere?</small></p>
    </div>
    <?php } ?>
    <br>
    <a href="index.php">< Volver al enunciado</a>
</body>
</html>