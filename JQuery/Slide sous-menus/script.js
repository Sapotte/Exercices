$(document).ready(function() {
    $(".menu").click(function(){
        var visibilit√© = $(this).children(".sousMenu").is(":visible");
        if (visibilit√©) {
            $(this).children(".sousMenu").slideUp(500);
        } else {
            $(".sousMenu").slideUp(500);
            $(this).children(".sousMenu").slideDown(500);
        }  
    })
})