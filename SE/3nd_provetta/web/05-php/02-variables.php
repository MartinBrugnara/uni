<?php 
    $name = "Pippo";
    $age = 18;
    $weight = 68.2;
    $single = true;
     
    echo gettype($name); // prints out:  boolean
    echo gettype($age);  // prints out:  integer                                                                 
    echo gettype($weight);  // prints out:  double                                                                 
    echo gettype($single);  // prints out:  string      
    
                                                                                                                          
?>
<br>
<?php 
      echo "Hello world!, $name"; 
     echo "<br>";
     echo "Hello world," . $name;
     echo "<br>";
     echo "My name is $name, I'm $age years old.";           
?>     