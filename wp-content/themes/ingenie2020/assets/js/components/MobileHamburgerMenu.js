const $ = window.jQuery;
const $window = window.$window || $(window);

const MobileHamburgerMenu = {

  init() {

    var mobileNav = $('.navburger-main');
    var navToggle = $('#menuToggle');
    var cssWidth = $(mobileNav).css('width');
    var bkgScroll = $('body');

    var isOpen = 0;
    var menuWidthInverse = '-' + cssWidth;

    $('html').click(function () {
      if (isOpen == 1) {
        $(mobileNav).animate({ 'left': menuWidthInverse }, 300);
        navToggle.removeClass('open');
        isOpen--;
        subMenu.hide();
        bkgScroll.removeClass('no-scroll');
      }
      return;
    });

    $(navToggle).click(function (e) {
      e.stopPropagation();

      if (isOpen == 0) {
        $(mobileNav).animate({ 'left': 0 }, 300);
        navToggle.addClass('open');
        isOpen++;
        bkgScroll.addClass('no-scroll');
      } else {
        $(mobileNav).animate({ 'left': menuWidthInverse }, 300);
        navToggle.removeClass('open');
        isOpen--;
        subMenu.hide();
        bkgScroll.removeClass('no-scroll');
      }
    });

    // Controls the nested menu behaviour
    // var primaryLink = $('.navbar-main ul li a[href^="#"]');
    var primaryLink = $('.navburger-main ul li a');
    var subMenu = $('.navburger-main ul li ul.sub-menu');

    $(primaryLink).click(function (e) {
      e.stopPropagation();
      $(primaryLink).not(this).each(function () {
        $(this).next().slideUp(300);
      });
      $(this).next().slideToggle(300);
    });

    //window resize
    // var $windowWidth = $(window).width();
    // console.log('window width on load >>>>', $windowWidth);

    //   $(window).resize(function() {
    //     if($(window).width() <= 599) {
    //        $(mobileNav).css({
    //          "width": "80%",
    //          "min-width": "250"

    //        });
    //     } else if($(window).width() >= 600) {
    //       $(mobileNav).css(
    //         "width", "250");
    //     }
    // });

  }

};

export default MobileHamburgerMenu;