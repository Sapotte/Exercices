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
    if (val==1) {
        reponse() ;
    }else if (val==0) {
        alert("Veuillez faire au moins un choix !") ;
    } else{
        alert("Attention à ne pas trop en faire!")
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