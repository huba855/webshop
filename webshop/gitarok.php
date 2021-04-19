<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>

<title>Gitárok</title>

<link rel='stylesheet' href='style2.css'>

</head>
<body>
<h1><u>Gitárok</u></h1>
<?php
    
    $db = new SQLite3('./guitarshop.sqlite');
    $results = $db->query("select * from termekek");
        // html táblázatként íratjuk ki;
        $kimenet="";
        while ($row= $results->fetchArray()){
	$kimenet.="
	<div id='fo'>
	<h2>{$row['nev']}</h2>
	<img id='kep' src={$row['kep']}>
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
