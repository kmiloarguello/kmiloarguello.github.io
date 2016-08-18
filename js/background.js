// BG image
$(document).ready(function(){
    
    $(window).scroll(function(){
        var barra = $(window).scrollTop();
        var posicion = barra * 0.30;
        
        $('#sec3').css({
            'background-position' : '0 -' + posicion + 'px'
        });
    });
    
});