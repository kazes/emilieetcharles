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
var HEADER_HEIGHT = 109; // default

var is_mobile = /iPad|iPhone|iPod|Android/.test(navigator.userAgent);


/* WINDOW.ONLOAD */
$(d).ready(function () {
    if(!is_mobile){
        pm.headerManager();
        pm.scrollTo();
    }
    else {
        $('body').addClass('mobile');
    }
});


/**
 * HEADER MANAGER
 * >> adds a border bottom when you scroll down
 */
pm.headerManager = function() {
    if (debug)console.info('pm.headerManager');

    // init global variables
    var $header = $('#header');
    var $allLayers = $('.layer');
    var $body = $('body');
    var $page_content = $('.page-content');
    var $bt_scroll_prev = $('#bt-prev-layer');
    var $bt_scroll_next = $('#bt-next-layer');
    var $nav = $('#nav');
    var $nav_items = $nav.find('a');
    var layers_tops = [];
    var layers_names = [];
    var SCROLL_TIMER = 100; // ms
    var SCROLL_TIMEOUT = null;
    var RESIZE_TIMER = 200; // ms
    var RESIZE_TIMEOUT = null;


    /**
     * store all top values and names for all layers in arrays
     */
    var setLayersNamesAndTopValues = function () {
        var $layer = $(this);
        var layer_name = $layer.attr('id');
        var layer_top = $layer.offset().top;

        layers_tops.push(layer_top);
        layers_names.push(layer_name);
    };


    /**
     * set position values (on init and on resize)
     */
    var setPositionValues = function () {
        if (debug)console.info('updatePositionValues');

        // reset arrays
        layers_tops = [];
        layers_names = []; // todo : this array shouldn't be reset

        // and fill arrays
        $allLayers.each(setLayersNamesAndTopValues);
    };


    /**
     * Mark menu item as active
     * @param layer_in_zone {string}
     */
    var markMenuItemActive = function (layer_in_zone) {
        if (debug)console.info('markMenuItemActive');

        $nav_items.removeClass('active');
        $nav.find('a[href="#'+layer_in_zone+'"]').first().addClass('active');
    };


    /**
     * setAnchorsToScrollbuttons
     * @param current_win_top {number}
     */
    var setAnchorsToScrollbuttons = function (current_win_top) {
        if (debug)console.info('setAnchorsToScrollbuttons');

        var is_page_top = current_win_top === 0;
        var is_page_bottom = current_win_top + $w.height() === $body.height() ;
        var next_layer = layers_names[1];
        var visible_layer = layers_names[is_page_top ? 0 : layers_names.length - 1];
        var prev_layer = layers_names[layers_names.length - 2];

        if(!is_page_bottom && !is_page_top) {
            for (var i = 0, len = layers_tops.length; i < len; i++) {
                var next_layer_top = layers_tops[i+1] || layers_tops[len-1];

                if (current_win_top + HEADER_HEIGHT + 100 < next_layer_top){
                    next_layer = layers_names[i+1] || layers_names[len-1];
                    visible_layer = layers_names[is_page_bottom ? len-1 : i];
                    prev_layer = layers_names[i-1] || layers_names[0];
                    break; // and dance
                }
            }
        }

        // set #anchors on scroll buttons
        $bt_scroll_prev.attr('href', is_page_top ? '' : '#' + prev_layer);
        $bt_scroll_next.attr('href', is_page_bottom ? '' : '#' + next_layer);

        // and mark menu item as active
        markMenuItemActive(visible_layer);
    };


    /**
     * mark header as active (adds a border bottom)
     * @param scroll_top
     */
    var markHeaderActive = function (scroll_top) {
        if (debug)console.info('markHeaderActive');

        $header[scroll_top > 30 ? 'addClass' : 'removeClass']('active');
    };


    var setHeaderHeight = function () {
        if (debug)console.info('getHeaderHeight');
        HEADER_HEIGHT = $header.outerHeight();
        $page_content.css({ 'padding-top': HEADER_HEIGHT - 1 });

    };

    /**
     * the resize manager
     */
    var resizeManager = function () {
        clearTimeout(RESIZE_TIMEOUT);
        RESIZE_TIMEOUT = setTimeout(function () {
            if (debug)console.info('resizeManager');

            var top = $w.scrollTop();

            setAnchorsToScrollbuttons(top);
            setHeaderHeight();
            setPositionValues();
        }, RESIZE_TIMER);
    };


    /**
     * the scroll manager
     */
    var scrollManager = function () {
        clearTimeout(SCROLL_TIMEOUT);
        SCROLL_TIMEOUT = setTimeout(function () {
            if (debug)console.info('scrollManager');
            var top = $w.scrollTop();

            // add/remove border bottom to the header
            markHeaderActive(top);

            // set anchors to the scroll buttons
            setAnchorsToScrollbuttons(top);
        }, SCROLL_TIMER);
    };


    // binds
    $w.on('resize', resizeManager);
    $w.on('scroll', scrollManager);

    // init
    var win_top = $w.scrollTop();
    setHeaderHeight();
    setPositionValues();
    markHeaderActive(win_top);
    setAnchorsToScrollbuttons(win_top);
};


/**
 * pm.scrollTo()
 * On click scroll to destination layer
 */
pm.scrollTo = function () {
    if (debug)console.info('pm.scrollTo');
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

    // bind arrow top, arrow bottom and all menu buttons
    var $buttons = $('.JS_scroll-to');
    $buttons.on('click', scrollToLayer);
};








