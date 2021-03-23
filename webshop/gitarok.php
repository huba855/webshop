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
    
    // csatlakozás az adatbázishoz
    $conn = mysqli_connect('localhost', 'root','') or die("Hibás csatlakozás!");


    // a karakterek helyes megjelenítése miatt be kell állítani a karakterkódolást!
    mysqli_query($conn, 'SET NAMES UTF-8');
    mysqli_query($conn, "SET character_set_results=utf8");
    mysqli_set_charset($conn, 'utf-8');
         
    if ( mysqli_select_db($conn, 'webshop2') ) {    // ha sikeres az adatbázis kiválasztása    
        
        
        $sql = "SELECT gitar.nev , gitar.ar, gitar.leiras, gitar.kep FROM `gitar` 

"; // ez csak egy string, még nem hajtódik végre
        $res = mysqli_query($conn, $sql) or die ('Hibás utasítás!'); // végrehajtjuk az SQL utasítást
          
        // html táblázatként íratjuk ki;
        $kimenet="";
		while ($sor=mysqli_fetch_assoc($res)){
			$kimenet.="
						<div id='fo'>
						<h2>{$sor['nev']}</h2>
						<img id='kep' src={$sor['kep']}>
						<p id={$sor['leiras']}>
    

						</p>
						<p id={$sor['ar']}></p>
						<form>
   
						<input id='db' type='text' name='darab' value='0'><button>Kosárba</button>
						</form>
						</div>";}
		// print_r($sor);
        
        mysqli_free_result($res);    // felszabadítjuk a lefoglalt memóriát
    } else {                                    // nem sikerült csatlakozni az adatbázishoz
        die('Nem sikerült csatlakozni az adatbázishoz.');
    }
 
    mysqli_close($conn); // lezárjuk az adatbázis-kapcsolatot
?> 






<?php print $kimenet; ?>
</body>
</html>
