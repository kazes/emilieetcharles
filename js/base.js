/*------------------------------------------------------------------------------
    JS Document (https://developer.mozilla.org/en/JavaScript)

    project:    Emilie & Charles
    created:    2014-02-09
    author:     florian.boudot@gmail.com
    
----------------------------------------------------------------------------- */


/* CONSTANTS */
var d = document;
var w = window;
pm = {};

var debug = /localhost|flobou/.test(d.location.href);// 'true' in dev mode;

/*  =UTILITIES */
var log = function(x) {
    if (typeof console != 'undefined' && debug) {
        console.log(x);
    }
};


/*  =WINDOW.ONLOAD
----------------------------------------------------------------------------- */
$(d).ready(function(){

    // call functions
    pm.example();                 // just an example


});


/*  =EXAMPLE
----------------------------------------------------------------------------- */
pm.example = function() {
    log('example function');
    
};











