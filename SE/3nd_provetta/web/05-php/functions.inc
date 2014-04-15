<?php 
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