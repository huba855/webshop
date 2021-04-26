<?php 

session_start();
echo session_id();
$db = new SQLite3('./guitarshop.sqlite');

?>