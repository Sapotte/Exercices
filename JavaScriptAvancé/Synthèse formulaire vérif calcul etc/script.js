// Calculer facture
const tva = 20/100;
    var totHT;
    var totTTC;
    var sel;
    var sTotHT;
    var nbr;
    var ht;
    
    function calcSTot(sel, nbr, sTotHT) {
        switch(sel) {
            case "miJour" :
                sel = 8;
                break ;
            case "jour" :
                sel = 15;
                break ;
            case "repas" : 
                sel = 7;
                break
        }
        
        ht = nbr*sel;
        
        sTotHT.value = ht;
    }

    function calcTTC() {
        sel = {
            1: document.getElementById("sel1").options[document.getElementById("sel1").selectedIndex].value,
            2: document.getElementById("sel2").options[document.getElementById("sel2").selectedIndex].value,
            3: document.getElementById("sel3").options[document.getElementById("sel3").selectedIndex].value
        };
        sTotHT = {
            1: document.getElementById("sTotHT1"),
            2: document.getElementById("sTotHT2"),
            3: document.getElementById("sTotHT3")
        };
        nbr = {
            1: document.getElementById("nbr1").value,
            2: document.getElementById("nbr2").value,
            3: document.getElementById("nbr3").value
        };

        calcSTot(sel[1], nbr[1], sTotHT[1]);
        calcSTot(sel[2], nbr[2], sTotHT[2]);
        calcSTot(sel[3], nbr[3], sTotHT[3]);
        
        totHT = parseFloat(sTotHT[1].value)+parseFloat(sTotHT[2].value)+parseFloat(sTotHT[3].value);

        document.getElementById("stotHT").value = totHT;

        totTTC = (totHT*(1+tva)).toFixed(2);
        document.getElementById("totTTC").value = totTTC;
    }
    document.querySelectorAll(".sel").forEach(item => {
        item.addEventListener("change", calcTTC)
    })
    

// Vérification
var requis = document.querySelectorAll("input[required]");
let verification;

function verif(e) {
    e.preventDefault(); 
    document.getElementById("nom").style.textTransform = "uppercase";
    let valid = true;
    let msg ="Veuillez vérifier les champs";
    var mail = document.getElementById("mail").value;
    requis.forEach((requi) => {
        if (!validationrequi(requi)) {
            valid = false;;
        } 
    });
    if (mail.indexOf("@")<0) {
        msg += ", l'adresse mail n'est pas valide."
    }
    if (valid) {
        verification = true;  
    } else {
        alert(msg);
        verification = false
    }
}

function validationrequi(req) {
    if(req.checkValidity()) {
        return true;
    } else {
        req.style.borderColor = "red";
        req.parentNode.style.color = "red";
        return false;
    }
}

requis.forEach((requi) => {
    requi.addEventListener("focus", () => {
        resetReq(requi);
    })
    requi.addEventListener("blur", () => {
        validationrequi(requi);
    })
})

function resetReq(req) {
    req.style.borderColor ="black";
    req.parentNode.style.color = "black";
}

document.getElementById("verif").addEventListener("click", verif);


// Imprimer
document.getElementById("print").addEventListener("click", (e) => {
    e.preventDefault();
    window.print();
})


// Réinitialiser
document.getElementById("reset").addEventListener("click", function() {
    document.getElementById("myForm").reset();
    req.style.borderColor ="black";
    req.parentNode.style.color = "black";
})


// Envoyer
document.getElementById("envoi").addEventListener("click", function(e){
    e.preventDefault();
    if(verification) {
        document.getElementById("myForm").submit();
    } else {
        alert("Veuillez vérifier le formulaire avant l'envoi")
    }
})