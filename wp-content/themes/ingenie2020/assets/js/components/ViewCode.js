const $ = window.jQuery;
const $window = window.$window || $(window);

const ViewCode = {

  init() {
    $(".show-source").bind("click", function () {
      $('.snippets').toggleClass("hidden");
      $('#toggle').text($('#toggle').text() == 'Show Code' ? 'Hide Code' : 'Show Code');
    });
  }

};

export default ViewCode;