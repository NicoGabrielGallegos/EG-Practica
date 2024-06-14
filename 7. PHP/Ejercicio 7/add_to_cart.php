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

if(!isset($cart[md5($id)])) { 
    $cart[md5($id)] = array('id' => md5($id), 'quantity' => 1, 'product' => $row['producto'], 'price' => $row['precio']);
}

$_SESSION['cart'] = $cart;

header("Location: catalogue.php");

?>