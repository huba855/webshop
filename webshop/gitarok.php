<?php 
include './cart.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>

<title>Gitárok</title>

<link rel='stylesheet' href='./static/style2.css'>

</head>
<body>
<?php if(isset($_SESSION["message"])) { print $_SESSION["message"]; unset($_SESSION["message"]);}?>
<h1><u>Gitárok</u></h1>
<?php
    
    $results = $db->query("select * from termekek where typeId = 0");
        // html táblázatként íratjuk ki;
        $kimenet="";
        while ($row= $results->fetchArray()){
	$kimenet.="
	<div id='fo'>
	<h2>{$row['nev']}</h2>
	<img id='kep' src=./static/{$row['kep']}>
	<p id={$row['leiras']}>
    	</p>
	<p id={$row['ar']}></p>
	<form method='post' action='add_to_cart.php'>
   	<input id='db' type='text' name='darab' value='0'><button>Kosárba</button>
        <input type='hidden' name='id' value={$row['id']}>
        </form>
	</div>";}
        
?> 






<?php print $kimenet; ?>
</body>
</html>
