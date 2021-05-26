const $ = window.jQuery;
const $window = window.$window || $(window);

const Accordian = {

  init() {
    // ingenie simple accordian
    $(".accordian").bind("click", function () {

      var $this = $(this);
      // console.log('clicked', $this);

      $('.accordian').not($this).removeClass('active');
      $this.toggleClass("active");
      shiftup($this);
    });

    function shiftup(id) {
      $([document.documentElement, document.body]).animate(
        {
          scrollTop: $(id).offset().top - 100
        },
        400
      );
    }

  }

};

export default Accordian;