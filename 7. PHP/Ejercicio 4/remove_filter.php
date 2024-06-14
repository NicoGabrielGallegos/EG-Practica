<?php
session_start();

setcookie("ck_category", "", time() - 3600);

header("Location: news.php");
?>