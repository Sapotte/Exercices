$(document).ready(function() {
    $(".img").hover(function() {
        $(this).animate({width: "40%"}, 2000);
        $(this).children().animate({width: "100%"}, 2000)
    }, function() {
        $(this).animate({width: "20%"}, 2000);
        $(this).children().animate({width: "0"}, 2000);
    })
})
