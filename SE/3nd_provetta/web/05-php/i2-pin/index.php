<!DOCTYPE html>
<html>
 <head>
   <!-- Here goes the metadata -->  
   <meta charset="utf-8">     
   <title> HTML5 basics </title>             

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/pinboard.css">
    
    <script src="lib/jquery-2.1.0.min.js"></script> 
    <script src="js/app.js"></script> 
     
 </head>
 <body>

    <header>
        <a class="logo" href="#">Pin+</a>
    </header>
    
    <div class="controls">

       <div class="pin-url">
           <strong> http:// </strong>
           <input id="url" type="url"> 
           <button class="opt-add">Pin+</button>                                  
       </div>
       <div class="pin-type">
           <input type="radio" name="link_type" value="website" checked> Website 
            <input type="radio" name="link_type" value="video"> Video
       </div>                    

    </div>
    
    <div class="filters">
           
           <div class="filter-type">
               <strong>Filter:</strong>
               <input type="radio" name="filter_type" value="" checked> All
               <input type="radio" name="filter_type" value="website" > Website 
               <input type="radio" name="filter_type" value="video"> Video
           </div>    
    </div>
    
    <ul class="pinboard"></ul>
    
    
    
    <footer>
        <p>&copy; Copyright 2014. All rights reserved  | - Pin+ Design.</p> 
    </footer>
 </body>
</hml>