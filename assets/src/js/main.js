import './gsap';
import './slider';

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
 