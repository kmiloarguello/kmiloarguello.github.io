// Loading page
/*$(window).load(function() {
     $('#loading').hide();
  });*/

function onReady(callback) {
    var intervalID = window.setInterval(checkReady, 20000);
    
    $('.count').each(function () {
        $(this).prop('Counter',0).animate({
        Counter: $(this).text()
        }, {
        duration: 20000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

    function checkReady() {
        if (document.getElementsByTagName('body')[0] !== undefined) {
            window.clearInterval(intervalID);
            callback.call(this);
        }
    }
}

function show(id, value) {
    document.getElementById(id).style.display = value ? 'block' : 'none';
}

onReady(function () {
    show('pagina', true);
    show('loading', false);
});