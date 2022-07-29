var departement = prompt("Dans quel département résidez-vous ?", "49, 37 ou 75")
var region

switch (departement) {
    case "49" : 
        region = "Vous habitez en région Pays de Loire."
    break;
    case "37" : 
        region = "Vous habitez en région Centre."
    break;
    case "75" : 
        region = "Vous habitez en région Ile-de-France."
    break;
    default : 
        region = "Désolé, je ne connais pas votre région."
}

document.body.innerHTML = region

