<?php
session_start();
extract($_REQUEST);

if(isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
} else {
    $cart = false;
}

if(isset($cart[$id])) {
    if($remove_all) {
        unset($cart[$id]);
    } else {
        $quantity = $cart[$id]['quantity'] -= 1;
        if($quantity <= 0) {
            unset($cart[$id]);
        }
    }
    $_SESSION['cart'] = $cart;
}

header("Location: cart.php");

?>