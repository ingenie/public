const $ = window.jQuery;
const $window = window.$window || $(window);

const BackToTop = {

  init() {
    // Scroll pages to top for usability
    $(document).ready(function () {

      //Check to see if the window is top if not then display button
      $(window).scroll(function () {

        // Show button after 100px
        var showAfter = 600;
        if ($(this).scrollTop() > showAfter) {
          $('.back-to-top').fadeIn();
        } else {
          $('.back-to-top').fadeOut();
        }
      });

      //Click event to scroll to top
      $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
      });

    });

  }

};

export default BackToTop;