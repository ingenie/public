const $ = window.jQuery;
const $window = window.$window || $(window);

const MainMenu = {

  init() {
    // Controls the main nested menu behaviour
    var primaryLink = $('.navbar-main ul li a');
    var subMenu = $('.navbar-main ul li ul.sub-menu');

    $(primaryLink).click(function (e) {
      e.stopPropagation();
      $(primaryLink).not(this).each(function () {
        $(this).next().slideUp(300);
      });
      $(this).next().slideToggle(300);

    });

    $('html').click(function () {
      subMenu.slideUp(300);
    });

  }

};

export default MainMenu;