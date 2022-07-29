const nbrMax = 15;
var caraRest;
var nbrCara;
var messStyle = document.getElementById("message").style;

document.getElementById("message").addEventListener("input", function() {
     nbrCara = document.getElementById("message").value.length;
     caraRest = nbrMax - nbrCara ;
    if (caraRest > 7) {
            messStyle.backgroundColor = "white";
        }
    if ((caraRest <= 7)&&(caraRest > 3)) {
        messStyle.backgroundColor = "orange";
    }
    if (caraRest <= 3) {
        messStyle.backgroundColor = "red";
    }
    document.getElementById("alerte").innerHTML = `Il reste ${caraRest} caractères`;
})

   
