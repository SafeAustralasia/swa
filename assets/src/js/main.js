import './gsap';
import './slider';
import './editor';

import '../sass/main.scss';

// images
//import '../img/exercise.jpg';


// resize strip-bg to grow with absolutely positioned panel container
(function($) {
    $(window).bind("load resize",function(e){
        var containerHeight = $(".panel-container").height();
        $(".strip-bg").css("height", containerHeight + "px");
    });
})(jQuery)

// $(window).scroll(function(){
//     if ($(this).scrollTop() > 150) {
//        $('#dynamic').addClass('newClass');
//     } else {
//        $('#dynamic').removeClass('newClass');
//     }
// });