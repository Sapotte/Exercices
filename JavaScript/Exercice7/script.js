var age = prompt("Quel est votre âge ?");
var homme = confirm("Etes-vous un homme? OK=oui / Annuler=non");
var texte ;
age = parseInt(age);

if (age>=18 && homme) {
    texte = "Bonjour!"
} else {
    texte = "Désolé, cette page est réservée aux hommes majeurs"
}

document.body.innerHTML = texte ;