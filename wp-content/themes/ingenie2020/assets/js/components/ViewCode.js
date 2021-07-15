const $ = window.jQuery;
const $window = window.$window || $(window);

const ViewCode = {

  init() {
    $(".show-source").bind("click", function () {
      $('.snippets').toggleClass("hidden");
      $('#toggle').text($('#toggle').text() == 'View Code' ? 'Hide Code' : 'View Code');
    });
  }

};

export default ViewCode;