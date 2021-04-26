<!DOCTYPE html>
<html>
<head>
<title>Guitar Shop</title>
<meta name="description" content="[add your bin description]">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/
reset.css">
 <link href='./static/style_fo.css' rel='stylesheet'>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  
  
 $("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(2000)
    .next()
    .fadeIn(2000)
    .end()
    .appendTo('#slideshow');
},  3000);
    
 

</script>
  
  </head>
<body>
  <div id="fo">
    
    <div id="cimkont">
      <img id="cimkep" alt="guitar shop" src="https://thumbs.dreamstime.com/b/guitar-shop-logo-crossing-guitars-black-white-two-best-92797459.jpg">
     </div>
    
    <div id="kosar">
   <p>Kosár: 0 tétel</p>
    </div> 
    
  <div id="menu">
    
	<a href="gitarok.php" class="alap gitarok"><u>Gitárok</u></a>
    <a class="alap erositok"><u>Erősítők</u></a>
    <a class="alap kiegeszitok"><u>Kiegészítők</u></a>
    <a class="alap kosar"><u>Kosár</u></a>
	
  </div>
    
   <div id="slideshow">  
    
     <div><img id="elso"  class="slide" src="https://www.gitarcentrum.hu/img/sm//images/product/304805628.jackson-pro-series-king-v-kv.jpg"></div>
     <div><img id="masodik"  class="slide" src="https://www.gitarcentrum.hu/img/sm//images/product/fender-player-stratocaster-mn-3-color-sunburst.jpg"></div>
     <div><img id="harmadik"  class="slide" src="https://www.gitarcentrum.hu/img/sm//images/product/ibanez-gsr200b-wk_1.jpg"></div>
     <div><img id="negyedik"  class="slide" src="https://www.gitarcentrum.hu/img/sm//images/product/epiphone/epiphone-toby_deluxe-iv_bass_trans_amber.jpg"></div>
  </div>  
     
 
    
    
    
    
    
    
    
    
    
    
    
    
  </div>  
</body>
</html>












