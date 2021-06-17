const $ = window.jQuery;
const $window = window.$window || $(window);

const DeviceCheck = {

  init() {
    // Scroll pages to top for usability
    $(document).ready(function () {


      window.addEventListener('touchstart', function onFirstTouch() {
        // we could use a class
        document.body.classList.add('touched');

        // or set some global variable
        // window.USER_IS_TOUCHING = true;
        alert('touching screen');

        // or set your app's state however you normally would
        // myFrameworkOfChoice.dispatchEvent('USER_IS_TOUCHING', true);

        // we only need to know once that a human touched the screen, so we can stop listening now
        window.removeEventListener('touchstart', onFirstTouch, false);
      }, false);

    });

  }

};

export default DeviceCheck;