import './gsap';
import './slider';

import '../sass/main.scss';

// images
//import '../img/exercise.jpg';
(function($) {
    $(window).resize(function() {
        var containerHeight = $(".panel-container").height();
        $(".home-strip").css("height", containerHeight + "px");
    });
})(jQuery)
