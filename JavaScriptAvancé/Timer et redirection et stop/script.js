var compteur = 10;

function compt() { 
    compteur-- ;
    document.getElementById("compteur").innerText = compteur;
    if (compteur==0) {
        window.location.replace("https://cefii.fr/");
        clearInterval(timer);
    }   
}

var timer = setInterval(compt, 1000);

document.getElementById("stop").addEventListener("click", (e) => {
    e.preventDefault();
    clearInterval(timer);
})

