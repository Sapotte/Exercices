document.getElementById("bouton").addEventListener("click", function() {
    var nombre = document.getElementById("nombre").value ;

    if (isNaN(nombre)||nombre=="") {
        alert("Veuillez entrer un nombre")
    } else {
        alert("La valeur saisie est " + nombre)
    }
})
