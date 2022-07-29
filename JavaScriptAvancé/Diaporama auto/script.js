var images = ["images/paris.jpg" , "images/londres.jpg" , "images/rome.jpg"];
var nbr = images.length;
var i = 0;

function diapo() {
    i++;
    if (i==nbr) {
        i=0;
    }
        document.getElementById("diapo").src = images[i];
}

setInterval(diapo, 2000);
