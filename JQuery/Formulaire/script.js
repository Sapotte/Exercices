$(document).ready(function() {

var valid = true;

function removeSpan() {
    $("input").siblings("span").remove();
}


function validChamps() {
        var phone = $("#phone").parent();
        
    $("input").each(function() {
        var div = $(this).parent();
        var valeur = $(this).val();
        if(valeur.length == 0) {
            $("<span>Veuillez remplir le champ</span>").appendTo(div);
            valid = false
        }
    })
    if((isNaN($("#phone").val()) || ($("#phone").val().length != 10))) {
        $("<span>Le numéro de téléphone n'est pas valide</span>").appendTo(phone);
        valid = false;
    }
}

    $("input").blur(function() {
        removeSpan();
        validChamps();
    })
   
    $("button").click(function(event) {
        event.preventDefault();
        removeSpan();
        validChamps();
        if(valid) {
            $("form").submit();
        }
    })
})

    