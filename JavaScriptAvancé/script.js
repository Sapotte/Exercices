function dpt() {
    var dept;
    var region = document.getElementById("region").selectedIndex;
    switch(region) {
        case 1 :
            dept = ["Maine-et-Loire" , "Loire-atlantique" , "Sarthe" , "Mayenne" , "Vendée"];
            break ;
        case 2 :
            dept = ["Finistère" , "Côtes d'Armor" , "Ile-et-Vilaine" , "Morbihan"];
            break ;
        case 3 :
            dept = ["Charente" , "Charente maritime" , "Deux-Sèvres" , "Vienne"];
            break ;
    }
    var i;
    var nbr = dept.length;
    for (i=0; i<nbr; i++) {
        var opt = document.createElement("option");
        opt.innerText = dept[i];
        document.getElementById("dept").appendChild(opt);   
    }
}

document.getElementById("region").addEventListener("click", function(){
    document.getElementById("dept").innerText = "";
    dpt();
});

