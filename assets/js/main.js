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
            autoplaySpeed: 5000,
            fade: true,
            cssEase: 'linear'
          });
      }
  }

  new SlickSlider();
})(jQuery)
