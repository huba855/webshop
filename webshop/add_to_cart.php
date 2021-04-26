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
	if($item['darab'] > 0)
	{
		array_push($_SESSION["items"], $item);
	}
	else
	{
		$_SESSION['message'] = "0 darabot nem lehet hozzáadni a kosárhoz";
	}
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>


