import "smoothState";
import "magnific-popup";

jQuery(document).ready(function() {

  (function($) {

    jQuery(window).scroll(function() {
      //scroll position variable
      var scroll = jQuery(window).scrollTop();

      if (scroll >= 633) {
        jQuery("#left-sidebar").addClass("fixed-sidebar");
        jQuery("#right-sidebar").addClass("fixed-sidebar");
      }
      if (scroll <= 632) {
        jQuery("#left-sidebar").removeClass("fixed-sidebar");
        jQuery("#right-sidebar").removeClass("fixed-sidebar");
      }
    });
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////// Mobile and desktop navigation classes //////////////////////////////////////////////////
    if (jQuery(window).width() <= 667) {
      // var Parallax = require('parallax-js')
      // var scene = document.getElementById('wrapper-footer-full');
      // var parallaxInstance = new Parallax(scene);

      //use small nav for mobile
      jQuery(".navbar").addClass("navbar-small");

      jQuery(window).scroll(function() {
        //scroll position variable
        var scroll = jQuery(window).scrollTop();

        if (scroll >= 168) {
          jQuery(".navbar").addClass("opacity0");
        }
        if (scroll <= 167) {
          jQuery(".navbar").removeClass("opacity0");
        }

        if (scroll >= 218) {
          jQuery(".navbar").addClass("fixed-top opacity100");
          jQuery(".header-navbar").addClass("jumpfix"); //accounts for position-fixed CSS change
        }
        if (scroll <= 217) {
          jQuery(".navbar").removeClass("fixed-top opacity100");
          jQuery(".header-navbar").removeClass("jumpfix"); //remove extra classes and put navs back at top
        }
      });
    } else {
      //end small screens so desktop next

      jQuery(window).scroll(function() {
        //scroll position variable
        var scroll = jQuery(window).scrollTop();

        if (scroll >= 168) {
          jQuery(".navbar").addClass("opacity0");
        }
        if (scroll <= 167) {
          jQuery(".navbar").removeClass("opacity0");
        }

        if (scroll >= 218) {
          jQuery(".navbar").addClass("navbar-small fixed-top opacity100"); //shrink nav and fix it to top
          jQuery(".header-navbar").addClass("jumpfix");
        }
        if (scroll <= 217) {
          jQuery(".navbar").removeClass("navbar-small fixed-top opacity100"); //expand nav and remove fixed
          jQuery(".header-navbar").removeClass("jumpfix");
        }
      });
    } //end regular
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    ///////////////////////// Move the content up by the height of the navbar object for a transparent nav effect ////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    if ($(window).width() > 667) {
      //   var navHeight = $(".header-navbar").height();
      //   $("#page-wrapper").css("margin-top", -navHeight);
    }

    ///////////////////////// for putting wordpress galleries linked to images/videos in lightbox ////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    if ($(".cortex-popup-video").length) {
      $(".cortex-popup-video").magnificPopup({
        disableOn: 700,
        type: "iframe",
        mainClass: "mfp-zoom-in",
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
      });
    }

    $(
      '.wp-block-gallery a[href$=".jpg"], .wp-block-gallery a[href$=".jpeg"], .wp-block-gallery a[href$=".png"], .wp-block-gallery a[href$=".gif, "], .cortex-popup'
    ).click(function(e) {
      e.preventDefault();

      var items = [];
      var firstItem = $(this).attr("href");
      var firstCaption = $(this).attr("title");

      items.push({
        src: firstItem,
        title: firstCaption
      });

      //items after
      $(this)
        .parent()
        .parent()
        .nextAll()
        .children()
        .find("a")
        .each(function() {
          var imageLink = $(this).attr("href");
          var imageCaption = $(this).attr("title");
          items.push({
            src: imageLink,
            title: imageCaption
          });
        });

      //items before
      $(this)
        .parent()
        .parent()
        .prevAll()
        .children()
        .find("a")
        .each(function() {
          var imageLink = $(this).attr("href");
          var imageCaption = $(this).attr("title");
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
        mainClass: "mfp-zoom-in",
        callbacks: {
          open: function() {
            //overwrite default prev + next function. Add timeout for css3 crossfade animation
            $.magnificPopup.instance.next = function() {
              var self = this;
              self.wrap.removeClass("mfp-image-loaded");
              setTimeout(function() {
                $.magnificPopup.proto.next.call(self);
              }, 120);
            };
            $.magnificPopup.instance.prev = function() {
              var self = this;
              self.wrap.removeClass("mfp-image-loaded");
              setTimeout(function() {
                $.magnificPopup.proto.prev.call(self);
              }, 120);
            };
          },
          imageLoadComplete: function() {
            var self = this;
            setTimeout(function() {
              self.wrap.addClass("mfp-image-loaded");
            }, 16);
          }
        }
      });
    });

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //////////////////////////////////////       full screen search        ///////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $(".btn-nav-search").on("click", function(e) {
      e.preventDefault();
      $("#search").addClass("open");
      $('#search > form > div > input[type="search"]').focus();
    });

    $("#search, #search .search-close, #search .search-close .fa-close").on(
      "click keyup",
      function(e) {
        if (
          e.target == this ||
          e.target.className == "search-close" ||
          e.keyCode == 27
        ) {
          $(this).removeClass("open");
          $(this)
            .parent()
            .removeClass("open");
          $(this)
            .parent()
            .parent()
            .removeClass("open");
        }
      }
    );
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  })(jQuery);
});
