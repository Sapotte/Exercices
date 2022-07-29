var age = prompt("Quel est vôtre âge ?");
age = parseInt(age);

var texte;
if (age<12) {
    texte = "Vous êtes un enfant ! " 
} else if (age>=12, age<18) {
    texte = "Vous êtes un ado !"
} else if (age>=18) {
    texte = "Vous êtes un adulte !"
} else {
    texte = "Veuillez entrer un âge valide"
}

document.body.innerHTML = texte ;



