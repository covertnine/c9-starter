!(function(e) {
  var a = {};
  function r(t) {
    if (a[t]) return a[t].exports;
    var n = (a[t] = { i: t, l: !1, exports: {} });
    return e[t].call(n.exports, n, n.exports, r), (n.l = !0), n.exports;
  }
  (r.m = e),
    (r.c = a),
    (r.d = function(e, a, t) {
      r.o(e, a) || Object.defineProperty(e, a, { enumerable: !0, get: t });
    }),
    (r.r = function(e) {
      "undefined" != typeof Symbol &&
        Symbol.toStringTag &&
        Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }),
        Object.defineProperty(e, "__esModule", { value: !0 });
    }),
    (r.t = function(e, a) {
      if ((1 & a && (e = r(e)), 8 & a)) return e;
      if (4 & a && "object" == typeof e && e && e.__esModule) return e;
      var t = Object.create(null);
      if (
        (r.r(t),
        Object.defineProperty(t, "default", { enumerable: !0, value: e }),
        2 & a && "string" != typeof e)
      )
        for (var n in e)
          r.d(
            t,
            n,
            function(a) {
              return e[a];
            }.bind(null, n)
          );
      return t;
    }),
    (r.n = function(e) {
      var a =
        e && e.__esModule
          ? function() {
              return e.default;
            }
          : function() {
              return e;
            };
      return r.d(a, "a", a), a;
    }),
    (r.o = function(e, a) {
      return Object.prototype.hasOwnProperty.call(e, a);
    }),
    (r.p = ""),
    r((r.s = 0));
})([
  function(e, a) {
    jQuery(window).scroll(function() {
      var e = jQuery(window).scrollTop();
      e >= 633 &&
        (jQuery("#left-sidebar").addClass("fixed-sidebar"),
        jQuery("#right-sidebar").addClass("fixed-sidebar")),
        e <= 632 &&
          (jQuery("#left-sidebar").removeClass("fixed-sidebar"),
          jQuery("#right-sidebar").removeClass("fixed-sidebar"));
    }),
      jQuery(window).width() <= 667
        ? (jQuery(".navbar").addClass("navbar-small"),
          jQuery(window).scroll(function() {
            var e = jQuery(window).scrollTop();
            e >= 168 && jQuery(".navbar").addClass("opacity0"),
              e <= 167 && jQuery(".navbar").removeClass("opacity0"),
              e >= 218 &&
                (jQuery(".navbar").addClass("fixed-top opacity100"),
                jQuery(".header-navbar").addClass("jumpfix")),
              e <= 217 &&
                (jQuery(".navbar").removeClass("fixed-top opacity100"),
                jQuery(".header-navbar").removeClass("jumpfix"));
          }))
        : jQuery(window).scroll(function() {
            var e = jQuery(window).scrollTop();
            e >= 168 && jQuery(".navbar").addClass("opacity0"),
              e <= 167 && jQuery(".navbar").removeClass("opacity0"),
              e >= 218 &&
                (jQuery(".navbar").addClass(
                  "navbar-small fixed-top opacity100"
                ),
                jQuery(".header-navbar").addClass("jumpfix")),
              e <= 217 &&
                (jQuery(".navbar").removeClass(
                  "navbar-small fixed-top opacity100"
                ),
                jQuery(".header-navbar").removeClass("jumpfix"));
          }),
      (function(e) {
        "use strict";
        if (jQuery(window).width() > 667) {
          var a = e(".header-navbar").height();
          e("#page-wrapper").css("margin-top", -a);
        }
        e(".cortex-popup-video").magnificPopup({
          disableOn: 700,
          type: "iframe",
          mainClass: "mfp-zoom-in",
          removalDelay: 160,
          preloader: !1,
          fixedContentPos: !1
        }),
          e(
            '.wp-block-gallery a[href$=".jpg"], .wp-block-gallery a[href$=".jpeg"], .wp-block-gallery a[href$=".png"], .wp-block-gallery a[href$=".gif, "], .cortex-popup'
          ).click(function(a) {
            a.preventDefault();
            var r = [],
              t = e(this).attr("href"),
              n = e(this).attr("title");
            r.push({ src: t, title: n }),
              e(this)
                .parent()
                .parent()
                .nextAll()
                .children()
                .find("a")
                .each(function() {
                  var a = e(this).attr("href"),
                    t = e(this).attr("title");
                  r.push({ src: a, title: t });
                }),
              e(this)
                .parent()
                .parent()
                .prevAll()
                .children()
                .find("a")
                .each(function() {
                  var a = e(this).attr("href"),
                    t = e(this).attr("title");
                  r.push({ src: a, title: t });
                }),
              e.magnificPopup.open({
                items: r,
                type: "image",
                gallery: { enabled: !0 },
                mainClass: "mfp-zoom-in",
                callbacks: {
                  open: function() {
                    (e.magnificPopup.instance.next = function() {
                      var a = this;
                      a.wrap.removeClass("mfp-image-loaded"),
                        setTimeout(function() {
                          e.magnificPopup.proto.next.call(a);
                        }, 120);
                    }),
                      (e.magnificPopup.instance.prev = function() {
                        var a = this;
                        a.wrap.removeClass("mfp-image-loaded"),
                          setTimeout(function() {
                            e.magnificPopup.proto.prev.call(a);
                          }, 120);
                      });
                  },
                  imageLoadComplete: function() {
                    var e = this;
                    setTimeout(function() {
                      e.wrap.addClass("mfp-image-loaded");
                    }, 16);
                  }
                }
              });
          }),
          e(".btn-nav-search").on("click", function(a) {
            a.preventDefault(),
              e("#search").addClass("open"),
              e('#search > form > div > input[type="search"]').focus();
          }),
          e(
            "#search, #search .search-close, #search .search-close .fa-close"
          ).on("click keyup", function(a) {
            (a.target != this &&
              "search-close" != a.target.className &&
              27 != a.keyCode) ||
              (e(this).removeClass("open"),
              e(this)
                .parent()
                .removeClass("open"),
              e(this)
                .parent()
                .parent()
                .removeClass("open"));
          });
      })(jQuery);
  }
]);
