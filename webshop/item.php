<div>
<?php if(isset($_SESSION["message"])) { print $_SESSION["message"]; unset($_SESSION["message"]);}?>
<?php
    
    $results = $db->query("select * from termekek where typeId = $typeID");
        $kimenet = "";
        while ($row= $results->fetchArray())
		{
			$kimenet.="
				<div class='column'>
				<h2>{$row['nev']}</h2>
				<img id='kep' src=./static/{$row['kep']}>
				<p id='leiras'>{$row['leiras']}</p>
				<p id='ar'>{$row['ar']} Ft</p>
				<form method='post' action='add_to_cart.php'>
					<input id='db' type='text' name='darab' value='1'><button>Kosárba</button>
					<input type='hidden' name='id' value={$row['id']}>
				</form>
				</div>";
	}
        
print $kimenet; ?>
</div>
