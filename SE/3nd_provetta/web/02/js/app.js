var tmpl="<li>" +
         " <div class='pin'> " +
         "   <div class='thumbnail'> " +
         "         <img src='http://api.webthumbnail.org/?width=400&height=300&screen=1024&url=URL'> " +
         "         <a href='URL'> URL </a>" +
         "   </div> " +
         "  </div> " +
         "</li> ";

var mypins = ["google.com", "facebook.com", "www.gazzetta.it", "http://www.corriere.it"];



// Generates the HTML for the pin
var getPinHTML = function(url){
    return tmpl.replace(/URL/g, url);
};

// add the pin at the begining of ".pinboard"
var addPin = function(url){
    // generate the html code 
    // add the code to .pinboard (use prepend)
};

$(document).ready(function(){
    
    // listen to the opt-add click
    $(".opt-add").click(function(){
        
        
        // we take the url from the input
        
        // we check the type of pin
        // $("input[name=link_type]:checked")
        
        // we add the pin to the pinboard
        
    });    
    
    // load the user pins
    
    
});

