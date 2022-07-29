document.getElementById("envoi").addEventListener("click", (e) => {
     e.preventDefault() ;
   var annee = document.getElementById("annees").selectedIndex;
    switch (annee) {
        case 0:
            alert("Choisir une année !");
            break ;
        case 1 : 
            alert("Plus tard !");
            break ;
        case 2 : 
            alert("Presque!");
            break ;
        case 3 : 
            alert("Bonne réponse! Le W3C fut créé en octobre 1994 par Tim Berners Lee.");
            break ;
        case 4 : 
            alert("Non. 1996 correspond à la première recommandation du CSS.");
            break ;
        case 5 : 
            alert("Belle année pour le football français mais rien à voir avec le W3C !");
            break ;
        case 6 : 
            alert("Vous avez dormi avant ?!");
            break ;
    }

})