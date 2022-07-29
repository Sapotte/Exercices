$(document).ready(function () {

    $('#add').click(addClient());
    $('button.update').click(displayFormUpdate());
    $('#updateDB').click(updateClient());
    $('button.delete').click(deleteClient());
    $('#cancel').click( function() {
        $('#form').load('formAdd.php');
    })
    $('#close').click(removeSpan());
});

function displayFormUpdate() {
    var id = $(this).val();

    $.ajax({
        type: "POST",
        url: "formUpdate.php",
        data: {id},
        success: function (response) {
            $("#form").load(response);
        }, error: function () {
            $("#reponse")
                .html("<span class='erreur'>Une erreur est survenue<button type='button' id='close'><i class='fa-solid fa-xmark'></i></button></span>")
        }
    })
}

function addClient() {
    var nom = $("#nom").val();
    var prenom = $("#prenom").val();
    var email = $("#email").val();

    $.ajax({
        type: "POST",
        url: "traitement.php?action=add",
        data: {nom, prenom, email},
        dataType: "json",
        success: function (response) {
            $("#reponse")
                .hide()
                .html("<span class='succes'>Client ajouté avec succès !<button id='close'><i class='fa-solid fa-xmark'></i></button></span>")
                .fadeIn(1000);
            $('input').val('');
            $('#clients').load("display.php");
        }, error: function() {
            $("#reponse")
                .html("<span class='error'>Une erreur s'est produite. Veuillez réessayer<button id='close'><i class='fa-solid fa-xmark'></i></button></span>");
        }
    });
};

function deleteClient() {
    var id = $(this).val();

    if(confirm("Etes-vous sûr de vouloir supprimer?")) {

        $.ajax({
            type: "POST",
            url: "traitement.php?action=delete",
            data: {id},
            dataType: "json",
            success: function (response) {
                $("#reponse")
                    .hide()
                    .html("<span>Client supprimé avec succès !<button id='close'><i class='fa-solid fa-xmark'></i></button></span>")
                    .fadeIn(1000);
                $('#clients').load("display.php");
            }, error: function() {
                $("#reponse")
                    .html("<span>Une erreur s'est produite. Veuillez réessayer <button id='close'><i class='fa-solid fa-xmark'></i></button></span>");
            }
         
        });
    }
};


function updateClient() {
    var nom = $("#nom").val();
    var prenom = $("#prenom").val();
    var email = $("#email").val();
    var id = $("#id").val();

        $.ajax({
            type: "POST",
            url: "traitement.php?action=update",
            data: {id, nom, prenom, email},
            dataType: "json",
            success: function (response) {
                $("#reponse")
                    .hide()
                    .html("<span class='succes'>Client modifié avec succès !<button id='close'><i class='fa-solid fa-xmark'></i></button></span>")
                    .fadeIn(1000);
                $('#form').load('formAdd.html');
                $('#clients').load("display.php");
            }, error: function() {
                $("#reponse")
                    .html("<span class='error'>Une erreur s'est produite. Veuillez réessayer<button id='close'><i class='fa-solid fa-xmark'></i></button></span>");
            }
        });
};

function removeSpan() {
    $('#reponse').remove('span');
}