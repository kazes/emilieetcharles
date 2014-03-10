/*------------------------------------------------------------------------------
    project:    Emilie & Charles
    created:    2014-02-09
    author:     florian.boudot@gmail.com
----------------------------------------------------------------------------- */


/* CONSTANTS */
var d = document;
var w = window;
$w = $(w);
pm = {};


var debug = /localhost|flobou/.test(d.location.href);// 'true' in dev mode;


/*  =WINDOW.ONLOAD
----------------------------------------------------------------------------- */
$(d).ready(function(){



    pm.headerActive();
    pm.scrollTo();


});



/**
 * HEADER ACTIVE
 * >> adds a border bottom when you scroll down
 */
pm.headerActive = function() {
    if (debug)console.info('pm.headerActive');
    var $header = $('#header');

    $w.on('scroll', function(){
        var scroll_val = $w.scrollTop();
        $header[scroll_val > 30 ? 'addClass' : 'removeClass']('active');
    });
};


pm.scrollTo = function () {
    if (debug)console.info('pm.scrollTo');

    var $buttons = $('.JS_scroll-to');
    var $page = $('html, body');

    $buttons.on('click', function(e){
        e.preventDefault();
        var $destination = $($(this).attr('href'));

        $page.animate({
            scrollTop:$destination.offset().top - 109
        }, {
            duration:1000,
            easing:'easeInOutQuart', // http://easings.net/
            complete:function(){ }
        })
    });
};








