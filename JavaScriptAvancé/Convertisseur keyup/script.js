var eu = document.getElementById("euros");
var fr = document.getElementById("francs");


function verif(devise) {
    if (devise<0 || isNaN(devise)) {
        alert("Veuillez saisir un nombre valide")
        return false
    } else {
        parseFloat(devise);
        return true
    }
}

function convertEuros(euros) {
    var euros = document.getElementById("euros").value ;
    euros = euros.replace(",",".");
    if(verif(euros)){
        var francs = euros*6.55957
        francs = francs.toFixed(2)
        fr.value=francs
    }
}

function convertFrancs(francs) {
    var francs = document.getElementById("francs").value ;
    francs = francs.replace(",",".");
    if(verif(francs)) {
        var euros = francs/6.55957
        euros = euros.toFixed(2)
        eu.value=euros
    }
}

eu.addEventListener("keyup", convertEuros);
fr.addEventListener("keyup", convertFrancs);

eu.addEventListener("click", () => {
    document.getElementById("calcImc").reset();
})
fr.addEventListener("click",  () => {
    document.getElementById("calcImc").reset();
})




