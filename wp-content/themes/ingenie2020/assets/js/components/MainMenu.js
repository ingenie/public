const $ = window.jQuery;
const $window = window.$window || $(window);

const MainMenu = {

  init() {

    // TODO: remove if unused
    // Controls the main nested menu behaviour
    // var primaryLink = $('.navbar-main ul li a[href*="driver-insurance"]');
    // var subMenu = $('.navbar-main ul li ul.sub-menu');

    // $(primaryLink).click(function (e) {
    //   e.stopPropagation();
    //   e.preventDefault();
    //   $(primaryLink).not(this).each(function () {
    //     $(this).next().hide();
    //   });
    //   $(this).next().slideToggle(400);
    // });

    // $('html').click(function () {
    //   subMenu.slideUp(300);
    // });

  }

};

export default MainMenu;