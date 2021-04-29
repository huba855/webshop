<?php
include "./cart.php";
unset($_SESSION["items"]);
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
