const $ = window.jQuery;
const $window = window.$window || $(window);

const ViewCode = {

  init() {
    $(".show-source").bind("click", function () {
      $('.snippets').toggleClass("hidden");
    });
  }

};

export default ViewCode;