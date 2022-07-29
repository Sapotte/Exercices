$(document).ready(function() {
    $("#lien").click(function(){
        $.ajax({
            url: "test.html",
            success: function(data){
        
            $("#contenu").append(data);
        
        }
        })
     }); 
})