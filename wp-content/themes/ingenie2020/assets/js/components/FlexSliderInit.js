//
// Options and docs
// https://github.com/woocommerce/FlexSlider/wiki/FlexSlider-Properties
//

const $ = window.jQuery;
const $window = window.$window || $(window);

const FlexSliderSetUp = {

  init() {

    $(window).load(function () {
      $('#slider-ydg .flexslider').flexslider({
        animation: 'slide',
        slideshowSpeed: 9000,
        animationSpeed: 900,
        pauseOnAction: true,
        pauseOnHover: true,
        controlNav: true,
        directionNav: true,
        controlsContainer: ".flexslider",
      });

      $('#slider-quotes .flexslider').flexslider({
        initDelay: 3000,
        animation: 'slide',
        slideshowSpeed: 5000,
        animationSpeed: 750,
        easing: "swing",
        startAt: 0,
        pauseOnAction: true,
        pauseOnHover: true,
        controlNav: false,
        directionNav: true,
        controlsContainer: ".flexslider",
        itemWidth: 320,
        itemMargin: 10,
        minItems: 1,
        maxItems: 3,
        reverse: false,
        animationLoop: true,
      });

    });

  }

};

export default FlexSliderSetUp;