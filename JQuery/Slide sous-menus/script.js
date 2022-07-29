$(document).ready(function() {
    $(".menu").click(function(){
        var visibilité = $(this).children(".sousMenu").is(":visible");
        if (visibilité) {
            $(this).children(".sousMenu").slideUp(500);
        } else {
            $(".sousMenu").slideUp(500);
            $(this).children(".sousMenu").slideDown(500);
        }  
    })
})