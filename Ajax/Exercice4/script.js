$(document).ready(function(){
            $.ajax({
                dataType: "json",
                url: "pays.json",
                success: function(response) {
                    $.each(response.listePays, function() { 
                       $("<option>").attr('value', this.nom_pays_fr).text(this.nom_pays_fr).appendTo('#listPays');
                    });
                }
            });
        });
