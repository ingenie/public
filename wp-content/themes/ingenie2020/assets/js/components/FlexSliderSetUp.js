const $ = window.jQuery;
const $window = window.$window || $(window);

const FlexSliderSetUp = {

  init() {

    $(window).load(function () {
      $('#slider .flexslider').flexslider({
        animation: 'slide',
        slideshowSpeed: 9000,
        animationSpeed: 900,
        pauseOnAction: true,
        pauseOnHover: true,
        controlNav: true,
        directionNav: true,
        controlsContainer: ".flexslider",
      });
    });

  }

};

export default FlexSliderSetUp;