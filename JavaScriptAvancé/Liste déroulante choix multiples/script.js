var devices = document.getElementById("device") ;
var choix ="" ;

document.getElementById("envoi").addEventListener("click", (e) => {
    e.preventDefault() ;
    var liste ="";
     for (i=0 ; i<devices.length ; i++) {
       if (devices.options[i].selected) {
            choix = devices.options[i].value ;
            liste += `<li> ${choix} </li>` ;
        }
    }
    document.getElementById("reponse").innerHTML =`<ul> Vous consultez Internet depuis : ${liste} </ul>` ;
}) 