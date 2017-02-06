'use strict';
// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

window.onload = init;

var product;
function init(){

    product = $('.product1').ThreeSixty({
        totalFrames: 72, // Total no. of image you have for 360 slider
        endFrame: 72, // end frame for the auto spin animation
        currentFrame: 1, // This the start frame for auto spin
        imgList: '.threesixty_images', // selector for image list
        progress: '.spinner', // selector to show the loading progress
        imagePath:'/img/spin-tv/', // path of the image assets
        filePrefix: '', // file prefix if any
        ext: '-min.jpg', // extention for the assets
        // height: 265,
        // width: 400,
        navigation: false,
        disableSpin: true, // Default false
        responsive: true
    });

}
