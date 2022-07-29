document.getElementById("envoyer").addEventListener("click", function(){
    var name = document.getElementById("name").value ;
    var forname = document.getElementById("forname").value ;

    document.body.innerHTML += `<p> Bonjour ${forname} ${name} </p>`;
})