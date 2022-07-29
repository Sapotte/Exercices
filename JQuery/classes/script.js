$(document).ready(function() {
    $("li").click(function() {
        $("li.active a").removeClass("orange");
        $(this).children("a").addClass("orange");
        $("li.active").removeClass("active");
        $(this).addClass("active");
    })
})