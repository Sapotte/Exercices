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
        calcImc();
        document.getElementById("formImc").submit();    
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
        imc = imc.toFixed(1);
        if (imc<16.5) {
            alert(`Votre IMC est de ${imc}. Vous êtes en dénutrition`)
        }else if (imc>=16.5 && imc<18.5) {
            alert(`Votre IMC est de ${imc}. Vous êtes en maigreur`)
        }else if (imc>=18.5 && imc<25) {
            alert(`Votre IMC est de ${imc}. Vous êtes de corpulence normale`)
        }else if (imc>=25 && imc<30) {
            alert(`Votre IMC est de ${imc}. Vous êtes en surpoids`)
        }else if (imc>=30 && imc<35) {
            alert(`Votre IMC est de ${imc}. Vous êtes obésité modérée`)
        }else if (imc>=35 && imc<40) {
            alert(`Votre IMC est de ${imc}. Vous êtes obésité sévère`)
        }else {
            alert(`Votre IMC est de ${imc}. Vous êtes obésité morbide`)
        }
    }


