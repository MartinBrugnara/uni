<!DOCTYPE html>
<html>
 <head>
   <!-- Here goes the metadata -->  
   <meta charset="utf-8">     
   <title> HTML5 basics </title>             

    <link rel="stylesheet" href="css/styles.css">
        
    <script src="lib/jquery-2.1.0.min.js"></script>         
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="js/app.js"></script>               
     
 </head>
 <body>
  
    <header>
        <a class="logo" href="#"><img src="img/logo.png"> Pin+</a>
    </header>
    
    <div id="map"></div>
    
    <div class="controls">
        <label for="place_name">Name</label> <input id="place_name" type="text" name="place_name">
        <label for="place_address">Address</label> <input id="place_address" type="text" name="place_address">     
        <button class="btn-insert">Insert Place</button>   
    </div>

    
    <ul class="places">
        <?php pin_load() ?>
    </ul>
          
    <footer>
        <p>&copy; Copyright 2014. All rights reserved  | - Pin+ Design.</p> 
    </footer>
        
 </body>
</hml>