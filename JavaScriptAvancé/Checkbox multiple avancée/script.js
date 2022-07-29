function verif(e) {
    e.preventDefault() ;
}
document.getElementById("envoi").addEventListener("click", verif)

document.getElementById("envoi").addEventListener("click", () => {
    var reponses =  document.getElementsByName("hobbies");	
	var val=0;
	for(i=0; i<reponses.length; i++){			 			 
		if(reponses[i].checked){ 
			val = val+1 ;
        }
    }
    switch (val) {
        case 0 :
            alert("Veuillez faire au moins un choix !");
            break ;
        case 1 : 
            reponse() ;
            break ;
        case 2 :
            alert("Bravo vous êtes plurdisciplinaire !") ;
            break ;
        case 3 :
            alert("Vous ne tenez pas en place ?") ;
            break ;
        case 4 :
            alert("Attention à ne pas trop en faire!") ;
            break ;
    }
}) 

function reponse() {
        let hobby = document.querySelector("input:checked").value ;
            switch(hobby) {
                case "sport" : 
                    alert("C'est bien pour la santé !") ;
                    break ;
                case "musique" : 
                    alert("Une âme d'artiste ?") ;
                    break ;    
                case "lecture" : 
                    alert("Plutôt littéraire !") ;
                    break ; 
                case "internet" : 
                    alert("Décrochez un peu de votre écran !") ;
                    break ;  
            }   
}