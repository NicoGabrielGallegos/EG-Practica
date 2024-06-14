<?php
session_start();

if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
} else {
    $cart = false;
}

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
    <h1 class="titulo">Carrito</h1>
    <?php
    if ($cart and count($cart) > 0) {
    ?>
    <table class="product-table">
        <tr>
            <td>Producto</td>
            <td>Precio/U</td>
            <td>Unidades</td>
            <td>Total</td>
        </tr>
            <?php
                $total = 0;
                foreach ($cart as $i => $item) {
                    ?>
                    <tr>
                        <td> <?= $item['product']; ?></td>
                        <td class="centered">$ <?= $item['price']; ?></td>
                        <td class="centered">
                            <a href="sub_unit.php?<?= SID; ?>&id=<?= $item['id']; ?>&remove_all=1"><i class="fa-solid fa-trash"></i></a>
                            <a href="sub_unit.php?<?= SID; ?>&id=<?= $item['id']; ?>&remove_all=0"><i class="fa-solid fa-minus"></i></a>
                            <?= $item['quantity'] ?>
                            <a href="add_unit.php?<?= SID; ?>&id=<?= $item['id']; ?>"><i class="fa-solid fa-plus"></i></a>
                        </td>
                        <td class="right">
                            <?php
                            $item_total = $item['quantity'] * $item['price'];
                            $total += $item_total;
                            echo "$ " . number_format($item_total, 2);
                            ?>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        <tr>
            <td colspan="3"></td>
            <td width="100" class="right">$ <?= number_format($total, 2) ?></td>
        </tr>
    <?php 
    } else {
        echo "<p>El carrito está vacío</p>";
    }
    ?>
    </table>
    <a href="catalogue.php">< Volver al catálogo</a> <br>
    <a href="index.php">< Volver al enunciado</a>
</body>
</html>