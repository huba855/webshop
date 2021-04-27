<?php 
  include './cart.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Guitar Shop</title>
    <meta name="description" content="[add your bin description]">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
    <link href='file:///C:\style_fo.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
</head>
<body>
  <div id="fo">
    
    <div id="cimkont">
      <img id="cimkep" alt="guitar shop" src="https://thumbs.dreamstime.com/b/guitar-shop-logo-crossing-guitars-black-white-two-best-92797459.jpg">
    </div>
    <?php
    if(isset($_SESSION["items"]))
    {
      echo "<div id='kosar'><p>Kosárban lévő termékek száma: ". count($_SESSION["items"]) ."</p>";
    } 

    include './menu.php';
    if(isset($_GET["page"]))
      $page = $_GET["page"];
    else
      $page = "home";
    switch($page)
    {
      case "guitar":
        include "./guitar.php";
        break;
      case "bass":
        include "./bass.php";
        break;
      case "amp":
        include "./amp.php";
        break;
      case "misc":
        include "./misc.php";
        break;
      case "cart":
        include "./shopping_cart.php";
        break;
      default:
        include "./guitar.php";
        break;
    }
    ?>    
  </div>  
</body>
</html>