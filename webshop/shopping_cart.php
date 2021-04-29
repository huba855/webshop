<div class="column">
<?php

if(isset($_SESSION["items"]))
{
$sum = 0;
print "<table>
  <tr>
    <th>Termék neve</th>
    <th>Darab</th>
    <th>Ár</th>
  <tr>";
foreach($_SESSION["items"] as $value)
{
$guitar_id = $value["id"];
$guitar_count = $value["darab"];
$results = $db->query("select * from termekek where id=".$guitar_id);
$guitar = $results->fetchArray();
$guitar_name = $guitar['nev'];
$guitar_price = $guitar['ar'];
$sum += $guitar_price;
print "<tr>
    <td>$guitar_name</td>
    <td>$guitar_count</td>
    <td>$guitar_price</td>
  </tr>";
}
print "<tr><td>Összesen</td><td></td><td>$sum</td></tr>";
print "</table>";
}
else
{
print "A kosarad üres";
}

?>

<form method="POST" action="order.php">
<ul>
<li>Név: <br><input type="text" name="name">
<li>Telefonszám: <br><input type="text" name="phone">
<li>Szállítási cím: <br><input type="text" name="address" id="address">
<li>E-mail: <br><input type="text" name="email" id="email">
<li>Fizetés módja: <br><input type="radio" name="pay" id="radio1" value="Készpénz"><label for="Készpénz">Készpénz</label>
  <br><input type="radio" name="pay" id="radio2" value="Bankkártya"><label for="Bankkártya">Bankkártya</label>
  <br><input type="radio" name="pay" id="radio3" value="Utalás"><label for="Utalás">Utalás</label>
</ul>  
<button id="rendel">Rendelés véglegesítése</button>
</form>

</div>
