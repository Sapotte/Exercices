var datas = {};
var distanceImage;
var angleImg;
var angleEnCours = 0;

$.getJSON('js/carrousel.json', init);

$(window).resize(function(){
    placeImages();
});

function init(obj){
    datas=obj;
    createCarrousel();
    placeCommandes();
    if(datas.prefs.auto){
        delai = setInterval(rotation, datas.prefs.time, -1);
        if(datas.prefs.pausedOnHover){
            $("#circle").hover(function(){
                clearInterval(delai);
            }, function(){
                delai = setInterval(rotation, datas.prefs.time, -1);
            });
        }
    }
}

function createCarrousel(){
    var carrouselContainer = $('#carrouselContainer');
    var chemin = datas.prefs.dossier;
    var carrousel = $('<div>');
    carrousel.attr('id', 'carrousel');
    var circle = $('<div>');
    circle.attr('id', 'circle');
    carrousel.append(circle);
    carrouselContainer.append(carrousel);

    $.each(datas.imgs, function(index, val){
        var item = $('<div>');
        item.addClass('item');
        item.attr("data-index", index);
        var img = $('<img>');
        img.attr('src', chemin + "/" + val.file);
        var span = $('<span>');
        span.text(val.text);
        item.append(span);
        item.append(img);
        item.click(clickImg);
        circle.append(item);
    });
    placeImages();
}

function placeCommandes(){
    var carrouselContainer = $('#carrouselContainer');
    $.each([['droite', 1],['gauche',-1]], function(index, val){
        var fleche = $('<div>');
        fleche.addClass('fleches');
        fleche.addClass(val[0]);
        fleche.click(function(){
            rotation(val[1]);
        });
        carrouselContainer.append(fleche);
    })
}

function placeImages(){
    var nbrImages = datas.imgs.length;
    angleImg = 360 / nbrImages;
    var largeurImage = $("#carrousel").width();
    distanceImage = ((largeurImage/2)/Math.tan(Math.PI/nbrImages)).toFixed(2);
    $("#circle").css("transform", "translateZ(-"+distanceImage+"px");
    $("#circle .item").each(function(index){
        $(this).css("transform", "rotateY("+index*angleImg+"deg) translateZ("+distanceImage+"px)");
    });
        
} 

function clickImg(){
    var top = parseInt($('img', this).css("top"));
    if(top !=0){
        $('img', this).css('top', '0');
    } else{
        $('img', '.item').css('top', '0');
        $('img', this).css('top','40px');
    }
}

function rotation(arg){
    angleEnCours += (angleImg*arg);
    $("#circle").css('transform', 'translateZ(-'+distanceImage+'px) rotateY('+angleEnCours+'deg)');
}