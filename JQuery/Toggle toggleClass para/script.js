$(document).ready(function() {
    $("button").click(function() {
        $("div").toggle().toggleClass("visible");
        if($("div").is(":hidden")){
            $(this).html("Plus d'infos ici");
        } else {
            $(this).html("Moins d'infos ici");
        }
    })
})