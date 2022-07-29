$(document).ready(function() {
    $("#noir").click(function() {
        $("body").css("background-image", "url('images/bois-noir.png')");
    })
    $("#clair").click(function(){
        $("body").css("background-image", "url('images/bois-clair.png')");
    }) 
    $("img").hover(function(){
        $(this).attr("src", "images/ny.jpg");
    }, function(){
        $(this).attr("src", "images/sydney.jpg");
    })
})