$(document).ready(function () {
    function positionInit(objet, l, t) {
        $(objet).css({left: l, top: t});
    }

    function backMove(objet, duree) {
        $(objet).animate({"background-position": "-=2000px"}, duree, "linear"); 
    }

    setInterval(() => {
        $("#avion1").delay(3000).animate({left: "2450px"}, 7000, positionInit("#avion1", "-200px", "60px"));
        $("#avion2").delay(7000).animate({left: "-500px", top: "150px"}, 3000, positionInit("#avion2", "1000px", "-250px"));
        backMove("#nuages", 30000);
        backMove("#ville", 20000);   
    },0);
})