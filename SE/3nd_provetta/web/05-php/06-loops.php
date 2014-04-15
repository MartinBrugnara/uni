<!DOCTYPE html>
<html>
 <head>
   <!-- Here goes the metadata -->  
   <meta charset="utf-8">     
   <title> PHP basics </title> 
   <link rel="stylesheet" href="css/styles.css">         
 </head>
 <body>
   <!-- Here goes the visible content of the page -->
<?php 
  $week = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
?>          

          
<h1> Iterating on a array (for) </h1>     
<?php 
    for ($i=0; $i< count($week); $i++ ){
        echo $week[$i];
    }     
?>

<h1> Iterating on a array (foreach) </h1>     
<?php 
    foreach($week as $day){
        echo $day;
    }     
?>  

<h1> Mixing with some html </h1>         
<ul class="weeks">      
<?php foreach($week as $day){ ?>
     <li>
         <h2><?php echo $day ?></h2>   
         <p>
             Oh man, how I love <?php echo $day ?>s!
         </p>                    
     </li>     
<?php } ?>              
</ul>          
      
 </body>
</hml>