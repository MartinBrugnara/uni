/**
* Main GeoPin app file
* @author: Marcos Baez
*/
$(document).ready(function(){  
        
    GeoPin.loadMap({
        coords : {
            latitude : 0,
            longitude: 0
        }
    });
    
    $(".btn-insert").click(function(event){
        
        var name = $("input[name=place_name]").val();
        var address = $("input[name=place_address]").val();
        
        alert("insert " + name);
    });
    
    $(".btn-remove").click(function(event){
        var id = $(event.currentTarget).attr("rel-place");
        
        alert("remove " + id);
        
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
            center : latlng,
            mapTypeControl: false,
            navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        
        // let's render the map
        GeoPin.map = new google.maps.Map(document.getElementById("map"), myOptions);

    }
    
};

