/* MAIN JS */

$(document).ready(function(){
  var altura = $('.fijo_menu').offset().top;

  
  $(window).on('scroll', function(){
      if( $(window).scrollTop() > altura){
          $('.fijo_menu').addClass('menu-fixed');
      } else {
        $('.fijo_menu').removeClass('menu-fixed');
      }
  
  });
  
  
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
});
