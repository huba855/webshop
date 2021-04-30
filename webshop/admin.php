<?php
include "./cart.php";

$kimenet = "";
$results = $db->query("select * from rendelesek");
        while ($row= $results->fetchArray())
                {
                        $kimenet.="
                                <div class='column'>
                                <h2>Felhasználó ID: {$row['felhasznalo_id']}</h2>
                                <p id='leiras'>Termék ID: {$row['termek_id']}</p>
                                <p id='ar'>{$row['count']} darab</p>
                                </div>";
        }



print($kimenet);
?>
