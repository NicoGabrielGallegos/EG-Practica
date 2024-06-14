<?php
session_start();
extract($_REQUEST);

$connection = mysqli_connect("localhost", "nico", "1234", "compras");
$query = "SELECT * FROM catalogo WHERE id='$id'";
$result = mysqli_query($connection, $query);
mysqli_close($connection);
$row = mysqli_fetch_array($result);
mysqli_free_result($result);

if(isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
}

unset($cart[md5($id)]);

$_SESSION['cart'] = $cart;

header("Location: catalogue.php");

?>