/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
jQuery(document).ready(function () {
  c9Page.init();
});

// eslint-disable-next-line vars-on-top
var c9Page = function ($) {
  var c9PageInit = {};
  c9PageInit.init = function () {
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////// Sidebars on some templates //////////////////////////////////////////////////

    jQuery(window).scroll(function () {
      //scroll position variable
      var scroll = jQuery(window).scrollTop();
      var heightDocument = $(document).height();
      var position = $(window).height() + $(window).scrollTop();
      if (133 <= scroll) {
        jQuery("#left-sidebar").addClass("fixed-sidebar");
        jQuery("#right-sidebar").addClass("fixed-sidebar");
      }
      if (132 >= scroll) {
        jQuery("#left-sidebar").removeClass("fixed-sidebar");
        jQuery("#right-sidebar").removeClass("fixed-sidebar");
      }
      if (0.001 >= (heightDocument - position) / heightDocument) {
        jQuery(".btn-back-to-top").css("opacity", "1").parent().css("z-index", "1050");
      } else {
        jQuery(".btn-back-to-top").css("opacity", "0").parent().css("z-index", "-1");
      }
    });

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////// Back to top ////////////////////////////////////////////////////////////////////////////
    $("#backtotop").on("click", ".btn-back-to-top", function (e) {
      e.preventDefault();
      window.scrollTo({
        'behavior': 'smooth',
        'top': 0
      });
      $(".btn-back-to-top").css("opacity", "0");
      $("#page").focus();
    });

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////// Mobile and desktop navigation classes //////////////////////////////////////////////////
    if (667 >= $(window).width()) {
      //use small nav for mobile
      $(".navbar").addClass("navbar-small");
      $("body").addClass("navbar-small");
      $(window).scroll(function () {
        //scroll position variable
        var scroll = $(window).scrollTop();
        if (288 <= scroll) {
          $(".navbar").addClass("opacity0");
        }
        if (287 >= scroll) {
          $(".navbar").removeClass("opacity0");
        }
        if (338 <= scroll) {
          $(".navbar").addClass("fixed-top opacity100");
          $(".header-navbar").addClass("jumpfix"); //accounts for position-fixed CSS change
        }

        if (337 >= scroll) {
          $(".navbar").removeClass("fixed-top opacity100");
          $(".header-navbar").removeClass("jumpfix"); //remove extra classes and put navs back at top
        }
      });
    } else {
      //end small screens so desktop next

      //var logoHeight = $(".c9-custom-logo").height();

      $(window).scroll(function () {
        //scroll position variable
        var scroll = $(window).scrollTop();
        if (168 <= scroll) {
          $(".navbar").addClass("opacity0");
        }
        if (167 >= scroll) {
          $(".navbar").removeClass("opacity0");
        }
        if (218 <= scroll) {
          $(".navbar").addClass("navbar-small fixed-top opacity100"); //shrink nav and fix it to top
          $(".header-navbar").addClass("jumpfix");
          $(".c9-blog-posts").addClass("fixed-top");
          //$(".header-navbar.jumpfix").css("height", "108px");
        }

        if (217 >= scroll) {
          $(".navbar").removeClass("navbar-small fixed-top opacity100"); //expand nav and remove fixed
          $(".header-navbar").removeClass("jumpfix");
          $(".c9-blog-posts").removeClass("fixed-top");
        }
      });
    } //end regular
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    ///////////////////////// for putting WordPress galleries linked to images/videos in lightbox ////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $(".cortex-popup-video,a.wp-block-button__link[href*='youtube.com'],a.wp-block-button__link[href*='vimeo.com'],a.wp-block-button__link[href*='maps.google.com']").magnificPopup({
      disableOn: 700,
      type: "iframe",
      mainClass: "mfp-zoom-in",
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false
    });
    $("a.wp-block-button__link[href*='youtu.be']").magnificPopup({
      type: "iframe",
      iframe: {
        patterns: {
          // eslint-disable-next-line camelcase
          youtube_short: {
            index: 'youtu.be/',
            id: 'youtu.be/',
            src: '//www.youtube.com/embed/%id%?autoplay=1'
          }
        }
      }
    });

    // default wordpress photo gallery bocks
    $('.wp-block-gallery .wp-block-image a[href$=".jpg"], .wp-block-gallery .wp-block-image a[href$=".jpeg"], .wp-block-gallery .wp-block-image a[href$=".png"], .wp-block-gallery .wp-block-image a[href$=".gif"], .gallery-item a').click(function (e) {
      e.preventDefault();

      // eslint-disable-next-line vars-on-top
      var items = [];
      // eslint-disable-next-line vars-on-top
      var firstItem = $(this).attr("href");
      // eslint-disable-next-line vars-on-top
      var firstCaption = $(this).children("img").attr("alt");
      items.push({
        src: firstItem,
        title: firstCaption
      });

      //items after
      $(this).parent().nextAll().find("a").each(function () {
        var imageLink = $(this).attr("href");
        var imageCaption = $(this).children("img").attr("alt");
        items.push({
          src: imageLink,
          title: imageCaption
        });
      });

      //items before
      $(this).parent().prevAll().find("a").each(function () {
        var imageLink = $(this).attr("href");
        var imageCaption = $(this).children("img").attr("alt");
        items.push({
          src: imageLink,
          title: imageCaption
        });
      });
      $.magnificPopup.open({
        items: items,
        type: "image",
        gallery: {
          enabled: true
        },
        image: {
          titleSrc: function (item) {
            return item.el.children("img").attr("alt");
          }
        },
        mainClass: "mfp-zoom-in",
        callbacks: {
          open: function () {
            //overwrite default prev + next function. Add timeout for css3 crossfade animation
            $.magnificPopup.instance.next = function () {
              var self = this;
              self.wrap.removeClass("mfp-image-loaded");
              setTimeout(function () {
                $.magnificPopup.proto.next.call(self);
              }, 120);
            };
            $.magnificPopup.instance.prev = function () {
              var self = this;
              self.wrap.removeClass("mfp-image-loaded");
              setTimeout(function () {
                $.magnificPopup.proto.prev.call(self);
              }, 120);
            };
          },
          imageLoadComplete: function () {
            var self = this;
            setTimeout(function () {
              self.wrap.addClass("mfp-image-loaded");
            }, 16);
          }
        }
      });
    });

    //single image magnific lightbox
    $('.wp-block-image a[href$=".jpg"],.wp-block-image a[href$=".jpeg"].wp-block-image a[href$=".png"].wp-block-image a[href$=".gif"]').magnificPopup({
      disableOn: 700,
      type: "image",
      mainClass: "mfp-zoom-in",
      tError: '<a href="%url%">The image</a> could not be loaded.',
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false
    });

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //////////////////////////////////////       full screen search        ///////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Will hold previously focused element
    // eslint-disable-next-line vars-on-top
    var focusedElementBeforeModal;
    // eslint-disable-next-line vars-on-top
    var modal = $("#fullscreensearch");

    //open modal for search
    $(".btn-nav-search").on("click", fullScreenSearch);
    function fullScreenSearch(e) {
      e.preventDefault();

      //refocus on this when closed
      focusedElementBeforeModal = document.activeElement;

      //listen for tab keying to trab tabs in modal
      $("body").on("keydown", modal, trapTabKey);

      // Find all focusable children
      // eslint-disable-next-line vars-on-top
      var focusableElements = 'a[href], input:not([disabled]), button:not([disabled])';
      focusableElements = document.querySelector('#fullscreensearch').querySelectorAll(focusableElements);

      // Convert NodeList to Array
      focusableElements = Array.prototype.slice.call(focusableElements);

      // eslint-disable-next-line vars-on-top
      var firstTabStop = focusableElements[0];
      // eslint-disable-next-line vars-on-top
      var lastTabStop = focusableElements[focusableElements.length - 1];
      $("#fullscreensearch").addClass("open");
      focusableElements[0].focus();
      function trapTabKey(e) {
        // Check for TAB key press
        if (9 === e.keyCode) {
          // SHIFT + TAB
          if (e.shiftKey) {
            if (document.activeElement === firstTabStop) {
              e.preventDefault();
              lastTabStop.focus();
            }

            // TAB
          } else {
            if (document.activeElement === lastTabStop) {
              e.preventDefault();
              firstTabStop.focus();
            }
          }
        }
      }
    } //end fullScreenSearch

    //close modal
    $("#fullscreensearch .search-close, #fullscreensearch .search-close .fa-close").on("click", function (e) {
      // if escape is hit or if search close is clicked
      if (e.target == this || "search-close" == e.target.className || 27 == e.keyCode) {
        $(this).removeClass("open");
        $(this).parent().removeClass("open");
        $(this).parent().parent().removeClass("open");
        focusedElementBeforeModal.focus();
      }
    });
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //////////////////////////////////////       Navbar Accessibility        /////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // Will hold previously focused element
    // eslint-disable-next-line vars-on-top
    var focusedElementBeforeNavbar;
    // eslint-disable-next-line vars-on-top
    var c9starterNavbar = $("#wrapper-navbar");
    $(".navbar-toggler").on("click", c9starterNavbarUse);
    function c9starterNavbarUse(e) {
      e.preventDefault();

      //listen for tab keying to trap tabs in navbar
      $("body").on("keydown", c9starterNavbar, trapTabKey);
      focusedElementBeforeNavbar = $(".btn-nav-search");

      // Find all focusable children
      // eslint-disable-next-line vars-on-top
      var focusableElements = 'a[href]:not(.custom-logo-link):not(.btn-nav-search):not(.nav-shop-link), input:not([disabled]):not(#searchsubmit):not(#s), button:not([disabled])';
      focusableElements = document.querySelector('#wrapper-navbar').querySelectorAll(focusableElements);

      // Convert NodeList to Array
      focusableElements = Array.prototype.slice.call(focusableElements);

      // eslint-disable-next-line vars-on-top
      var firstTabStop = focusableElements[0];
      // eslint-disable-next-line vars-on-top
      var lastTabStop = focusableElements[focusableElements.length - 1];
      focusableElements[0].focus();
      function trapTabKey(e) {
        // Check for TAB key press
        if (9 === e.keyCode) {
          // SHIFT + TAB
          if (e.shiftKey) {
            if (document.activeElement === firstTabStop) {
              e.preventDefault();
              lastTabStop.focus();
            }

            // TAB
          } else {
            if (document.activeElement === lastTabStop) {
              e.preventDefault();
              firstTabStop.focus();
            }
          }
        }
      }
    } //end c9starterNavbarUse

    //close navbar
    $('#wrapper-navbar').on("click", '.navbar-toggler[aria-expanded="true"]', function (e) {
      // if escape is hit or if search close is clicked
      if (e.target == this || ".navbar-toggler" == e.target.className || 27 == e.keyCode) {
        focusedElementBeforeNavbar.focus();
      }
    });
  };
  return c9PageInit;
}(jQuery);
/******/ })()
;