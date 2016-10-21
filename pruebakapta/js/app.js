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
        
    
    $(".l1").click(function() {
    $('html,body').animate({
        scrollTop: $(".sec1").offset().top},
        'slow');
    });
    
    $(".l2").click(function() {
    $('html,body').animate({
        scrollTop: $(".sec2").offset().top},
        'slow');
    });
    
    $(".l3").click(function() {
    $('html,body').animate({
        scrollTop: $(".sec3").offset().top},
        'slow');
    });
    
    $(".l4").click(function() {
    $('html,body').animate({
        scrollTop: $("footer").offset().top},
        'slow');
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