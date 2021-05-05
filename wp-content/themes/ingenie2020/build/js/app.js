/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_ExampleComponent1__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/ExampleComponent1 */ "./assets/js/components/ExampleComponent1.js");
/* harmony import */ var _components_MobileHamburgerMenu__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/MobileHamburgerMenu */ "./assets/js/components/MobileHamburgerMenu.js");
/* harmony import */ var _components_MainMenu__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/MainMenu */ "./assets/js/components/MainMenu.js");
/* harmony import */ var _components_jquery_flexslider_min__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/jquery.flexslider-min */ "./assets/js/components/jquery.flexslider-min.js");
/* harmony import */ var _components_jquery_flexslider_min__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_components_jquery_flexslider_min__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _components_FlexSliderInit__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./components/FlexSliderInit */ "./assets/js/components/FlexSliderInit.js");
/* harmony import */ var _components_ReplaceObfuscatedEmailAddresses__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./components/ReplaceObfuscatedEmailAddresses */ "./assets/js/components/ReplaceObfuscatedEmailAddresses.js");
/* harmony import */ var _components_AnimateOnPageLinks__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./components/AnimateOnPageLinks */ "./assets/js/components/AnimateOnPageLinks.js");
// you can import modules from the theme lib or even from
// NPM packages if they support it…




 // you can also require modules if they support it…

var ExampleModule2 = __webpack_require__(/*! ./components/example-2 */ "./assets/js/components/example-2.js"); // Some convenient tools to get you started…



 // Initialise our components on jQuery.ready…

jQuery(function ($) {
  // ExampleComponent1.init();
  // ExampleModule2.init();
  // ReplaceObfuscatedEmailAddresses.init();
  // AnimateOnPageLinks.init();
  _components_jquery_flexslider_min__WEBPACK_IMPORTED_MODULE_3___default.a.init();
  _components_FlexSliderInit__WEBPACK_IMPORTED_MODULE_4__["default"].init();
  _components_MobileHamburgerMenu__WEBPACK_IMPORTED_MODULE_1__["default"].init();
  _components_MainMenu__WEBPACK_IMPORTED_MODULE_2__["default"].init();
});

/***/ }),

/***/ "./assets/js/components/AnimateOnPageLinks.js":
/*!****************************************************!*\
  !*** ./assets/js/components/AnimateOnPageLinks.js ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var $ = window.jQuery;
var $window = window.$window || $(window);
/**
 * Intercept clicks on any anchor tag and if the anchor is linking to an on page ID, animate the scroll to the targeted
 * element.
 *
 * This only works if the href contains a value beginning with '#'. e.g; #about-section. You can modify this behaviour
 * by changing the this.link_is_targeting_on_page_anchor() method.
 *
 * If the clicked element has a `data-toggle=xxx` attribute, it won't be handled. You can modify this behaviour by
 * changing the this.is_excluded() method.
 */

var AnimateOnPageLinks = {
  duration: 800,
  offset: -100,
  init: function init() {
    var _this = this;

    $('a').on('click', function (e) {
      var $link = $(e.target);

      if (_this.is_excluded($link)) {
        return;
      }

      var href = $link.attr('href');

      if (_this.link_is_targeting_on_page_anchor(href)) {
        var $target_element = $(href);

        if (!$target_element.length) {
          return;
        }

        e.preventDefault();
        var offset = $target_element.data('scroll-to-offset') === undefined ? _this.offset : $target_element.data('scroll-to-offset');
        var scroll_top = $target_element.offset().top + offset; // subtract any additional height considerations to scroll_top (e.g; height of sticky header)
        //scroll_top -= $('.sticky-page-header').outerHeight();

        $('html, body').animate({
          scrollTop: scroll_top
        }, _this.duration, 'swing', function () {
          return $target_element.trigger('scrolled_to');
        });
      }
    });
  },
  is_excluded: function is_excluded($selector) {
    return !!$selector.data('toggle');
  },
  link_is_targeting_on_page_anchor: function link_is_targeting_on_page_anchor(link) {
    return /^#/.test(link);
  }
};
/* harmony default export */ __webpack_exports__["default"] = (AnimateOnPageLinks);

/***/ }),

/***/ "./assets/js/components/ExampleComponent1.js":
/*!***************************************************!*\
  !*** ./assets/js/components/ExampleComponent1.js ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var $ = window.jQuery;
var $window = window.$window || $(window);
var ExampleComponent1 = {
  init: function init() {
    var _this = this;

    var $module = $('.ExampleComponent1');
    if (!$module.length) return;
    $module.each(function (index, element) {
      _this.each(element);
    });
  },
  each: function each(element) {
    var $item = $(element); // do something here
    //alert('Example 1 is working...');
  }
};
/* harmony default export */ __webpack_exports__["default"] = (ExampleComponent1);

/***/ }),

/***/ "./assets/js/components/FlexSliderInit.js":
/*!************************************************!*\
  !*** ./assets/js/components/FlexSliderInit.js ***!
  \************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
// Options and docs
// https://github.com/woocommerce/FlexSlider/wiki/FlexSlider-Properties
//
var $ = window.jQuery;
var $window = window.$window || $(window);
var FlexSliderSetUp = {
  init: function init() {
    $(window).load(function () {
      $('#slider-ydg .flexslider').flexslider({
        animation: 'slide',
        slideshowSpeed: 9000,
        animationSpeed: 900,
        pauseOnAction: true,
        pauseOnHover: true,
        controlNav: true,
        directionNav: true,
        controlsContainer: ".flexslider"
      });
      $('#slider-quotes .flexslider').flexslider({
        initDelay: 3000,
        animation: 'slide',
        slideshowSpeed: 5000,
        animationSpeed: 750,
        easing: "swing",
        startAt: 0,
        pauseOnAction: true,
        pauseOnHover: true,
        controlNav: false,
        directionNav: true,
        controlsContainer: ".flexslider",
        itemWidth: 320,
        itemMargin: 10,
        minItems: 1,
        maxItems: 3,
        reverse: false,
        animationLoop: true
      });
    });
  }
};
/* harmony default export */ __webpack_exports__["default"] = (FlexSliderSetUp);

/***/ }),

/***/ "./assets/js/components/MainMenu.js":
/*!******************************************!*\
  !*** ./assets/js/components/MainMenu.js ***!
  \******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var $ = window.jQuery;
var $window = window.$window || $(window);
var MainMenu = {
  init: function init() {
    // Controls the main nested menu behaviour
    var primaryLink = $('.navbar-main ul li a[href^="#"]');
    var subMenu = $('.navbar-main ul li ul.sub-menu');
    $(primaryLink).click(function (e) {
      e.stopPropagation();
      e.preventDefault();
      $(primaryLink).not(this).each(function () {
        $(this).next().hide();
      });
      $(this).next().slideToggle(400);
    });
    $('html').click(function () {
      subMenu.slideUp(300);
    });
  }
};
/* harmony default export */ __webpack_exports__["default"] = (MainMenu);

/***/ }),

/***/ "./assets/js/components/MobileHamburgerMenu.js":
/*!*****************************************************!*\
  !*** ./assets/js/components/MobileHamburgerMenu.js ***!
  \*****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var $ = window.jQuery;
var $window = window.$window || $(window);
var MobileHamburgerMenu = {
  init: function init() {
    var mobileNav = $('.navburger-main');
    var navToggle = $('#menuToggle');
    var cssWidth = $(mobileNav).css('width');
    var bkgScroll = $('body');
    var isOpen = 0;
    var menuWidthInverse = '-' + cssWidth;
    $('html').click(function () {
      if (isOpen == 1) {
        $(mobileNav).animate({
          'left': menuWidthInverse
        }, 300);
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
        $(mobileNav).animate({
          'left': 0
        }, 300);
        navToggle.addClass('open');
        isOpen++;
        bkgScroll.addClass('no-scroll');
      } else {
        $(mobileNav).animate({
          'left': menuWidthInverse
        }, 300);
        navToggle.removeClass('open');
        isOpen--;
        subMenu.hide();
        bkgScroll.removeClass('no-scroll');
      }
    }); // Controls the nested menu behaviour
    // var primaryLink = $('.navbar-main ul li a[href^="#"]');

    var primaryLink = $('.navburger-main ul li a');
    var subMenu = $('.navburger-main ul li ul.sub-menu');
    $(primaryLink).click(function (e) {
      e.stopPropagation();
      $(primaryLink).not(this).each(function () {
        $(this).next().slideUp(300);
      });
      $(this).next().slideToggle(300);
    }); //window resize
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
/* harmony default export */ __webpack_exports__["default"] = (MobileHamburgerMenu);

/***/ }),

/***/ "./assets/js/components/ReplaceObfuscatedEmailAddresses.js":
/*!*****************************************************************!*\
  !*** ./assets/js/components/ReplaceObfuscatedEmailAddresses.js ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var $ = window.jQuery;
var $window = window.$window || $(window);
/**
 * Replaces elements with the defined class with an anchor tag containing a mailto: protocol href.
 *
 * If the targeted element has the data-email attribute containing an email address in the format of
 * example[at]domain[dot]com, the inner text will be preserved and the obfuscated address in the data attribute will be
 * used in the link.
 *
 * If not data attribute is present, the inner text of the element is assumed to have the obfuscated address.
 *
 * `class` and `id` attributes are preserved.
 */

var ReplaceObfuscatedEmailAddresses = {
  class_name: 'ObfuscatedEml',
  init: function init() {
    var _this = this;

    var elements = document.getElementsByClassName(this.class_name);

    if (elements.length) {
      [].forEach.call(elements, function (element) {
        var email, text;

        if (element.hasAttribute('data-email')) {
          email = _this.deobfuscate(element.getAttribute('data-email'));
          text = element.innerHTML;
        } else {
          email = _this.deobfuscate(element.innerHTML);
          text = email;
        }

        var link = document.createElement('a');
        link.innerHTML = text;
        link.setAttribute('id', element.getAttribute('id'));
        link.setAttribute('class', element.getAttribute('class'));
        link.setAttribute('href', 'mailto:' + email + '?subject=Website%20Enquiry');
        element.parentNode.replaceChild(link, element);
      });
    }
  },
  deobfuscate: function deobfuscate(text) {
    return text.replace(/\[(at|dot)]/g, function (match) {
      if (match === '[at]') return '@';
      if (match === '[dot]') return '.';
      return match;
    });
  }
};
/* harmony default export */ __webpack_exports__["default"] = (ReplaceObfuscatedEmailAddresses);

/***/ }),

/***/ "./assets/js/components/example-2.js":
/*!*******************************************!*\
  !*** ./assets/js/components/example-2.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = {
  init: function init() {// do something here
    //alert('example 2 is working...');
  }
};

/***/ }),

/***/ "./assets/js/components/jquery.flexslider-min.js":
/*!*******************************************************!*\
  !*** ./assets/js/components/jquery.flexslider-min.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(setImmediate) {function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

module.exports = {
  init: function init() {
    // do something here
    //alert('example 2 is working...');

    /*
    * jQuery FlexSlider v2.7.2
    * Copyright 2012 WooThemes
    * Contributing Author: Tyler Smith
    */
    !function ($) {
      var e = !0;
      $.flexslider = function (t, a) {
        var n = $(t);
        void 0 === a.rtl && "rtl" == $("html").attr("dir") && (a.rtl = !0), n.vars = $.extend({}, $.flexslider.defaults, a);
        var i = n.vars.namespace,
            r = window.navigator && window.navigator.msPointerEnabled && window.MSGesture,
            s = ("ontouchstart" in window || r || window.DocumentTouch && document instanceof DocumentTouch) && n.vars.touch,
            o = "click touchend MSPointerUp keyup",
            l = "",
            c,
            d = "vertical" === n.vars.direction,
            u = n.vars.reverse,
            v = n.vars.itemWidth > 0,
            p = "fade" === n.vars.animation,
            m = "" !== n.vars.asNavFor,
            f = {};
        $.data(t, "flexslider", n), f = {
          init: function init() {
            n.animating = !1, n.currentSlide = parseInt(n.vars.startAt ? n.vars.startAt : 0, 10), isNaN(n.currentSlide) && (n.currentSlide = 0), n.animatingTo = n.currentSlide, n.atEnd = 0 === n.currentSlide || n.currentSlide === n.last, n.containerSelector = n.vars.selector.substr(0, n.vars.selector.search(" ")), n.slides = $(n.vars.selector, n), n.container = $(n.containerSelector, n), n.count = n.slides.length, n.syncExists = $(n.vars.sync).length > 0, "slide" === n.vars.animation && (n.vars.animation = "swing"), n.prop = d ? "top" : n.vars.rtl ? "marginRight" : "marginLeft", n.args = {}, n.manualPause = !1, n.stopped = !1, n.started = !1, n.startTimeout = null, n.transitions = !n.vars.video && !p && n.vars.useCSS && function () {
              var e = document.createElement("div"),
                  t = ["perspectiveProperty", "WebkitPerspective", "MozPerspective", "OPerspective", "msPerspective"];

              for (var a in t) {
                if (void 0 !== e.style[t[a]]) return n.pfx = t[a].replace("Perspective", "").toLowerCase(), n.prop = "-" + n.pfx + "-transform", !0;
              }

              return !1;
            }(), n.isFirefox = navigator.userAgent.toLowerCase().indexOf("firefox") > -1, n.ensureAnimationEnd = "", "" !== n.vars.controlsContainer && (n.controlsContainer = $(n.vars.controlsContainer).length > 0 && $(n.vars.controlsContainer)), "" !== n.vars.manualControls && (n.manualControls = $(n.vars.manualControls).length > 0 && $(n.vars.manualControls)), "" !== n.vars.customDirectionNav && (n.customDirectionNav = 2 === $(n.vars.customDirectionNav).length && $(n.vars.customDirectionNav)), n.vars.randomize && (n.slides.sort(function () {
              return Math.round(Math.random()) - .5;
            }), n.container.empty().append(n.slides)), n.doMath(), n.setup("init"), n.vars.controlNav && f.controlNav.setup(), n.vars.directionNav && f.directionNav.setup(), n.vars.keyboard && (1 === $(n.containerSelector).length || n.vars.multipleKeyboard) && $(document).bind("keyup", function (e) {
              var t = e.keyCode;

              if (!n.animating && (39 === t || 37 === t)) {
                var a = n.vars.rtl ? 37 === t ? n.getTarget("next") : 39 === t && n.getTarget("prev") : 39 === t ? n.getTarget("next") : 37 === t && n.getTarget("prev");
                n.flexAnimate(a, n.vars.pauseOnAction);
              }
            }), n.vars.mousewheel && n.bind("mousewheel", function (e, t, a, i) {
              e.preventDefault();
              var r = t < 0 ? n.getTarget("next") : n.getTarget("prev");
              n.flexAnimate(r, n.vars.pauseOnAction);
            }), n.vars.pausePlay && f.pausePlay.setup(), n.vars.slideshow && n.vars.pauseInvisible && f.pauseInvisible.init(), n.vars.slideshow && (n.vars.pauseOnHover && n.hover(function () {
              n.manualPlay || n.manualPause || n.pause();
            }, function () {
              n.manualPause || n.manualPlay || n.stopped || n.play();
            }), n.vars.pauseInvisible && f.pauseInvisible.isHidden() || (n.vars.initDelay > 0 ? n.startTimeout = setTimeout(n.play, n.vars.initDelay) : n.play())), m && f.asNav.setup(), s && n.vars.touch && f.touch(), (!p || p && n.vars.smoothHeight) && $(window).bind("resize orientationchange focus", f.resize), n.find("img").attr("draggable", "false"), setTimeout(function () {
              n.vars.start(n);
            }, 200);
          },
          asNav: {
            setup: function setup() {
              n.asNav = !0, n.animatingTo = Math.floor(n.currentSlide / n.move), n.currentItem = n.currentSlide, n.slides.removeClass(i + "active-slide").eq(n.currentItem).addClass(i + "active-slide"), r ? (t._slider = n, n.slides.each(function () {
                var e = this;
                e._gesture = new MSGesture(), e._gesture.target = e, e.addEventListener("MSPointerDown", function (e) {
                  e.preventDefault(), e.currentTarget._gesture && e.currentTarget._gesture.addPointer(e.pointerId);
                }, !1), e.addEventListener("MSGestureTap", function (e) {
                  e.preventDefault();
                  var t = $(this),
                      a = t.index();
                  $(n.vars.asNavFor).data("flexslider").animating || t.hasClass("active") || (n.direction = n.currentItem < a ? "next" : "prev", n.flexAnimate(a, n.vars.pauseOnAction, !1, !0, !0));
                });
              })) : n.slides.on(o, function (e) {
                e.preventDefault();
                var t = $(this),
                    a = t.index(),
                    r;
                r = n.vars.rtl ? -1 * (t.offset().right - $(n).scrollLeft()) : t.offset().left - $(n).scrollLeft(), r <= 0 && t.hasClass(i + "active-slide") ? n.flexAnimate(n.getTarget("prev"), !0) : $(n.vars.asNavFor).data("flexslider").animating || t.hasClass(i + "active-slide") || (n.direction = n.currentItem < a ? "next" : "prev", n.flexAnimate(a, n.vars.pauseOnAction, !1, !0, !0));
              });
            }
          },
          controlNav: {
            setup: function setup() {
              n.manualControls ? f.controlNav.setupManual() : f.controlNav.setupPaging();
            },
            setupPaging: function setupPaging() {
              var e = "thumbnails" === n.vars.controlNav ? "control-thumbs" : "control-paging",
                  t = 1,
                  a,
                  r;
              if (n.controlNavScaffold = $('<ol class="' + i + "control-nav " + i + e + '"></ol>'), n.pagingCount > 1) for (var s = 0; s < n.pagingCount; s++) {
                if (r = n.slides.eq(s), void 0 === r.attr("data-thumb-alt") && r.attr("data-thumb-alt", ""), a = $("<a></a>").attr("href", "#").text(t), "thumbnails" === n.vars.controlNav && (a = $("<img/>").attr("src", r.attr("data-thumb"))), "" !== r.attr("data-thumb-alt") && a.attr("alt", r.attr("data-thumb-alt")), "thumbnails" === n.vars.controlNav && !0 === n.vars.thumbCaptions) {
                  var c = r.attr("data-thumbcaption");

                  if ("" !== c && void 0 !== c) {
                    var d = $("<span></span>").addClass(i + "caption").text(c);
                    a.append(d);
                  }
                }

                var u = $("<li>");
                a.appendTo(u), u.append("</li>"), n.controlNavScaffold.append(u), t++;
              }
              n.controlsContainer ? $(n.controlsContainer).append(n.controlNavScaffold) : n.append(n.controlNavScaffold), f.controlNav.set(), f.controlNav.active(), n.controlNavScaffold.delegate("a, img", o, function (e) {
                if (e.preventDefault(), "" === l || l === e.type) {
                  var t = $(this),
                      a = n.controlNav.index(t);
                  t.hasClass(i + "active") || (n.direction = a > n.currentSlide ? "next" : "prev", n.flexAnimate(a, n.vars.pauseOnAction));
                }

                "" === l && (l = e.type), f.setToClearWatchedEvent();
              });
            },
            setupManual: function setupManual() {
              n.controlNav = n.manualControls, f.controlNav.active(), n.controlNav.bind(o, function (e) {
                if (e.preventDefault(), "" === l || l === e.type) {
                  var t = $(this),
                      a = n.controlNav.index(t);
                  t.hasClass(i + "active") || (a > n.currentSlide ? n.direction = "next" : n.direction = "prev", n.flexAnimate(a, n.vars.pauseOnAction));
                }

                "" === l && (l = e.type), f.setToClearWatchedEvent();
              });
            },
            set: function set() {
              var e = "thumbnails" === n.vars.controlNav ? "img" : "a";
              n.controlNav = $("." + i + "control-nav li " + e, n.controlsContainer ? n.controlsContainer : n);
            },
            active: function active() {
              n.controlNav.removeClass(i + "active").eq(n.animatingTo).addClass(i + "active");
            },
            update: function update(e, t) {
              n.pagingCount > 1 && "add" === e ? n.controlNavScaffold.append($('<li><a href="#">' + n.count + "</a></li>")) : 1 === n.pagingCount ? n.controlNavScaffold.find("li").remove() : n.controlNav.eq(t).closest("li").remove(), f.controlNav.set(), n.pagingCount > 1 && n.pagingCount !== n.controlNav.length ? n.update(t, e) : f.controlNav.active();
            }
          },
          directionNav: {
            setup: function setup() {
              var e = $('<ul class="' + i + 'direction-nav"><li class="' + i + 'nav-prev"><a class="' + i + 'prev" href="#">' + n.vars.prevText + '</a></li><li class="' + i + 'nav-next"><a class="' + i + 'next" href="#">' + n.vars.nextText + "</a></li></ul>");
              n.customDirectionNav ? n.directionNav = n.customDirectionNav : n.controlsContainer ? ($(n.controlsContainer).append(e), n.directionNav = $("." + i + "direction-nav li a", n.controlsContainer)) : (n.append(e), n.directionNav = $("." + i + "direction-nav li a", n)), f.directionNav.update(), n.directionNav.bind(o, function (e) {
                e.preventDefault();
                var t;
                "" !== l && l !== e.type || (t = $(this).hasClass(i + "next") ? n.getTarget("next") : n.getTarget("prev"), n.flexAnimate(t, n.vars.pauseOnAction)), "" === l && (l = e.type), f.setToClearWatchedEvent();
              });
            },
            update: function update() {
              var e = i + "disabled";
              1 === n.pagingCount ? n.directionNav.addClass(e).attr("tabindex", "-1") : n.vars.animationLoop ? n.directionNav.removeClass(e).removeAttr("tabindex") : 0 === n.animatingTo ? n.directionNav.removeClass(e).filter("." + i + "prev").addClass(e).attr("tabindex", "-1") : n.animatingTo === n.last ? n.directionNav.removeClass(e).filter("." + i + "next").addClass(e).attr("tabindex", "-1") : n.directionNav.removeClass(e).removeAttr("tabindex");
            }
          },
          pausePlay: {
            setup: function setup() {
              var e = $('<div class="' + i + 'pauseplay"><a href="#"></a></div>');
              n.controlsContainer ? (n.controlsContainer.append(e), n.pausePlay = $("." + i + "pauseplay a", n.controlsContainer)) : (n.append(e), n.pausePlay = $("." + i + "pauseplay a", n)), f.pausePlay.update(n.vars.slideshow ? i + "pause" : i + "play"), n.pausePlay.bind(o, function (e) {
                e.preventDefault(), "" !== l && l !== e.type || ($(this).hasClass(i + "pause") ? (n.manualPause = !0, n.manualPlay = !1, n.pause()) : (n.manualPause = !1, n.manualPlay = !0, n.play())), "" === l && (l = e.type), f.setToClearWatchedEvent();
              });
            },
            update: function update(e) {
              "play" === e ? n.pausePlay.removeClass(i + "pause").addClass(i + "play").html(n.vars.playText) : n.pausePlay.removeClass(i + "play").addClass(i + "pause").html(n.vars.pauseText);
            }
          },
          touch: function touch() {
            function e(e) {
              e.stopPropagation(), n.animating ? e.preventDefault() : (n.pause(), t._gesture.addPointer(e.pointerId), w = 0, c = d ? n.h : n.w, f = Number(new Date()), l = v && u && n.animatingTo === n.last ? 0 : v && u ? n.limit - (n.itemW + n.vars.itemMargin) * n.move * n.animatingTo : v && n.currentSlide === n.last ? n.limit : v ? (n.itemW + n.vars.itemMargin) * n.move * n.currentSlide : u ? (n.last - n.currentSlide + n.cloneOffset) * c : (n.currentSlide + n.cloneOffset) * c);
            }

            function a(e) {
              e.stopPropagation();
              var a = e.target._slider;

              if (a) {
                var n = -e.translationX,
                    i = -e.translationY;
                if (w += d ? i : n, m = (a.vars.rtl ? -1 : 1) * w, x = d ? Math.abs(w) < Math.abs(-n) : Math.abs(w) < Math.abs(-i), e.detail === e.MSGESTURE_FLAG_INERTIA) return void setImmediate(function () {
                  t._gesture.stop();
                });
                (!x || Number(new Date()) - f > 500) && (e.preventDefault(), !p && a.transitions && (a.vars.animationLoop || (m = w / (0 === a.currentSlide && w < 0 || a.currentSlide === a.last && w > 0 ? Math.abs(w) / c + 2 : 1)), a.setProps(l + m, "setTouch")));
              }
            }

            function i(e) {
              e.stopPropagation();
              var t = e.target._slider;

              if (t) {
                if (t.animatingTo === t.currentSlide && !x && null !== m) {
                  var a = u ? -m : m,
                      n = a > 0 ? t.getTarget("next") : t.getTarget("prev");
                  t.canAdvance(n) && (Number(new Date()) - f < 550 && Math.abs(a) > 50 || Math.abs(a) > c / 2) ? t.flexAnimate(n, t.vars.pauseOnAction) : p || t.flexAnimate(t.currentSlide, t.vars.pauseOnAction, !0);
                }

                s = null, o = null, m = null, l = null, w = 0;
              }
            }

            var s,
                o,
                l,
                c,
                m,
                f,
                g,
                h,
                _S,
                x = !1,
                y = 0,
                b = 0,
                w = 0;

            r ? (t.style.msTouchAction = "none", t._gesture = new MSGesture(), t._gesture.target = t, t.addEventListener("MSPointerDown", e, !1), t._slider = n, t.addEventListener("MSGestureChange", a, !1), t.addEventListener("MSGestureEnd", i, !1)) : (g = function g(e) {
              n.animating ? e.preventDefault() : (window.navigator.msPointerEnabled || 1 === e.touches.length) && (n.pause(), c = d ? n.h : n.w, f = Number(new Date()), y = e.touches[0].pageX, b = e.touches[0].pageY, l = v && u && n.animatingTo === n.last ? 0 : v && u ? n.limit - (n.itemW + n.vars.itemMargin) * n.move * n.animatingTo : v && n.currentSlide === n.last ? n.limit : v ? (n.itemW + n.vars.itemMargin) * n.move * n.currentSlide : u ? (n.last - n.currentSlide + n.cloneOffset) * c : (n.currentSlide + n.cloneOffset) * c, s = d ? b : y, o = d ? y : b, t.addEventListener("touchmove", h, !1), t.addEventListener("touchend", _S, !1));
            }, h = function h(e) {
              y = e.touches[0].pageX, b = e.touches[0].pageY, m = d ? s - b : (n.vars.rtl ? -1 : 1) * (s - y), x = d ? Math.abs(m) < Math.abs(y - o) : Math.abs(m) < Math.abs(b - o);
              var t = 500;
              (!x || Number(new Date()) - f > 500) && (e.preventDefault(), !p && n.transitions && (n.vars.animationLoop || (m /= 0 === n.currentSlide && m < 0 || n.currentSlide === n.last && m > 0 ? Math.abs(m) / c + 2 : 1), n.setProps(l + m, "setTouch")));
            }, _S = function S(e) {
              if (t.removeEventListener("touchmove", h, !1), n.animatingTo === n.currentSlide && !x && null !== m) {
                var a = u ? -m : m,
                    i = a > 0 ? n.getTarget("next") : n.getTarget("prev");
                n.canAdvance(i) && (Number(new Date()) - f < 550 && Math.abs(a) > 50 || Math.abs(a) > c / 2) ? n.flexAnimate(i, n.vars.pauseOnAction) : p || n.flexAnimate(n.currentSlide, n.vars.pauseOnAction, !0);
              }

              t.removeEventListener("touchend", _S, !1), s = null, o = null, m = null, l = null;
            }, t.addEventListener("touchstart", g, !1));
          },
          resize: function resize() {
            !n.animating && n.is(":visible") && (v || n.doMath(), p ? f.smoothHeight() : v ? (n.slides.width(n.computedW), n.update(n.pagingCount), n.setProps()) : d ? (n.viewport.height(n.h), n.setProps(n.h, "setTotal")) : (n.vars.smoothHeight && f.smoothHeight(), n.newSlides.width(n.computedW), n.setProps(n.computedW, "setTotal")));
          },
          smoothHeight: function smoothHeight(e) {
            if (!d || p) {
              var t = p ? n : n.viewport;
              e ? t.animate({
                height: n.slides.eq(n.animatingTo).innerHeight()
              }, e) : t.innerHeight(n.slides.eq(n.animatingTo).innerHeight());
            }
          },
          sync: function sync(e) {
            var t = $(n.vars.sync).data("flexslider"),
                a = n.animatingTo;

            switch (e) {
              case "animate":
                t.flexAnimate(a, n.vars.pauseOnAction, !1, !0);
                break;

              case "play":
                t.playing || t.asNav || t.play();
                break;

              case "pause":
                t.pause();
                break;
            }
          },
          uniqueID: function uniqueID(e) {
            return e.filter("[id]").add(e.find("[id]")).each(function () {
              var e = $(this);
              e.attr("id", e.attr("id") + "_clone");
            }), e;
          },
          pauseInvisible: {
            visProp: null,
            init: function init() {
              var e = f.pauseInvisible.getHiddenProp();

              if (e) {
                var t = e.replace(/[H|h]idden/, "") + "visibilitychange";
                document.addEventListener(t, function () {
                  f.pauseInvisible.isHidden() ? n.startTimeout ? clearTimeout(n.startTimeout) : n.pause() : n.started ? n.play() : n.vars.initDelay > 0 ? setTimeout(n.play, n.vars.initDelay) : n.play();
                });
              }
            },
            isHidden: function isHidden() {
              var e = f.pauseInvisible.getHiddenProp();
              return !!e && document[e];
            },
            getHiddenProp: function getHiddenProp() {
              var e = ["webkit", "moz", "ms", "o"];
              if ("hidden" in document) return "hidden";

              for (var t = 0; t < e.length; t++) {
                if (e[t] + "Hidden" in document) return e[t] + "Hidden";
              }

              return null;
            }
          },
          setToClearWatchedEvent: function setToClearWatchedEvent() {
            clearTimeout(c), c = setTimeout(function () {
              l = "";
            }, 3e3);
          }
        }, n.flexAnimate = function (e, t, a, r, o) {
          if (n.vars.animationLoop || e === n.currentSlide || (n.direction = e > n.currentSlide ? "next" : "prev"), m && 1 === n.pagingCount && (n.direction = n.currentItem < e ? "next" : "prev"), !n.animating && (n.canAdvance(e, o) || a) && n.is(":visible")) {
            if (m && r) {
              var l = $(n.vars.asNavFor).data("flexslider");
              if (n.atEnd = 0 === e || e === n.count - 1, l.flexAnimate(e, !0, !1, !0, o), n.direction = n.currentItem < e ? "next" : "prev", l.direction = n.direction, Math.ceil((e + 1) / n.visible) - 1 === n.currentSlide || 0 === e) return n.currentItem = e, n.slides.removeClass(i + "active-slide").eq(e).addClass(i + "active-slide"), !1;
              n.currentItem = e, n.slides.removeClass(i + "active-slide").eq(e).addClass(i + "active-slide"), e = Math.floor(e / n.visible);
            }

            if (n.animating = !0, n.animatingTo = e, t && n.pause(), n.vars.before(n), n.syncExists && !o && f.sync("animate"), n.vars.controlNav && f.controlNav.active(), v || n.slides.removeClass(i + "active-slide").eq(e).addClass(i + "active-slide"), n.atEnd = 0 === e || e === n.last, n.vars.directionNav && f.directionNav.update(), e === n.last && (n.vars.end(n), n.vars.animationLoop || n.pause()), p) s ? (n.slides.eq(n.currentSlide).css({
              opacity: 0,
              zIndex: 1
            }), n.slides.eq(e).css({
              opacity: 1,
              zIndex: 2
            }), n.wrapup(c)) : (n.slides.eq(n.currentSlide).css({
              zIndex: 1
            }).animate({
              opacity: 0
            }, n.vars.animationSpeed, n.vars.easing), n.slides.eq(e).css({
              zIndex: 2
            }).animate({
              opacity: 1
            }, n.vars.animationSpeed, n.vars.easing, n.wrapup));else {
              var c = d ? n.slides.filter(":first").height() : n.computedW,
                  g,
                  h,
                  S;
              v ? (g = n.vars.itemMargin, S = (n.itemW + g) * n.move * n.animatingTo, h = S > n.limit && 1 !== n.visible ? n.limit : S) : h = 0 === n.currentSlide && e === n.count - 1 && n.vars.animationLoop && "next" !== n.direction ? u ? (n.count + n.cloneOffset) * c : 0 : n.currentSlide === n.last && 0 === e && n.vars.animationLoop && "prev" !== n.direction ? u ? 0 : (n.count + 1) * c : u ? (n.count - 1 - e + n.cloneOffset) * c : (e + n.cloneOffset) * c, n.setProps(h, "", n.vars.animationSpeed), n.transitions ? (n.vars.animationLoop && n.atEnd || (n.animating = !1, n.currentSlide = n.animatingTo), n.container.unbind("webkitTransitionEnd transitionend"), n.container.bind("webkitTransitionEnd transitionend", function () {
                clearTimeout(n.ensureAnimationEnd), n.wrapup(c);
              }), clearTimeout(n.ensureAnimationEnd), n.ensureAnimationEnd = setTimeout(function () {
                n.wrapup(c);
              }, n.vars.animationSpeed + 100)) : n.container.animate(n.args, n.vars.animationSpeed, n.vars.easing, function () {
                n.wrapup(c);
              });
            }
            n.vars.smoothHeight && f.smoothHeight(n.vars.animationSpeed);
          }
        }, n.wrapup = function (e) {
          p || v || (0 === n.currentSlide && n.animatingTo === n.last && n.vars.animationLoop ? n.setProps(e, "jumpEnd") : n.currentSlide === n.last && 0 === n.animatingTo && n.vars.animationLoop && n.setProps(e, "jumpStart")), n.animating = !1, n.currentSlide = n.animatingTo, n.vars.after(n);
        }, n.animateSlides = function () {
          !n.animating && e && n.flexAnimate(n.getTarget("next"));
        }, n.pause = function () {
          clearInterval(n.animatedSlides), n.animatedSlides = null, n.playing = !1, n.vars.pausePlay && f.pausePlay.update("play"), n.syncExists && f.sync("pause");
        }, n.play = function () {
          n.playing && clearInterval(n.animatedSlides), n.animatedSlides = n.animatedSlides || setInterval(n.animateSlides, n.vars.slideshowSpeed), n.started = n.playing = !0, n.vars.pausePlay && f.pausePlay.update("pause"), n.syncExists && f.sync("play");
        }, n.stop = function () {
          n.pause(), n.stopped = !0;
        }, n.canAdvance = function (e, t) {
          var a = m ? n.pagingCount - 1 : n.last;
          return !!t || !(!m || n.currentItem !== n.count - 1 || 0 !== e || "prev" !== n.direction) || (!m || 0 !== n.currentItem || e !== n.pagingCount - 1 || "next" === n.direction) && !(e === n.currentSlide && !m) && (!!n.vars.animationLoop || (!n.atEnd || 0 !== n.currentSlide || e !== a || "next" === n.direction) && (!n.atEnd || n.currentSlide !== a || 0 !== e || "next" !== n.direction));
        }, n.getTarget = function (e) {
          return n.direction = e, "next" === e ? n.currentSlide === n.last ? 0 : n.currentSlide + 1 : 0 === n.currentSlide ? n.last : n.currentSlide - 1;
        }, n.setProps = function (e, t, a) {
          var i = function () {
            var a = e || (n.itemW + n.vars.itemMargin) * n.move * n.animatingTo;
            return function () {
              if (v) return "setTouch" === t ? e : u && n.animatingTo === n.last ? 0 : u ? n.limit - (n.itemW + n.vars.itemMargin) * n.move * n.animatingTo : n.animatingTo === n.last ? n.limit : a;

              switch (t) {
                case "setTotal":
                  return u ? (n.count - 1 - n.currentSlide + n.cloneOffset) * e : (n.currentSlide + n.cloneOffset) * e;

                case "setTouch":
                  return e;

                case "jumpEnd":
                  return u ? e : n.count * e;

                case "jumpStart":
                  return u ? n.count * e : e;

                default:
                  return e;
              }
            }() * (n.vars.rtl ? 1 : -1) + "px";
          }();

          n.transitions && (i = n.isFirefox ? d ? "translate3d(0," + i + ",0)" : "translate3d(" + parseInt(i) + "px,0,0)" : d ? "translate3d(0," + i + ",0)" : "translate3d(" + (n.vars.rtl ? -1 : 1) * parseInt(i) + "px,0,0)", a = void 0 !== a ? a / 1e3 + "s" : "0s", n.container.css("-" + n.pfx + "-transition-duration", a), n.container.css("transition-duration", a)), n.args[n.prop] = i, (n.transitions || void 0 === a) && n.container.css(n.args), n.container.css("transform", i);
        }, n.setup = function (e) {
          if (p) n.vars.rtl ? n.slides.css({
            width: "100%",
            "float": "right",
            marginLeft: "-100%",
            position: "relative"
          }) : n.slides.css({
            width: "100%",
            "float": "left",
            marginRight: "-100%",
            position: "relative"
          }), "init" === e && (s ? n.slides.css({
            opacity: 0,
            display: "block",
            webkitTransition: "opacity " + n.vars.animationSpeed / 1e3 + "s ease",
            zIndex: 1
          }).eq(n.currentSlide).css({
            opacity: 1,
            zIndex: 2
          }) : 0 == n.vars.fadeFirstSlide ? n.slides.css({
            opacity: 0,
            display: "block",
            zIndex: 1
          }).eq(n.currentSlide).css({
            zIndex: 2
          }).css({
            opacity: 1
          }) : n.slides.css({
            opacity: 0,
            display: "block",
            zIndex: 1
          }).eq(n.currentSlide).css({
            zIndex: 2
          }).animate({
            opacity: 1
          }, n.vars.animationSpeed, n.vars.easing)), n.vars.smoothHeight && f.smoothHeight();else {
            var t, a;
            "init" === e && (n.viewport = $('<div class="' + i + 'viewport"></div>').css({
              overflow: "hidden",
              position: "relative"
            }).appendTo(n).append(n.container), n.cloneCount = 0, n.cloneOffset = 0, u && (a = $.makeArray(n.slides).reverse(), n.slides = $(a), n.container.empty().append(n.slides))), n.vars.animationLoop && !v && (n.cloneCount = 2, n.cloneOffset = 1, "init" !== e && n.container.find(".clone").remove(), n.container.append(f.uniqueID(n.slides.first().clone().addClass("clone")).attr("aria-hidden", "true")).prepend(f.uniqueID(n.slides.last().clone().addClass("clone")).attr("aria-hidden", "true"))), n.newSlides = $(n.vars.selector, n), t = u ? n.count - 1 - n.currentSlide + n.cloneOffset : n.currentSlide + n.cloneOffset, d && !v ? (n.container.height(200 * (n.count + n.cloneCount) + "%").css("position", "absolute").width("100%"), setTimeout(function () {
              n.newSlides.css({
                display: "block"
              }), n.doMath(), n.viewport.height(n.h), n.setProps(t * n.h, "init");
            }, "init" === e ? 100 : 0)) : (n.container.width(200 * (n.count + n.cloneCount) + "%"), n.setProps(t * n.computedW, "init"), setTimeout(function () {
              n.doMath(), n.vars.rtl && n.isFirefox ? n.newSlides.css({
                width: n.computedW,
                marginRight: n.computedM,
                "float": "right",
                display: "block"
              }) : n.newSlides.css({
                width: n.computedW,
                marginRight: n.computedM,
                "float": "left",
                display: "block"
              }), n.vars.smoothHeight && f.smoothHeight();
            }, "init" === e ? 100 : 0));
          }
          v || n.slides.removeClass(i + "active-slide").eq(n.currentSlide).addClass(i + "active-slide"), n.vars.init(n);
        }, n.doMath = function () {
          var e = n.slides.first(),
              t = n.vars.itemMargin,
              a = n.vars.minItems,
              i = n.vars.maxItems;
          n.w = void 0 === n.viewport ? n.width() : n.viewport.width(), n.isFirefox && (n.w = n.width()), n.h = e.height(), n.boxPadding = e.outerWidth() - e.width(), v ? (n.itemT = n.vars.itemWidth + t, n.itemM = t, n.minW = a ? a * n.itemT : n.w, n.maxW = i ? i * n.itemT - t : n.w, n.itemW = n.minW > n.w ? (n.w - t * (a - 1)) / a : n.maxW < n.w ? (n.w - t * (i - 1)) / i : n.vars.itemWidth > n.w ? n.w : n.vars.itemWidth, n.visible = Math.floor(n.w / n.itemW), n.move = n.vars.move > 0 && n.vars.move < n.visible ? n.vars.move : n.visible, n.pagingCount = Math.ceil((n.count - n.visible) / n.move + 1), n.last = n.pagingCount - 1, n.limit = 1 === n.pagingCount ? 0 : n.vars.itemWidth > n.w ? n.itemW * (n.count - 1) + t * (n.count - 1) : (n.itemW + t) * n.count - n.w - t) : (n.itemW = n.w, n.itemM = t, n.pagingCount = n.count, n.last = n.count - 1), n.computedW = n.itemW - n.boxPadding, n.computedM = n.itemM;
        }, n.update = function (e, t) {
          n.doMath(), v || (e < n.currentSlide ? n.currentSlide += 1 : e <= n.currentSlide && 0 !== e && (n.currentSlide -= 1), n.animatingTo = n.currentSlide), n.vars.controlNav && !n.manualControls && ("add" === t && !v || n.pagingCount > n.controlNav.length ? f.controlNav.update("add") : ("remove" === t && !v || n.pagingCount < n.controlNav.length) && (v && n.currentSlide > n.last && (n.currentSlide -= 1, n.animatingTo -= 1), f.controlNav.update("remove", n.last))), n.vars.directionNav && f.directionNav.update();
        }, n.addSlide = function (e, t) {
          var a = $(e);
          n.count += 1, n.last = n.count - 1, d && u ? void 0 !== t ? n.slides.eq(n.count - t).after(a) : n.container.prepend(a) : void 0 !== t ? n.slides.eq(t).before(a) : n.container.append(a), n.update(t, "add"), n.slides = $(n.vars.selector + ":not(.clone)", n), n.setup(), n.vars.added(n);
        }, n.removeSlide = function (e) {
          var t = isNaN(e) ? n.slides.index($(e)) : e;
          n.count -= 1, n.last = n.count - 1, isNaN(e) ? $(e, n.slides).remove() : d && u ? n.slides.eq(n.last).remove() : n.slides.eq(e).remove(), n.doMath(), n.update(t, "remove"), n.slides = $(n.vars.selector + ":not(.clone)", n), n.setup(), n.vars.removed(n);
        }, f.init();
      }, $(window).blur(function (t) {
        e = !1;
      }).focus(function (t) {
        e = !0;
      }), $.flexslider.defaults = {
        namespace: "flex-",
        selector: ".slides > li",
        animation: "fade",
        easing: "swing",
        direction: "horizontal",
        reverse: !1,
        animationLoop: !0,
        smoothHeight: !1,
        startAt: 0,
        slideshow: !0,
        slideshowSpeed: 7e3,
        animationSpeed: 600,
        initDelay: 0,
        randomize: !1,
        fadeFirstSlide: !0,
        thumbCaptions: !1,
        pauseOnAction: !0,
        pauseOnHover: !1,
        pauseInvisible: !0,
        useCSS: !0,
        touch: !0,
        video: !1,
        controlNav: !0,
        directionNav: !0,
        prevText: "Previous",
        nextText: "Next",
        keyboard: !0,
        multipleKeyboard: !1,
        mousewheel: !1,
        pausePlay: !1,
        pauseText: "Pause",
        playText: "Play",
        controlsContainer: "",
        manualControls: "",
        customDirectionNav: "",
        sync: "",
        asNavFor: "",
        itemWidth: 0,
        itemMargin: 0,
        minItems: 1,
        maxItems: 0,
        move: 0,
        allowOneSlide: !0,
        isFirefox: !1,
        start: function start() {},
        before: function before() {},
        after: function after() {},
        end: function end() {},
        added: function added() {},
        removed: function removed() {},
        init: function init() {},
        rtl: !1
      }, $.fn.flexslider = function (e) {
        if (void 0 === e && (e = {}), "object" == _typeof(e)) return this.each(function () {
          var t = $(this),
              a = e.selector ? e.selector : ".slides > li",
              n = t.find(a);
          1 === n.length && !1 === e.allowOneSlide || 0 === n.length ? (n.fadeIn(400), e.start && e.start(t)) : void 0 === t.data("flexslider") && new $.flexslider(this, e);
        });
        var t = $(this).data("flexslider");

        switch (e) {
          case "play":
            t.play();
            break;

          case "pause":
            t.pause();
            break;

          case "stop":
            t.stop();
            break;

          case "next":
            t.flexAnimate(t.getTarget("next"), !0);
            break;

          case "prev":
          case "previous":
            t.flexAnimate(t.getTarget("prev"), !0);
            break;

          default:
            "number" == typeof e && t.flexAnimate(e, !0);
        }
      };
    }(jQuery);
  }
};
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../../../node_modules/timers-browserify/main.js */ "./node_modules/timers-browserify/main.js").setImmediate))

/***/ }),

/***/ "./assets/scss/app.scss":
/*!******************************!*\
  !*** ./assets/scss/app.scss ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./node_modules/process/browser.js":
/*!*****************************************!*\
  !*** ./node_modules/process/browser.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// shim for using process in browser
var process = module.exports = {};

// cached from whatever global is present so that test runners that stub it
// don't break things.  But we need to wrap it in a try catch in case it is
// wrapped in strict mode code which doesn't define any globals.  It's inside a
// function because try/catches deoptimize in certain engines.

var cachedSetTimeout;
var cachedClearTimeout;

function defaultSetTimout() {
    throw new Error('setTimeout has not been defined');
}
function defaultClearTimeout () {
    throw new Error('clearTimeout has not been defined');
}
(function () {
    try {
        if (typeof setTimeout === 'function') {
            cachedSetTimeout = setTimeout;
        } else {
            cachedSetTimeout = defaultSetTimout;
        }
    } catch (e) {
        cachedSetTimeout = defaultSetTimout;
    }
    try {
        if (typeof clearTimeout === 'function') {
            cachedClearTimeout = clearTimeout;
        } else {
            cachedClearTimeout = defaultClearTimeout;
        }
    } catch (e) {
        cachedClearTimeout = defaultClearTimeout;
    }
} ())
function runTimeout(fun) {
    if (cachedSetTimeout === setTimeout) {
        //normal enviroments in sane situations
        return setTimeout(fun, 0);
    }
    // if setTimeout wasn't available but was latter defined
    if ((cachedSetTimeout === defaultSetTimout || !cachedSetTimeout) && setTimeout) {
        cachedSetTimeout = setTimeout;
        return setTimeout(fun, 0);
    }
    try {
        // when when somebody has screwed with setTimeout but no I.E. maddness
        return cachedSetTimeout(fun, 0);
    } catch(e){
        try {
            // When we are in I.E. but the script has been evaled so I.E. doesn't trust the global object when called normally
            return cachedSetTimeout.call(null, fun, 0);
        } catch(e){
            // same as above but when it's a version of I.E. that must have the global object for 'this', hopfully our context correct otherwise it will throw a global error
            return cachedSetTimeout.call(this, fun, 0);
        }
    }


}
function runClearTimeout(marker) {
    if (cachedClearTimeout === clearTimeout) {
        //normal enviroments in sane situations
        return clearTimeout(marker);
    }
    // if clearTimeout wasn't available but was latter defined
    if ((cachedClearTimeout === defaultClearTimeout || !cachedClearTimeout) && clearTimeout) {
        cachedClearTimeout = clearTimeout;
        return clearTimeout(marker);
    }
    try {
        // when when somebody has screwed with setTimeout but no I.E. maddness
        return cachedClearTimeout(marker);
    } catch (e){
        try {
            // When we are in I.E. but the script has been evaled so I.E. doesn't  trust the global object when called normally
            return cachedClearTimeout.call(null, marker);
        } catch (e){
            // same as above but when it's a version of I.E. that must have the global object for 'this', hopfully our context correct otherwise it will throw a global error.
            // Some versions of I.E. have different rules for clearTimeout vs setTimeout
            return cachedClearTimeout.call(this, marker);
        }
    }



}
var queue = [];
var draining = false;
var currentQueue;
var queueIndex = -1;

function cleanUpNextTick() {
    if (!draining || !currentQueue) {
        return;
    }
    draining = false;
    if (currentQueue.length) {
        queue = currentQueue.concat(queue);
    } else {
        queueIndex = -1;
    }
    if (queue.length) {
        drainQueue();
    }
}

function drainQueue() {
    if (draining) {
        return;
    }
    var timeout = runTimeout(cleanUpNextTick);
    draining = true;

    var len = queue.length;
    while(len) {
        currentQueue = queue;
        queue = [];
        while (++queueIndex < len) {
            if (currentQueue) {
                currentQueue[queueIndex].run();
            }
        }
        queueIndex = -1;
        len = queue.length;
    }
    currentQueue = null;
    draining = false;
    runClearTimeout(timeout);
}

process.nextTick = function (fun) {
    var args = new Array(arguments.length - 1);
    if (arguments.length > 1) {
        for (var i = 1; i < arguments.length; i++) {
            args[i - 1] = arguments[i];
        }
    }
    queue.push(new Item(fun, args));
    if (queue.length === 1 && !draining) {
        runTimeout(drainQueue);
    }
};

// v8 likes predictible objects
function Item(fun, array) {
    this.fun = fun;
    this.array = array;
}
Item.prototype.run = function () {
    this.fun.apply(null, this.array);
};
process.title = 'browser';
process.browser = true;
process.env = {};
process.argv = [];
process.version = ''; // empty string to avoid regexp issues
process.versions = {};

function noop() {}

process.on = noop;
process.addListener = noop;
process.once = noop;
process.off = noop;
process.removeListener = noop;
process.removeAllListeners = noop;
process.emit = noop;
process.prependListener = noop;
process.prependOnceListener = noop;

process.listeners = function (name) { return [] }

process.binding = function (name) {
    throw new Error('process.binding is not supported');
};

process.cwd = function () { return '/' };
process.chdir = function (dir) {
    throw new Error('process.chdir is not supported');
};
process.umask = function() { return 0; };


/***/ }),

/***/ "./node_modules/setimmediate/setImmediate.js":
/*!***************************************************!*\
  !*** ./node_modules/setimmediate/setImmediate.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(global, process) {(function (global, undefined) {
    "use strict";

    if (global.setImmediate) {
        return;
    }

    var nextHandle = 1; // Spec says greater than zero
    var tasksByHandle = {};
    var currentlyRunningATask = false;
    var doc = global.document;
    var registerImmediate;

    function setImmediate(callback) {
      // Callback can either be a function or a string
      if (typeof callback !== "function") {
        callback = new Function("" + callback);
      }
      // Copy function arguments
      var args = new Array(arguments.length - 1);
      for (var i = 0; i < args.length; i++) {
          args[i] = arguments[i + 1];
      }
      // Store and register the task
      var task = { callback: callback, args: args };
      tasksByHandle[nextHandle] = task;
      registerImmediate(nextHandle);
      return nextHandle++;
    }

    function clearImmediate(handle) {
        delete tasksByHandle[handle];
    }

    function run(task) {
        var callback = task.callback;
        var args = task.args;
        switch (args.length) {
        case 0:
            callback();
            break;
        case 1:
            callback(args[0]);
            break;
        case 2:
            callback(args[0], args[1]);
            break;
        case 3:
            callback(args[0], args[1], args[2]);
            break;
        default:
            callback.apply(undefined, args);
            break;
        }
    }

    function runIfPresent(handle) {
        // From the spec: "Wait until any invocations of this algorithm started before this one have completed."
        // So if we're currently running a task, we'll need to delay this invocation.
        if (currentlyRunningATask) {
            // Delay by doing a setTimeout. setImmediate was tried instead, but in Firefox 7 it generated a
            // "too much recursion" error.
            setTimeout(runIfPresent, 0, handle);
        } else {
            var task = tasksByHandle[handle];
            if (task) {
                currentlyRunningATask = true;
                try {
                    run(task);
                } finally {
                    clearImmediate(handle);
                    currentlyRunningATask = false;
                }
            }
        }
    }

    function installNextTickImplementation() {
        registerImmediate = function(handle) {
            process.nextTick(function () { runIfPresent(handle); });
        };
    }

    function canUsePostMessage() {
        // The test against `importScripts` prevents this implementation from being installed inside a web worker,
        // where `global.postMessage` means something completely different and can't be used for this purpose.
        if (global.postMessage && !global.importScripts) {
            var postMessageIsAsynchronous = true;
            var oldOnMessage = global.onmessage;
            global.onmessage = function() {
                postMessageIsAsynchronous = false;
            };
            global.postMessage("", "*");
            global.onmessage = oldOnMessage;
            return postMessageIsAsynchronous;
        }
    }

    function installPostMessageImplementation() {
        // Installs an event handler on `global` for the `message` event: see
        // * https://developer.mozilla.org/en/DOM/window.postMessage
        // * http://www.whatwg.org/specs/web-apps/current-work/multipage/comms.html#crossDocumentMessages

        var messagePrefix = "setImmediate$" + Math.random() + "$";
        var onGlobalMessage = function(event) {
            if (event.source === global &&
                typeof event.data === "string" &&
                event.data.indexOf(messagePrefix) === 0) {
                runIfPresent(+event.data.slice(messagePrefix.length));
            }
        };

        if (global.addEventListener) {
            global.addEventListener("message", onGlobalMessage, false);
        } else {
            global.attachEvent("onmessage", onGlobalMessage);
        }

        registerImmediate = function(handle) {
            global.postMessage(messagePrefix + handle, "*");
        };
    }

    function installMessageChannelImplementation() {
        var channel = new MessageChannel();
        channel.port1.onmessage = function(event) {
            var handle = event.data;
            runIfPresent(handle);
        };

        registerImmediate = function(handle) {
            channel.port2.postMessage(handle);
        };
    }

    function installReadyStateChangeImplementation() {
        var html = doc.documentElement;
        registerImmediate = function(handle) {
            // Create a <script> element; its readystatechange event will be fired asynchronously once it is inserted
            // into the document. Do so, thus queuing up the task. Remember to clean up once it's been called.
            var script = doc.createElement("script");
            script.onreadystatechange = function () {
                runIfPresent(handle);
                script.onreadystatechange = null;
                html.removeChild(script);
                script = null;
            };
            html.appendChild(script);
        };
    }

    function installSetTimeoutImplementation() {
        registerImmediate = function(handle) {
            setTimeout(runIfPresent, 0, handle);
        };
    }

    // If supported, we should attach to the prototype of global, since that is where setTimeout et al. live.
    var attachTo = Object.getPrototypeOf && Object.getPrototypeOf(global);
    attachTo = attachTo && attachTo.setTimeout ? attachTo : global;

    // Don't get fooled by e.g. browserify environments.
    if ({}.toString.call(global.process) === "[object process]") {
        // For Node.js before 0.9
        installNextTickImplementation();

    } else if (canUsePostMessage()) {
        // For non-IE10 modern browsers
        installPostMessageImplementation();

    } else if (global.MessageChannel) {
        // For web workers, where supported
        installMessageChannelImplementation();

    } else if (doc && "onreadystatechange" in doc.createElement("script")) {
        // For IE 6–8
        installReadyStateChangeImplementation();

    } else {
        // For older browsers
        installSetTimeoutImplementation();
    }

    attachTo.setImmediate = setImmediate;
    attachTo.clearImmediate = clearImmediate;
}(typeof self === "undefined" ? typeof global === "undefined" ? this : global : self));

/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js"), __webpack_require__(/*! ./../process/browser.js */ "./node_modules/process/browser.js")))

/***/ }),

/***/ "./node_modules/timers-browserify/main.js":
/*!************************************************!*\
  !*** ./node_modules/timers-browserify/main.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(global) {var scope = (typeof global !== "undefined" && global) ||
            (typeof self !== "undefined" && self) ||
            window;
var apply = Function.prototype.apply;

// DOM APIs, for completeness

exports.setTimeout = function() {
  return new Timeout(apply.call(setTimeout, scope, arguments), clearTimeout);
};
exports.setInterval = function() {
  return new Timeout(apply.call(setInterval, scope, arguments), clearInterval);
};
exports.clearTimeout =
exports.clearInterval = function(timeout) {
  if (timeout) {
    timeout.close();
  }
};

function Timeout(id, clearFn) {
  this._id = id;
  this._clearFn = clearFn;
}
Timeout.prototype.unref = Timeout.prototype.ref = function() {};
Timeout.prototype.close = function() {
  this._clearFn.call(scope, this._id);
};

// Does not start the time, just sets up the members needed.
exports.enroll = function(item, msecs) {
  clearTimeout(item._idleTimeoutId);
  item._idleTimeout = msecs;
};

exports.unenroll = function(item) {
  clearTimeout(item._idleTimeoutId);
  item._idleTimeout = -1;
};

exports._unrefActive = exports.active = function(item) {
  clearTimeout(item._idleTimeoutId);

  var msecs = item._idleTimeout;
  if (msecs >= 0) {
    item._idleTimeoutId = setTimeout(function onTimeout() {
      if (item._onTimeout)
        item._onTimeout();
    }, msecs);
  }
};

// setimmediate attaches itself to the global object
__webpack_require__(/*! setimmediate */ "./node_modules/setimmediate/setImmediate.js");
// On some exotic environments, it's not clear which object `setimmediate` was
// able to install onto.  Search each possibility in the same order as the
// `setimmediate` library.
exports.setImmediate = (typeof self !== "undefined" && self.setImmediate) ||
                       (typeof global !== "undefined" && global.setImmediate) ||
                       (this && this.setImmediate);
exports.clearImmediate = (typeof self !== "undefined" && self.clearImmediate) ||
                         (typeof global !== "undefined" && global.clearImmediate) ||
                         (this && this.clearImmediate);

/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js")))

/***/ }),

/***/ "./node_modules/webpack/buildin/global.js":
/*!***********************************!*\
  !*** (webpack)/buildin/global.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var g;

// This works in non-strict mode
g = (function() {
	return this;
})();

try {
	// This works if eval is allowed (see CSP)
	g = g || new Function("return this")();
} catch (e) {
	// This works if the window reference is available
	if (typeof window === "object") g = window;
}

// g can still be undefined, but nothing to do about it...
// We return undefined, instead of nothing here, so it's
// easier to handle this case. if(!global) { ...}

module.exports = g;


/***/ }),

/***/ 0:
/*!*******************************************************!*\
  !*** multi ./assets/js/app.js ./assets/scss/app.scss ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/elton/LocalRepos/ingeniewordpress/app/public/wp-content/themes/ingenie2020/assets/js/app.js */"./assets/js/app.js");
module.exports = __webpack_require__(/*! /Users/elton/LocalRepos/ingeniewordpress/app/public/wp-content/themes/ingenie2020/assets/scss/app.scss */"./assets/scss/app.scss");


/***/ })

/******/ });