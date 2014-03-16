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


var HEADER_HEIGHT = 109;

/*  =WINDOW.ONLOAD
----------------------------------------------------------------------------- */
$(d).ready(function () {
    pm.headerActive();
    pm.scrollTo();
});


/**
 * HEADER ACTIVE
 * >> adds a border bottom when you scroll down
 */
pm.headerActive = function() {
    if (debug)console.info('pm.headerActive');

    // get all top values for all layers
    var layers_tops = [];
    var layers_names = [];
    var getLayersInfos = function () {
        var $layer = $(this);
        var layer_name = $layer.attr('id');
        var layer_top = $layer.offset().top;

        layers_tops.push(layer_top);
        layers_names.push(layer_name);
    };
    $('.layer').each(getLayersInfos);



    var $bt_scroll_prev = $('#bt-prev-layer');
    var $bt_scroll_next = $('#bt-next-layer');
    var $body = $('body');
    var $nav = $('#nav');
    var $nav_items = $nav.find('a');

    var setAnchorsToScrollbuttons = function (current_win_top) {
        if (debug)console.info('setAnchorsToScrollbuttons');

        var is_page_top = current_win_top === 0;
        var is_page_bottom = current_win_top + $w.height() === $body.height() ;

        var next_layer = layers_names[1];
        var visible_layer = layers_names[0];
        var prev_layer = layers_names[layers_names.length - 2];


        if(!is_page_bottom && !is_page_top) {
            for (var i = 0, len = layers_tops.length; i < len; i++) {
                var next_layer_top = layers_tops[i+1] || layers_tops[len-1];

                if (current_win_top + HEADER_HEIGHT + 100 < next_layer_top){
                    next_layer = layers_names[i+1] || layers_names[len-1];
                    visible_layer = layers_names[is_page_bottom ? len-1 : i];
                    prev_layer = layers_names[i-1] || layers_names[0];

                    break;
                }
            }
        }


        // set anchors on scroll buttons
        $bt_scroll_prev.attr('href', is_page_top ? '' : '#' + prev_layer);
        $bt_scroll_next.attr('href', is_page_bottom ? '' : '#' + next_layer);

        // mark menu item as active

        $nav_items.removeClass('active');
        $nav.find('a[href="#'+visible_layer+'"]').first().addClass('active');
    };

    var SCROLL_TIMER = 100; // ms
    var SCROLL_TIMEOUT = null;
    var $header = $('#header');
    var setItemsActive = function () {
        clearTimeout(SCROLL_TIMEOUT);
        SCROLL_TIMEOUT = setTimeout(function () {
            var scroll_val = $w.scrollTop();

            // add/remove border bottom to the header
            $header[scroll_val > 30 ? 'addClass' : 'removeClass']('active');

            // set anchors to scroll buttons
            setAnchorsToScrollbuttons(scroll_val);
        }, SCROLL_TIMER);
    };
    $w.on('scroll', setItemsActive);

    // init
    setItemsActive();
};


pm.scrollTo = function () {
    if (debug)console.info('pm.scrollTo');

    var $buttons = $('.JS_scroll-to');
    var $page = $('html, body');


    var scrollToLayer = function (e) {
        e.preventDefault();
        var destination = $(this).attr('href');
        if (destination) {
            var $destination = $(destination);
            $page.animate({
                scrollTop: $destination.offset().top - HEADER_HEIGHT
            }, {
                duration: 1000,
                easing: 'easeInOutQuart' // http://easings.net/
            });
        }
    };



    $buttons.on('click', scrollToLayer);
};








