<?php 

session_start();
//echo session_id() . "<br/>";
$db = new SQLite3('./guitarshop.sqlite');
if(isset($_SESSION["items"]))
{
	//echo "Kosárban lévő termékek száma: ";

	//echo count($_SESSION["items"]);
	//var_dump($_SESSION["items"]);
}

?>
