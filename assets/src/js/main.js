import './gsap';
import './slider';
import './editor';

import '../sass/main.scss';



(function($) {

    // resize nav container width to shrink with a margin left and right on resize
    var navContainer = $(".main-nav");
    var maxWidth = 1264;
    var gutterWidth = 24;

    $(window).bind("load resize scroll",function(e){
        // resize strip-bg to grow with absolutely positioned panel container
        var containerHeight = $(".panel-container").height();
        var sliderContainerWidth = $(".slider-container").width();

        $(".strip-bg").css("height", containerHeight + "px");

                

        /**
         * if scroll top > 80
         *  set nav width = 100%
         * else if screen size > max width && scroll top < 80
         *  set nav width = sliderContainer width
         */

        if($(this).scrollTop() > 10) {
            navContainer.css("width", 100 + "%");
            $('#main-nav').addClass('main-nav-top-margin-removed');
            $('#main-nav').removeClass('main-nav-top-margin');
        } else if($(this).scrollTop() < 10) {
            navContainer.css("width", (sliderContainerWidth - gutterWidth) + "px");
            $('#main-nav').removeClass('main-nav-top-margin-removed');
            $('#main-nav').addClass('main-nav-top-margin');
        }

        // if(sliderContainerWidth < maxWidth) {
        //     $(".main-nav").css("width", (sliderContainerWidth - gutterWidth) + "px");
        // } else {
        //     navContainer.css("width", (maxWidth - gutterWidth) + "px");
        // }
        
        // $(this).bind("scroll",function(e){
        //     if ($(this).scrollTop() > 80) {
        //         navContainer.css("width", 100 + "%");
        //         $('#main-nav').addClass('main-nav-top-margin-removed');
        //         $('#main-nav').removeClass('main-nav-top-margin');
        //     } else {
        //         navContainer.css("width", (sliderContainerWidth - gutterWidth) + "px");
        //         $('#main-nav').addClass('main-nav-top-margin');
        //         $('#main-nav').removeClass('main-nav-top-margin-removed');
        //     }
        // });
        function x() {

        }
        

    });

    //$(window).scroll(function(){
                

    //});

})(jQuery)

