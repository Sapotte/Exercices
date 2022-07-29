$(document).ready(function () {
    $("#add").click(addClient);
    $(".update").click(updateClient);
    $(".delete").click(deleteClient);
    $('#updateDB').click(updateDB);
    $('.close').click(closeReponse);
    $('#cancel').click(reset);
});


function addClient() {
    var nom = $("#nom").val();
    var prenom = $("#prenom").val();
    var email = $("#email").val();

    $.ajax({
        type: "POST",
        url: "traitement.php",
        data: {nom , prenom, email, action: 'add'},
        dataType: "json",
        success: function (response) {
            succes('Client ajouté');
            $('input').val('');
            $('#clients').append("<tr><td class='nomClient'>"+nom+"</td><td class='prenomClient'>"+prenom+"</td><td class='mailClient'>"+email+"</td><td><button type='button' class='update' value='"+id+"'><i class='fa-solid fa-pen'></i></button></td><td><button type='button' class='delete' value='"+id+"'><i class='fa-solid fa-trash-can'></i></button></td>")
        }, error: function() {
            error();
        }
    });
}      

var nomCel;
var prenomCel;
var emailCel;
   
function updateClient() {
    var id = $(this).val();

    nomCel = $(this).parent().siblings('td.nomClient');
    prenomCel = $(this).parent().siblings('td.prenomClient');
    emailCel = $(this).parent().siblings('td.mailClient');

    var nom = nomCel.text();
    var prenom = prenomCel.text();
    var email = emailCel.text();

    $('#id').val(id);
    $('#nom').val(nom);
    $('#prenom').val(prenom);
    $('#email').val(email);
    $('#updateDB').fadeIn();
    $('#cancel').fadeIn();
    $('#add').fadeOut();
}

function updateDB() {

    var id = $("#id").val();
    var nom = $("#nom").val();
    var prenom = $("#prenom").val();
    var email = $("#email").val();

    console.log(nom);
    console.log(id);

    $.ajax({
        type: "POST",
        url: "traitement.php",
        data: {id, nom , prenom, email, action : 'updateDB'},
        dataType: "json",
        success: function (data) {
            console.log(data);
            nomCel.text(nom);
            prenomCel.text(prenom);
            emailCel.text(email);
            succes('Client modifié');
            reset();
        }, error: function() {
            error();
        }
    });
}

function deleteClient() {
    var id = $(this).val();
    var cel = $(this).parent();
    var ligne = cel.parent();

    console.log(id);

    var text = 'Etes-vous sûr(e) de vouloir supprimer le client?';

    if(confirm(text)) {
        $.ajax({
            type : "POST",
            url: "traitement.php",
            data: {id, action:'delete'},
            success: function (response) {
                succes('Client supprimé');
                ligne.remove();
            }, error: function() {
                error();
            }
        });
    }
}

function succes(texte) {
    $("span.succes").text(texte);
    $('#succes').fadeIn(1000);
}


function error() {
    $('#error').fadeIn(1000);
}

function closeReponse() {
    $("#error, #succes").fadeOut(1000);
}

function reset() {
    $('input').val('');
    $('#cancel').fadeOut();
    $('#updateDB').fadeOut();
    $('#add').fadeIn();
}