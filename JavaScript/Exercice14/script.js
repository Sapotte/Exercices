function effacer(x) {
   document.getElementById(x).setAttribute('placeholder', '')
}

function selectionner(y) {
    document.getElementById(y).select()
}

document.getElementById("texte3").addEventListener("focus", function(){
    effacer ("texte1")
    selectionner("texte2")
})