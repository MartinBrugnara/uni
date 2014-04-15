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
   <h1> Testing PHP functions</h1>
<?php 
  
  $places = array(
         "Starbucks" => array(
             "type" => "coffee",
             "description" => "Not the real stuff"
         ), 

         "McDonalds" => array(
             "type" => "fast food",
             "description" => "Not 100% healthy"
         )
  ); 
  
  # main
  
  if (isset($_GET['option']) && $_GET['option'] == "detail") {
      $id = $_GET['id'];
      $place = $places[$id];
      render_detail($id, $place);      
  } else {
      render_list($places); 
  }  
  
  
  /* Functions */
  
  # renders the list of places 
  function render_list ($list) {
      foreach($list as $place => $detail){
         echo "<div><a href='?option=detail&id=$place'> $place</a></div>";
      }   
  }
  
  # render a single place
  function render_detail ($id, $place) {  
      echo "<h1>$id</h1>" . 
           "<p><strong>type</strong> {$place['type']}</p>" .
           "<p>{$place['description']}</p>";
  }


  

?> 
      
 </body>
</hml>