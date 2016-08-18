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
    
    $(window).scroll(function(){
        
        var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();
        
        if( $(this).scrollBottom() > 500 ){
            $('.social').slideDown(500);
        }else{
            $('.social').slideUp(500);
        }
        
    });
});