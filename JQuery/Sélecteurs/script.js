$(document).ready(function () {
    $("a").css("display", "block");
    $("p:eq(1) a").css("display", "inline");
    $("p:not(p:eq(1), #liens)").css("border-bottom", "1px solid orange");
    $("p:first").css("border-bottom", "1px solid black");
    $("p:last").css("font-weight", "bold");
    $("p:eq(3)").css("font-weight", "bold");
    $("p:eq(5) a").css("color", "black");
    $("#conteneur").css("color", "#333");
    $("#liens").children().css("margin-left", "40px");
    $("table").css("margin-top", "50px");
    $("td:even").css("background-color", "grey");
    $("td:odd").css("background-color", "lightgrey");
    $("p.test").css("color", "red");
    $("p:contains('Yes')").css("color", "#663399");
    $("p:not(p:first, p:last)").css("font-size", "0.8em");
    $("p a:first-child").css("background-color", "#ccc");
    $("p a:eq(3)").css("background-color", "#ccc");
    $("p a:only-child").css("background-color", "#c60");
    $("td:empty").css("background-color", "#c60");
})