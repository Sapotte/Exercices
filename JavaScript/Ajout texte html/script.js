var monTexte = document.createTextNode("Hello World !");
var monParagraphe = document.createElement('p');

monParagraphe.appendChild(monTexte);
document.body.appendChild(monParagraphe);