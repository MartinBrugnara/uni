var tmpl="<li pin_id='PIN_ID' type='website'>" +
         " <div class='pin'> " +
         "   <div class='thumbnail'> " +
         "         <img src='http://api.webthumbnail.org/?width=400&height=300&screen=1024&url=URL'> " +
         "   </div> " +
         "   <a href='URL'> URL </a>" +
         "   <div class='options'><button rel-pin='PIN_ID' class='opt-remove'>Remove</button></div>"+
         "  </div> " +
         "</li> ";

var tmplVid="<li pin_id='PIN_ID' type='video'>" +
         " <div class='pin'> " +
         "   <div class='thumbnail'> " +
         "         <iframe  src='http://www.youtube.com/embed/VIDEO_ID' frameborder='0' allowfullscreen></iframe>" +
         "   </div> " +
         "   <a href='URL'> URL </a>" +
         "   <div class='options'><button rel-pin='PIN_ID' class='opt-remove'>Remove</button></div>"+
         "  </div> " +
         "</li> ";

var mypins = ["google.com", "facebook.com", "www.gazzetta.it", "http://www.corriere.it"];



// Generates the HTML for the websites
var getPinHTML = function(url){
    // generates randomly an ID. This id is used to identify the 
    // pin
    var pinId = Math.random();
    
    return tmpl.replace(/URL/g, url).replace(/PIN_ID/g, pinId);
};

// Generates the HTML for the video
var getPinVideoHTML = function(url){
    // generates randomly an ID.
    var pinId = Math.random();
    
    // extracts the video id
    var video_id = url.split("/").pop();    
    return tmplVid.replace(/URL/g, url).replace(/VIDEO_ID/g, video_id).replace(/PIN_ID/g, pinId);
};

// add the pin at the begining of ".pinboard"
var addPin = function(url, type){    
    var pin = "";
    
    if (type == "video") {
        pin = getPinVideoHTML(url);
    } else {
        pin = getPinHTML(url);
    }
    
    $(".pinboard").prepend(pin);
};

$(document).ready(function(){
    
    // listen to the opt-add click
    $(".opt-add").click(function(){
                
        // we take the url from the input
        var url = "http://" + $("#url").val();
        
        // we check the type of pin
        var type = $("input[name=link_type]:checked").val();
        
        // we add the pin 
        addPin(url, type);        
    });    
    
    $("input[name=filter_type]").click(function(){
        var type = $("input[name=filter_type]:checked").val();
        
        // let's make all of them visible                        
        if (type == ""){
            // let's show everything
            $(".pinboard li").show();
        } else {
            // let's show only the type clicked
            $(".pinboard li").hide();
            $(".pinboard").find("li[type='"+ type +"']").show();            
        }
        
    });
    
    // we bind the listener to pinboard, otherwise we would not detect
    // events on the new events.
    
    $(".pinboard").on("click", ".opt-remove", function(event){        
        // we get the id of the related pin
        var pin_id = $(event.currentTarget).attr("rel-pin");        
        
        // we delete the pin identified by the id
        // .find() allows to select more specific elements 
        // inside the parent 
        $(".pinboard").find("li[pin_id='"+ pin_id +"']").remove();
    });    
    
    // load the user pins
    for (var i=0; i < mypins.length; i++){
        var url = mypins[i];
        addPin(url);
    }            
    
});

