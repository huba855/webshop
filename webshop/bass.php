<?php 
include './cart.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>

<title>Bass guitars</title>

<link rel='stylesheet' href='./static/style2.css'>

</head>
<body>
<h1><u>Bass guitars</u></h1>
<?php
    
    $results = $db->query("select * from termekek where typeId = 1");
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
	<form>
   	<input id='db' type='text' name='darab' value='0'><button>Kosárba</button>
        </form>
	</div>";}
        
?> 






<?php print $kimenet; ?>
</body>
</html>
