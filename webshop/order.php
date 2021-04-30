<?php
include "./cart.php";

$stm = $db->prepare('SELECT * FROM felhasznalok WHERE email = :email');
$stm->bindParam(':email', $_POST["email"]);
$res = $stm->execute();

$row = $res->fetchArray();
$user_id = 0;
if($row == false)
{
	$stm = $db->prepare("INSERT INTO felhasznalok(nev, irszam, telepules, cim, email) VALUES ('','','','',?)");
	$stm->bindParam(1, $_POST["email"]);
	$stm->execute();
}
	$stm =  $db->prepare("SELECT * FROM felhasznalok WHERE email = ?");
        $stm->bindParam(1, $_POST["email"]);
        $res = $stm->execute();
	$row = $res->fetchArray();
	$user_id = $row["id"];



	if(isset($_SESSION["items"]) and $user_id != 0)
        {
                foreach($_SESSION["items"] as $value)
                {
                        $stm =  $db->prepare("INSERT INTO rendelesek(felhasznalo_id, termek_id, count) VALUES (?,?,?)");
                        $item_id = $value["id"];
                        $item_count = $value["darab"];
                        $stm->bindParam(1, $user_id);
                        $stm->bindParam(2, $item_id);
                        $stm->bindParam(3, $item_count);
                        $stm->execute();
                }
        }
unset($_SESSION["items"]);
print("Sikeres rendelés!");
?>
<a href="/">Vissza a főoldalra</a>
