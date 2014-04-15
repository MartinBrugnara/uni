<!DOCTYPE html>
<html>
 <head>
   <!-- Here goes the metadata -->  
   <meta charset="utf-8">     
   <title> PHP basics </title>            
 </head>
 <body>
   <!-- Here goes the visible content of the page -->
         
<h1>Conditionals</h1>       
<p>To use this script, type in the url</p>
<p>05-conditiona.php?<strong>option</strong>=(list or detail) </p>
<p>If you choose the "detail" option, you shold provide in addition the id of the item</p>
<p>05-conditiona.php?<strong>option</strong>=detail&amp;<strong>id</strong>=(id)</p>

<h2>
<?php 
   
    $option  = $_GET['option']; 
        
    if ($option == "list") {    
        echo "Listing elements!";
        
    } else if ($option == "detail"){        
        
        # let's extract the id
        if (!isset($_GET['id']) || $_GET['id'] == "") {
            echo "Detail Error: id was not provided";
        } else {
            echo "Displaying details!";
            // And here the logic should be
        }
    
    } else {
        
        echo "Option not available ";
        // and here all the logic should be
    }
                        
?>
</h2>   
      
 </body>
</hml>