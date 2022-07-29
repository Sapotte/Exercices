$(document).ready(function() {
    $("#conteneur").css({
        "width": "95%",
        "height": "auto",
        "padding": "2em",
        "margin": "0 auto",
        "background-image": "url('images/bg.png')",
        "display": "flex",
        "flex-wrap": "wrap",
        "justify-content": "space-around"
    });
    $("h1").css({
        "text-align": "center",
        "width": "100%"
    });
    $("#bandeau").css({
        "width": "100%",
        "height": "300px",
        "margin": "0 auto",
        "background": "no-repeat center/90% url('images/montagne.jpg'",
    })
    $("#bandeau").hover(function(){
        $("#bandeau").css("background", "no-repeat center/90% url('images/cocotier.jpg')");
        $("h1").text("Les îles");
    }, function(){
        $("#bandeau").css("background", "no-repeat center/90% url('images/montagne.jpg')");
        $("h1").text("La montagne");
    })
    $("#gauche").css({
        "width": "60%",
        "margin": "0 auto"
    });
    $("#droite").css({
        "width": "20%",
        "margin": "0 auto"
    });
    $("#gauche p:first").css("font-weight", "bold");
    $("#gauche p:eq(2)").css("font-style", "italic");
    $("h2").css("text-align", "left");
    $("ul").css("padding", "0")
    $("ul:first li:last").css({
        "border": "1px solid green",
        "color": "green"
    });
    $("ul:last").css("list-style", "none")
    $("ul:last a").css("text-decoration", "none")
    $("ul:last li:not(li:eq(1), li:first) a").css("color", "orange");
})