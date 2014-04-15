<?php

function db_connect(){
    $host = "didattica.science.unitn.it";
    $dbname = "db_sweng001";
    $user = "sweng001";
    $pass = "sweng001abc";

    return new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);  
    
}


function pin_load (){
    $PIN_LOAD_SQL = "select id, name, address, lat, lng from places";
    try {
        // open database
        $dbh = db_connect();   

        foreach ($dbh->query($PIN_LOAD_SQL) as $row){
            $id = $row['id'];
            $name = $row['name'];
            $address = $row['address'];
            $lat = $row['lat'];
            $lng = $row['lng'];
            
            include "place.inc";
        }

        // close database
        $dbh = null;
    }
    catch(PDOException $e){
        echo $e->getMessage();
    } 
}
 
function pin_insert ($place){
    $PIN_INSERT_SQL = "INSERT INTO places(name, address, lat, lng)".
                      " values (:place_name, :place_address, :place_lat, :place_lng)";
    
    try {
        // open database
        $dbh = db_connect(); 
        
        $stmt = $dbh->prepare($PIN_INSERT_SQL); 
        
        $stmt->bindValue(':place_name', $place['name']);        
        $stmt->bindValue(':place_address', $place['address']);
        $stmt->bindValue(':place_lat', $place['lat']);
        $stmt->bindValue(':place_lng', $place['lng']);                
        
        $stmt->execute();        
        
        // close database
        $dbh = null;
        
    }
    catch(PDOException $e){
        echo $e->getMessage();
    } 
} 
 
function pin_delete ($place_id){
    $PIN_DELETE_SQL = "DELETE FROM places where id = :place_id";
    
    try {
        // open database
        $dbh = db_connect(); 
        
        $stmt = $dbh->prepare($PIN_DELETE_SQL); 
        
        $stmt->bindValue(':place_id', $place_id);                         
        
        $stmt->execute();        
        
        // close database
        $dbh = null;
        
    }
    catch(PDOException $e){
        echo $e->getMessage();
    } 
}  
 
 
 
?>