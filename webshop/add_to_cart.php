<?php
include './cart.php';
if(!isset($_SESSION["items"]))
{
    $_SESSION["items"] = array();
}
else
{
	//var_dump($_POST);
	
	$item['id'] = $_POST['id'];
	$item['darab'] = $_POST['darab'];
	array_push($_SESSION["items"], $item);
	//var_dump($_SESSION["items"]);
	//unset($_SESSION["items"]);
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>


