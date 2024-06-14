<?php
session_start();

if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
} else {
    $cart = false;
}

$connection = mysqli_connect("localhost", "nico", "1234", "compras") or die("Error al conectarse a la base de datos");
$query = "SELECT * FROM catalogo";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
mysqli_close($connection);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/e94f1b6b83.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="titulo">Catálogo</h1>
    <table class="product-table">
        <tr>
            <td>Producto</td>
            <td>Precio/U</td>
            <td><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></td>
        </tr>
        <?php 
        for($i = 0; $i < mysqli_num_rows($result); $i++) {
            $row = mysqli_fetch_array($result);
            ?>
            <tr>
                <td><?= $row['producto']; ?></td>
                <td class="centered">$ <?= $row['precio']; ?></td>
                <td class="centered">
                    <?php
                    if (isset($_SESSION['cart'][md5($row['id'])])) {
                        ?>
                        <a href="remove_from_cart.php?<?= SID; ?>&id=<?= $row['id']; ?>"><i class="fa-solid fa-trash"></i></a>
                        <?php
                    } else {
                        ?>
                        <a href="add_to_cart.php?<?= SID; ?>&id=<?= $row['id']; ?>"><i class="fa-solid fa-plus"></i></a>
                        <?php
                    }
                    ?>
                </td>
            </tr>
            <?php
        }
        mysqli_free_result($result);
        ?>
    </table>
    <a href="index.php">< Volver al enunciado</a>
</body>
</html>