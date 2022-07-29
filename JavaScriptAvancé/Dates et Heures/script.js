var today = new Date() ;
var options ={ weekday: 'long', day: 'numeric', month: 'long', year: 'numeric'}
var date = today.toLocaleDateString() ;
var fullDate = today.toLocaleDateString(`fr-FR`, options) ;

var time = {
    h: today.getHours(),
    m: today.getMinutes(),
    s: today.getSeconds()
};

document.getElementById("date").innerHTML += " " + fullDate + " (" + date + ")" ;
document.getElementById("heureArrivee").innerHTML += `${time.h}h ${time.m}minutes et ${time.s}secondes`

setInterval(() => {
    var actuel = new Date();
    var timer = actuel.toLocaleTimeString();
    document.getElementById("heureActuelle").innerHTML = timer ;
}, 1000);