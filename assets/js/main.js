// Call slick slider
(function($) {
  class SlickSlider {

      constructor() {
          this.initiateSlider();
      }
      
      // slick slider settings
      initiateSlider() {
          $('.front-page-slider').slick({
            autoplay: true,
            autoplaySpeed: 2000
          });
      }
  }

  new SlickSlider();
})(jQuery)
