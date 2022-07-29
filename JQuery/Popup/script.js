$(document).ready(function() {
    $(".para span").click(function() {
        var visibilite = $(this).next().is(":visible");
        $(this).next().slideToggle(500); 
        if(visibilite) {
            $(this).html("+");
        } else {
            $(this).html("-");
        }
    });

    $("#cliquez").click(function() {
        $("#popup").show();
        $("#paras").fadeTo(0, 0.2);
    })
    $("#closePopup").click(function() {
        $("#popup").hide();
        $("#paras").fadeTo(0, 1);
    })
})