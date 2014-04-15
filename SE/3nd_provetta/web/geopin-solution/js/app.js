/**
* Main GeoPin app file
* @author: Marcos Baez
*/
$(document).ready(function(){  
        
    // let's try to get the location from the client
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(GeoPin.loadMap);        
    } else {
      alert('not supported');
    }     
    
    $(".btn-insert").click(function(event){
        
        var name = $("input[name=place_name]").val();
        var address = $("input[name=place_address]").val();
        
        GeoPin.getAddressCoordinates(address, function(location){
            
            GeoPin.insertPlace({
                place_name : name,
                place_address : address,
                place_lat: location.k,
                place_lng : location.A
            });
            
        });
    });
    
    $(".btn-remove").click(function(event){
        var id = $(event.currentTarget).attr("rel-place");
        
        GeoPin.removePlace({
            place_id : id
        });                
        
    }); 
    

});

GeoPin = {
    
    /**
     * Loads the map, using your location to center the map
     * position - contains the coordinates in latitude and longitude
     */
    loadMap : function (position) {
     
        // we convert the position in the format of google maps
        var latlng = new google.maps.LatLng(position.coords.latitude,
                                            position.coords.longitude);
        
        // let's set some general options
        var myOptions = {
            zoom: 15,
            center: latlng,
            mapTypeControl: false,
            navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        
        // let's render the map
        GeoPin.map = new google.maps.Map(document.getElementById("map"), myOptions);
        
        // let's drop a marker for all visible places;
        GeoPin.loadPlacesMarkers(); 
    },
    
    getAddressCoordinates : function(address, handler){
        var geocoder = new google.maps.Geocoder();
        
        geocoder.geocode( { 'address': address}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                handler(results[0].geometry.location);            
            } else {
                alert("Geocode was not successful for the following reason: " + status);
            }  
        });
    },    

    loadPlacesMarkers : function(){
        $(".places li").each(function(){
            var place = {
                lat : $(this).attr("place-lat"),
                lng : $(this).attr("place-lng"),
                name : $(this).find(".name").html()
            };
            GeoPin.addMarker(place);
        });
    
    },
    
    addMarker : function(place){
        var latlng = new google.maps.LatLng(place.lat,
                                            place.lng);
        var marker = new google.maps.Marker({
          position: latlng, 
          map: GeoPin.map, 
          title: place.name
        });        
        
    },
    
    /* CRUD operations */
    
    insertPlace : function(place){     
        place.option = "insert";
        $.post("index.php", place).done(function(data){
            window.location.reload();
        });
    },
    
    removePlace : function(place){     
        place.option = "remove";
        $.post("index.php", place).done(function(data){
            window.location.reload();
        });
    }    
    
};

