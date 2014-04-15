<!DOCTYPE html>
<html>
 <head>
   <!-- Here goes the metadata -->  
   <meta charset="utf-8">     
   <title> PHP basics </title>       
     
 </head>
 <body>
   <!-- Here goes the visible content of the page -->
     
     <h1>Personal Data</h1>
     <form action="03-form.php" method="get">
         <label for id="name">Name </label>
         <input type="text" id="name" name="iName" placeholder="Insert your name">
         
         <label for id="name">Age </label>
         <input type="number" id="age" name="iAge" placeholder="Insert your age">         
         
         <button type="submit"> Send </button>
     </form>
     
 
    <h2> GET result</h2>
    <p>         
     <?php 
         $name = $_GET['iName'];   
         $age = $_GET['iAge'];   

         echo "Hello $name, your age is $age";                                           
      ?>
    </p>
    
    <h2> POST result</h2>
    <p>         
     <?php 
         $name = $_POST['iName'];   
         $age = $_POST['iAge'];   

         echo "Hello $name, your age is $age";                                           
      ?>
    </p>      
      
 </body>
</hml>