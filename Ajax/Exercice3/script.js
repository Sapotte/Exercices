$(document).ready(function() {
    $('button').click(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "data.php",
            data: 'id='+$('#id').val()+"&mdp="+$('#mdp').val(),

            success: function (response) {
                $("#contenu").html(response);
            },
            error: function (xhr, status, errorText) {
                alert("Une erreur s'est produite".errorText);
            }
        });
    
    });
});