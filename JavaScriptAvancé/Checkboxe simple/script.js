function verif(){
    var reponses =  document.getElementsByName("hobbies");	
	var val=0;
	for(i=0; i<reponses.length; i++){			 			 
		if(reponses[i].checked){ 
			return true
        }
    }
}

document.getElementById("envoi").addEventListener("click", () => {
    if (verif()) {
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
    } else {
        alert("Choisir un passe-temps !")
    }  
}) 