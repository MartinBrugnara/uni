var tmpl = "<li>" + 
               "<div class='preview'> " +
               "    <img class='logo' src='https://cdn1.iconfinder.com/data/icons/ballicons-free/128/package.png'> " +
               "</div>" +
               "<div class='details'>" +
               "  <a>TITLE</a>" +
               "</div>"+
            "</li>";


$( document ).ready(function() {
    
    
    
    $(".btn-add").click(function(event){
        var product = $("#product").val();
        $(".items").append(tmpl.replace("TITLE", product));
    });
    
    $(".items li").click(function(event){
        $(event.currentTarget).remove();
    });
    
 
});