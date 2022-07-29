document.getElementById("image").addEventListener("mouseover", function(){
    document.getElementById("image").src = "images/neige.jpg";
    document.getElementById("texte").innerHTML = "Quittez la neige!"
})

document.getElementById("image").addEventListener("mouseout", function(){
    document.getElementById("image").src = "images/plage.jpg";
    document.getElementById("texte").innerHTML = "Survolez l'image..."
})