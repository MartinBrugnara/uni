<?php 
/* GeoPin main entry poing */
require "geopin.php";  

if (isset($_POST['option']) && $_POST['option'] == "insert") {    
    $place = array(
        "name" => $_POST['place_name'],
        "address" => $_POST['place_address'],
        "lat" => $_POST['place_lat'],
        "lng" => $_POST['place_lng'],
    );
    
    pin_insert($place);
    
} else if (isset($_POST['option']) && $_POST['option'] == "remove") { 
    $id = $_POST['place_id'];
    
    pin_delete($id);
    
} else {
    include "main.inc"; 
}
?>
