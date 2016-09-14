// JS
$(document).ready(function(){
    
    $('.ir-arriba').click(function(){
        $('body,html').animate({
            scrollTop: '0px'
        },500);
    });
    
    $(window).scroll(function(){
        
        if( $(this).scrollTop() > 0 ){
            $('.ir-arriba').slideDown(500);
        }else{
            $('.ir-arriba').slideUp(500);
        }
        
    });
    
    $.fn.scrollBottom = function() { 
        return $(document).height() - this.scrollTop() - this.height(); 
    };
    
    
    // $(window).scroll(function(){
        
    //     var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();
    //     while(matchMedia('only screen and (min-width: 769px)').matches){
    //         if( $(this).scrollBottom() > 500 ){
    //             $('.social').slideDown(500);
    //         }else{
    //             $('.social').slideUp(500);
    //         }
    //     }
        
        
    // });
    
    $(".link1").click(function() {
    $('html,body').animate({
        scrollTop: $(".sec1").offset().top},
        'slow');
    });
    
    $(".link2").click(function() {
    $('html,body').animate({
        scrollTop: $(".sec2").offset().top},
        'slow');
    });
    
    $(".link3").click(function() {
    $('html,body').animate({
        scrollTop: $(".sec3").offset().top},
        'slow');
    });
    
    $(".link4").click(function() {
    $('html,body').animate({
        scrollTop: $(".sec4").offset().top},
        'slow');
    });
    
    //PARALLAX
    
    $(window).scroll(function(){
        var barra = $(window).scrollTop();
        var posicion = barra * 0.30;
        
        $('#sec3').css({
            'background-position' : '0 -' + posicion + 'px'
        });
    });
    
    //SOCIAL
    
    var contador = 1;

    $('.menu_bar').click(function(){
        if(contador == 1){
            $('nav').animate({
                left: '0'
            });
            contador = 0;
        }else{
            contador = 1;
            $('nav').animate({
                left: '-100%'
        });
        
        contador = 1;
        }
    });
    
    //HEADER
    
    $(window).scroll(function(){ 
        if( $(this).scrollTop() > 0){
            $('header').addClass('header2');
            
        }
        else{
            $('header').removeClass('header2');
        }
    });
    
    
   
});