var particuleOne = document.getElementById("particles-js");
if(particuleOne){
    particlesJS.load('particles-js', 'assets/js/particlesjs-config.json', function() {
        //console.log('callback - particles.js config loaded');
    });
}


$(document).ready(function() {

    $('#nav-icon3').click(function(){
        $('.modal-menu').toggle();
        $(this).toggleClass('open');
        $(".text").text(function(i, text){
            return text === "Fermer" ? "Menu" : "Fermer";
        });
        if($('body').hasClass('modal-open')){
            $('body').removeClass('modal-open');
            if ($(window).width() > 1159) {
                $('body').css('padding', '0 20px');
            }
        }else{
            $("body").addClass("modal-open");
            if ($(window).width() < 1160) {
                $('body').css('padding', '0');
            }

        }
    });

    $(window).resize(function () {
        if ($(window).width() < 1159) {
            $('body').css('padding', '0');
        }else{
            $('body').css('padding', '0 20px');
        }
    });

    $('#radio-trigger-1').click(function (e) {
        e.preventDefault();
        $('.check-pack').removeClass('selected');
        $('.check-pack').attr("checked", "");
        $('#radio-trigger-1').addClass('selected');
        $('#radio-1').addClass('selected');
        $('#radio-1 input').attr("checked", "checked");
        $('.tooltiptext').css('display', 'none');
    });
    $('#radio-1').click(function (e) {
        e.preventDefault();
        $('.check-pack').removeClass('selected');
        $('.check-pack').attr("checked", "");
        $(this).addClass('selected');
        $('#radio-trigger-1').addClass('selected');
        $('#radio-1 input').attr("checked", "checked");
        $('.tooltiptext').css('display', 'none');
    });

    $('#radio-trigger-2').click(function (e) {
        e.preventDefault();
        $('.check-pack').removeClass('selected');
        $('.check-pack').attr("checked", "");
        $('#radio-trigger-2').addClass('selected');
        $('#radio-2').addClass('selected');
        $('#radio-2 input').attr("checked", "checked");
        $('.tooltiptext').css('display', 'none');
    });
    $('#radio-2').click(function (e) {
        e.preventDefault();
        $('.check-pack').removeClass('selected');
        $('.check-pack').attr("checked", "");
        $(this).addClass('selected');
        $('#radio-trigger-2').addClass('selected');
        $('#radio-2 input').attr("checked", "checked");
        $('.tooltiptext').css('display', 'none');
    });

    $('#radio-trigger-3').click(function (e) {
        e.preventDefault();
        $('.check-pack').removeClass('selected');
        $('.check-pack').attr("checked", "");
        $('#radio-trigger-3').addClass('selected');
        $('#radio-3').addClass('selected');
        $('#radio-3 input').attr("checked", "checked");
        $('.tooltiptext').css('display', 'none');
    });
    $('#radio-3').click(function (e) {
        e.preventDefault();
        $('.check-pack').removeClass('selected');
        $('.check-pack').attr("checked", "");
        $(this).addClass('selected');
        $('#radio-trigger-3').addClass('selected');
        $('#radio-3 input').attr("checked", "checked");
        $('.tooltiptext').css('display', 'none');
    });


    $('#radio-trigger-4').click(function (e) {
        e.preventDefault();
        $('.check-pack').removeClass('selected');
        $('.check-pack').attr("checked", "");
        $('#radio-trigger-4').addClass('selected');
        $('#radio-4').addClass('selected');
        $('#radio-4 input').attr("checked", "checked");
        $('.tooltiptext').css('display', 'none');
    });
    $('#radio-4').click(function (e) {
        e.preventDefault();
        $('.check-pack').removeClass('selected');
        $('.check-pack').attr("checked", "");
        $(this).addClass('selected');
        $('#radio-trigger-4').addClass('selected');
        $('#radio-4 input').attr("checked", "checked");
        $('.tooltiptext').css('display', 'none');
    });


    $('.barra-nivel').each(function() {
        var valorLargura = $(this).data('nivel');
        $(this).animate({
            width: valorLargura
        });
    });



    $('.arrows-next').on('click', function(){
        var article = $(this).closest('article').next();
        var articlenumber = $(this).closest('article').index();
        var firstone = $('article').first();
        //console.log(article.next());
        $('.popup').hide();
        article.find('.popup').toggle();
        if(articlenumber == 3){
            firstone.find('.popup').toggle();
        }

    });



    $('.arrows-prev').on('click', function(){
        var article = $(this).closest('article').prev();
        var articlenumber = $(this).closest('article').index();
        var lastone = $('article').last();
        //console.log(article.find('.popup').first());
        //console.log(article.next());
        $('.popup').hide();
        article.find('.popup').toggle();
        if(articlenumber == 0){
            lastone.find('.popup').toggle();
        }

    });



    ///////////////////////////////////////// POPUP
    $('.popup-trigger').click(function(e) {
        e.stopPropagation();
        $('.popup').hide();
        $(this).nextAll('.popup:first').toggle();
    });

    $('html').click(function() {
        $('.popup').hide();
    });

    $('.popup-btn-close').click(function(e){
        $('.popup').hide();
    });

    $('.popup').click(function(e){
        e.stopPropagation();
    });

    $("[data-js=open]").on("click", function() {
        popupOpenClose($(".popup"));
    });

    function popupOpenClose(popup) {
        /* Close popup if user clicks on background */
        $(popup).click(function(e) {
            if ( e.target == this ) {
                if ($(popup).is(':visible')) {
                    $(popup).hide();
                }
            }
        });
    }


    /////////////////////////////////////////// PICTO CHANGE MOBILE
    $(window).resize(function () {
        if ($(window).width() < 699) {
            $('.change-image').attr('src','assets/img/ship-only.svg');
        }else{
            $('.change-image').attr('src','assets/img/spaceX.svg');
        }
    });
    if ($(window).width() < 699) {
        $('.change-image').attr('src','assets/img/ship-only.svg');
    }else{
        $('.change-image').attr('src','assets/img/spaceX.svg');
    }

    /////////////////////////////////////////// CALENDAR
    $('[data-toggle="datepicker"]').datepicker({
        language: 'fr-FR'
    });


    /////////////////////////////////////////// CHECK RADIO
    $("#contact_form_btn").click(function() {
        if( !$('input[type="radio"]').is(":checked") ){
            $('.tooltiptext').css('display', 'block');
        }
    });

    // Music player Control
    var audio = $('audio').get(0);
    $('.sound').click(function(){
        if (audio.paused) {
            audio.play();
            $('.sound .music-off').hide();
            $('.sound .music-on').css('display', 'block')
        }
        else {
            audio.pause();
            $('.sound .music-on').hide();
            $('.sound .music-off').css('display', 'block')
        }
    });

    $(window).resize(function () {
        var audio = $('audio').get(0);
        if ($(window).width() < 1180) {
            audio.setAttribute('src', '');
        }
    });



});










