var datas = {};

$.getJSON('js/galerie.json', init);

function init(obj){
    datas = obj;
    createGalerie();
}

function createGalerie(){
    var thumb = $('<div>');
    thumb.attr("id", "thumbnails");
    var largImg = $('<div>');
    largImg.attr("id", "largeImg");
    $("#galerie").append(thumb);
    $("#galerie").append(largImg);
    
    $.each(datas, function(index, val) {
    var image = $('<img>');
    image.attr('src', 'images/'+ val.file);
    image.attr('data-index', index);
    image.click(clickThumbnail);
    thumb.append(image);
    });

    var imgDef = $('<img>');
    imgDef.attr('id', 'image');
    imgDef.attr('src', 'images/'+datas[0].file);
    largImg.append(imgDef);

    var legend = $('<p>');
    legend.attr('id', 'legend');
    var txtDef = datas[0].text;
    if(txtDef!=undefined){
        legend.text(txtDef);
    }
    legend.hide();
    largImg.append(legend);

    largImg.hover(afficheTexte, masqueTexte);

}

function afficheTexte() {
        $("#legend").fadeIn("slow");
    }

function masqueTexte() {
    $("#legend").fadeOut("slow");
}

function clickThumbnail() {
    var index = $(this).data("index");
    $("#image").hide();
    $("#image").attr("src", "images/" + datas[index].file);
    var title = datas[index].file;
    title = title.split(".");
    title = title[0];
    $("#image").attr('title', title);
    if(datas[index].text != undefined){
        $("#image").attr("alt", datas[index].text);
        $("#legend").text(datas[index].text);
    }
    $("#image").fadeIn(1000);
}