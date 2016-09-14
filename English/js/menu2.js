//Js Menu 
$(document).ready(function() {
    $('#pagina').fullpage({
        menu: '.nav',
        anchors: ['h-1', 'h-2', 'h-3', 'h-4'],
        sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C', '#FFCC08'],
        autoScrolling: false
    });
});