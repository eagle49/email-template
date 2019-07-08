(function ($) {
	"use strict";

    jQuery(document).ready(function($){
    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
            $('html, body').animate({
            scrollTop: (target.offset().top - 56)
            }, 1000, "easeInOutExpo");
            return false;
        }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function() {
        $('.navbar-collapse').collapse('hide');
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
        target: '#mainNav',
        offset: 56
    });


    

    });

    // $(window).scroll(function() {
    //     if ($(this).scrollTop() > 600) {
    //         $('.scroll-top').fadeIn();
    //     } else {
    //         $('.scroll-top').fadeOut();
    //     }
    // });
    // $('.scroll-top ').click(function() {
    //     $("html, body").animate({
    //         scrollTop: 0
    //     }, 600);
    //     return false;
    // });


}(jQuery));	
