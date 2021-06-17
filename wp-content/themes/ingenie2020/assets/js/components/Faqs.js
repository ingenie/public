const $ = window.jQuery;
const $window = window.$window || $(window);

const Faqs = {

  init() {
    var filterBtns = $('button.filter');
    var allFaqs = $('#faqs > ul');
    var allFaqsHeaders = $('#faqs > ul .heading-3');
    var resultsOrClear = $('.results');
    var searchInput = $('#search').find('input[type=text]');
    var closePanes = $('.accordian');
    var context = $('.list-items');

    $(filterBtns).click(function (e) {
      e.stopPropagation();
      e.preventDefault();
      var b = $(this).data("id");
      $(allFaqs).show();
      $(closePanes).removeClass('active');
      $(allFaqs).not("ul." + b).hide();

      // alert($(this).data("id"));

      // $(this).next().slideToggle(400);
    });

    // $('html').click(function () {
    //   subMenu.slideUp(300);
    // });

    $("#txtSearch").on('keyup', function () {
      $(allFaqs).show();
      $(allFaqsHeaders).hide();
      $(resultsOrClear).show();
      var search = $(this).val().toLowerCase();
      //Go through each list item and hide if not match search

      $(".list-items").each(function () {
        if ($(this).html().toLowerCase().indexOf(search) != -1) {
          $(this).show();
          // $(this).show(function () {
          //   $(this).parent().children('h2').show();
          // })

          // Remove previous marked elements and mark
          // the new keyword inside the context

        }
        else {
          $(this).hide();
          // $(this).hide(function () {
          //   if ($(this).parent().children('li').css('display') == 'none') {
          //     $(this).parent().children('h2').hide();
          //   }
          // });
        }
      });


      // TODO: to use or not to use 
      // $("#highlight").click(function (e) {
      //   e.preventDefault();
      //   $(context).unmark({
      //     done: function () {
      //       $(context).mark(search);
      //     }
      //   });
      // });


    });


    var e = jQuery.Event("keyup");
    e.keyCode == 8; // # Some key code value

    $("#clearSearch").click(function () {
      $(searchInput).val('').trigger(e);
      $(allFaqsHeaders).show();
      // $(accordianPane).hide(); Do we need to shut up after clear??
      $(closePanes).removeClass('active');
      return false;
    });






  }
};

export default Faqs;