$(document).ready(function () {
    $(this).keydown(function(e) {
        if (e.key == "m") {
            $("p").slideDown();
        }
        if (e.key == "c") {
            $("p").slideUp();
        }
    })      
})