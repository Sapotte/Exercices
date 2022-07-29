var datas = {};
$.getJSON('js/slider.json', init);

$(window).resize(function(){
    largeur();
});


function init(obj){
    datas = obj;
    createSlider();
    placeCommandes();
    afterAnim();
    var delai = setInterval(animSlide, datas.prefs.duree, 1);
    if(datas.prefs.pause) {
        $("#slideshow").hover(function(){
            clearInterval(delai);
        }, function(){
            delai = setInterval(animSlide, datas.prefs.duree, 1);
        });
    }
}

function largeur() {
    $("#slideshow").css("max-width", datas.prefs.size.w+"px");
    var largeur = $("#slideshow").width();
    var lgSlides = datas.prefs.size.w*datas.imgs.length;
    $("#slides").css("width", lgSlides+"px");
    var item =$("#slideshow .item");
    item.css("max-width", largeur);
}

function createSlider() {
    var chemin = datas.prefs.dossier;
    var slideshow = $("#slideshow");
    var slides = $('<div>');
    slides.attr('id' , 'slides');
    slideshow.append(slides);

    $.each(datas.imgs, function(index,val) {
        var item = $('<div>');
        item.addClass('item');
        item.attr('data-ref', index);
        slides.append(item);
        var image = $('<img>');
        image.attr('src', chemin+"/"+val.file);
        image.attr('alt', val.text);
        item.append(image);
        var parag = $('<p>');
        parag.text(val.text);
        parag.addClass(val.style);
        parag.hide();
        item.append(parag);
        if(val.btn.label != "") {
            var bouton = $('<button>');
            bouton.text(val.btn.label);
            bouton.click(function() {
                window.open(val.btn.lien, '_blank');
            });
            bouton.hide();
            item.append(bouton);
        }
    });
    largeur();   
}    
    


function placeCommandes() {
    var slideshow = $("#slideshow");
    var fleches = [['droite', 1], ['gauche', -1]];
    $.each(fleches, function(index, val){
        var fleche = $("<div>");
        fleche.addClass("fleches");
        fleche.addClass(val[0]);
        slideshow.append(fleche);
        fleche.click(function(){
            animSlide(val[1]);
        });
    });
    if(datas.prefs.commandes) {
        var puces = $("<div>");
        puces.attr('id', 'puces');
        slideshow.append(puces);
        var chemin = datas.prefs.dossier;
        $.each(datas.imgs, function(index, val){
            var puce;
            if(datas.prefs.vignettes){
                puce = $('<img>');
                puce.addClass('vignette');
                puce.attr('src', chemin + '/' +val.file);
            } else {
                puce = $('<div>');
                puce.addClass('puce');
            }
            puce.attr('data-ref', index);
            puces.append(puce);       
            puce.click(function(){
                var indexEnCours = $("#slides .item").first().data('ref');
                var indexClique = $(this).data('ref');
                var decalage = indexClique - indexEnCours ;
                animSlide(decalage);
            })
        })
    }
}

function animSlide(arg){
    var largeur = $("#slideshow").width();
    $("#slides .item").find('p,button').hide();
    if(arg>0){
        $("#slides").animate(
            {"margin-left":-(arg*largeur)},
            datas.prefs.tIMG,
            function(){
                var items = $('#slides .item');
                var itemsAjoute = items.slice(0,arg);
                $("#slides").append(itemsAjoute);
                $("#slides").css("margin-left", "0");
                afterAnim();
            }
        );
    } else if(arg<0){
        var derniersItems = $("#slides .item").slice(arg);
        $("#slides").prepend(derniersItems);
        $("#slides").css("margin-left", (arg*largeur)+"px");
        $("#slides").animate(
            {"margin-left":0},
             datas.prefs.tIMG,
             afterAnim
        );
    }
}

function afterAnim(){
    $("#slides .item").first().find('p, button').fadeIn(datas.prefs.tTXT);
}