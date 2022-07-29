function rocket() {
    $("#rocket").animate({left: "-400px"}, 1000, "linear", function() {
        $("#rocket").css({left: "700px"});
    });
    topRocket = Math.floor(Math.random()*700);
        $("#rocket").css({top: topRocket+"px"});
}

function plane() {
    var topPlane = 50;
    var leftPlane = -30;
    $(document).keydown(function(event) {
        event.preventDefault();
        if((event.keyCode == 38) && (topPlane > 0)) {
            topPlane -= 10;
            $("#plane").css("top", topPlane+"px");
        }
        if((event.keyCode == 40) && (topPlane < 690)) {
            topPlane += 10;
            $("#plane").css("top", topPlane+"px");
        }
        if((event.keyCode == 39) && (leftPlane < 620)) {
            leftPlane += 10;
            $("#plane").css("left", leftPlane+"px");
        }
        if((event.keyCode == 37) && (leftPlane > -30)) {
            leftPlane -= 10;
            $("#plane").css("left", leftPlane+"px");
        }
    })
}

function loose() {
    var rockLeft = parseInt($("#rocket").css("left"));
    var rockTop = parseInt($("#rocket").css("top"));
    var planeLeft = parseInt($("#plane").css("left"));
    var planeTop = parseInt($("#plane").css("top"));
    let score;
    var difLeft = rockLeft-planeLeft;
    var difTop = rockTop-planeTop;
   
    if ((difLeft<10) && ((difTop>-20) && (difTop<120))) { 
        $("audio")[0].play();
        score = parseInt($("#score").text());
        score++;
        $("#score").text(score);
        $("#rocket").stop();
        $("#rocket").css({left: "700px", top: "0px"});
        
    }
}

$(document).ready(function() {
    $("#conteneur").animate({"background-position": "-=200px"}, 5000, "linear");
    plane();
    setInterval(rocket, 1500);
    setInterval(loose, 10, rocket);
    
})