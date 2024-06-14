<?php
session_start();
extract($_REQUEST);

if(isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
} else {
    $cart = false;
}

if(isset($cart[$id])) {
    $cart[$id]['quantity'] += 1;
    $_SESSION['cart'] = $cart;
}

header("Location: cart.php");

?>