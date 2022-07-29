document.getElementById("envoi").addEventListener("click", verif) ;
let champs = document.querySelectorAll("input[required]") ;

champs.forEach((champ)=> {
    champ.addEventListener("focus", ()=> {
        resetMsg(champ);
    })
    champ.addEventListener("blur", () => {
        validationChamp(champ);
    })
})

function verif(e) {
    e.preventDefault(); 
    let valid = true;
    champs.forEach((champ) => {
        if (!validationChamp(champ)) {
            valid = false;
        } 
    });
    if (valid) {
        document.getElementById("formImc").submit();
        calcImc();
    } 
}

// Validation des champs
    function validationChamp(chp) {
       if(chp.checkValidity()) {
           return true;
       } else {
           let msg = document.createElement("span");
           msg.classList.add("msg");
           msg.innerText = chp.validationMessage;
           chp.parentNode.appendChild(msg);
           return false;
       }
    }

// Effacer message d'erreur lors du focus
    function resetMsg (chp) {
        let msg =chp.nextElementSibling;
        if (msg != null) {
            chp.parentNode.removeChild(msg);
        }
    }

// Calcul de l'IMC
    function calcImc () {
        var taille = document.getElementById("taille").value;
        console.log(taille)
        var poids = document.getElementById("poids").value;
        console.log(poids)
        var imc = poids /(taille*taille)
        imc = Math.round(imc)
        alert(`Votre IMC est de ${imc}`)
    }


