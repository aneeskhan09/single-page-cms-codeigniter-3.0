/*
 * Title:   Miracle | Responsive Multi-Purpose HTML5 Template - Homepage Revolution Slider
 * Author:  http://themeforest.net/user/soaptheme
 */

"use strict";

sjq(document).ready(function($) {
    $('.revolution-slider').show().revolution(
    {
        dottedOverlay:"none",
        delay:9000,
        startwidth:1170,
        startheight:1199,
        hideThumbs:200,
        
        thumbWidth:100,
        thumbHeight:50,
        thumbAmount:1,
        
        navigationType:"none",
        navigationArrows:"solo",
        navigationStyle:"round",
        
        touchenabled:"on",
        onHoverStop:"on",

        shadow:0,
        fullWidth:"on",
        forceFullWidth: "on",
        fullScreen:"on",
        fullScreenOffsetContainer: "#header .header-top-nav .visible-mobile",
        fullScreenOffset:"0",

        spinner:"spinner2",
        
    }).parent().css("height", "auto");

    function initRevolutionSliderOptions() {
        var width = $(window).width();
        $(".forcefullwidth_wrapper_tp_banner").css("max-height", width - 30 + "px");
    }
    initRevolutionSliderOptions();

    $(window).resize(function() {
        initRevolutionSliderOptions();
    });
});