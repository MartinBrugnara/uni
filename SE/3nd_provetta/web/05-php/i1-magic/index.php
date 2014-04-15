<!DOCTYPE html>
<html>
 <head>
   <!-- Here goes the metadata -->  
   <meta charset="utf-8">     
   <title> PHP basics </title>            
 </head>
 <body>
   <!-- Here goes the visible content of the page -->
     
     <h1>Magic number</h1>
     <form action="XXXXXXXXXXXX" method="post">
         <label for id="number">Guess the number </label>
         <input type="text" id="number" name="XXXXXXXXXXXXXX" placeholder="Your number">           
         
         <button type="submit"> Send </button>
     </form>
          
   
<?php 
    $secret = 44;
    $guess = NULL;
    
    // Implement the logic here
    
    // secret > guess -> try smaller
    // secret < guess -> try a bigger number
    // secret == guess -> You won!
    
?>
   
      
 </body>
</hml>