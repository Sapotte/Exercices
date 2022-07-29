document.getElementById("calc").addEventListener("click", function(){
    var ht = document.getElementById("mtHT").value ;
    var tva = document.getElementById("TVA").value ;

    if (isNaN(ht)) {
        alert("Veuiller saisir un montant valide");

    } else if (ht!=0 && tva!=0) { 
        var ttc = ht*(1+tva/100) ;
        ttc = ttc.toFixed(2);

        alert(`Le montant TTC est de ${ttc}`);
  
    } else {
        alert("Veuillez renseigner tous les champs");
    }   
})


