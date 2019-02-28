const Parallax = require('parallax-js')

var scene = document.getElementById('scene');
var parallaxInstance = new Parallax(scene)
parallaxInstance.friction(0.2, 0.2);


(function ($) {

    "use strict";


    ///////////////////////// for putting wordpress galleries linked to images/videos in lightbox ////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $('.cortex-popup-video').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-zoom-in',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });


    $('.wp-block-gallery a[href$=".jpg"], .wp-block-gallery a[href$=".jpeg"], .wp-block-gallery a[href$=".png"], .wp-block-gallery a[href$=".gif, "], .cortex-popup').click(function (e) {

        e.preventDefault();

        var items = [];
        var firstItem = $(this).attr("href");

        items.push({
            src: firstItem
        });

        $(this).parent().parent().parent().find('a').each(function () {

            var imageLink = $(this).attr('href');
            items.push({
                src: imageLink
            });
        });

        $.magnificPopup.open({
            items: items,
            type: 'image',
            gallery: {
                enabled: true
            },
            mainClass: 'mfp-zoom-in',
            callbacks: {
                open: function () {
                    //overwrite default prev + next function. Add timeout for css3 crossfade animation
                    $.magnificPopup.instance.next = function () {
                        var self = this;
                        self.wrap.removeClass('mfp-image-loaded');
                        setTimeout(function () {
                            $.magnificPopup.proto.next.call(self);
                        }, 120);
                    }
                    $.magnificPopup.instance.prev = function () {
                        var self = this;
                        self.wrap.removeClass('mfp-image-loaded');
                        setTimeout(function () {
                            $.magnificPopup.proto.prev.call(self);
                        }, 120);
                    }
                },
                imageLoadComplete: function () {
                    var self = this;
                    setTimeout(function () {
                        self.wrap.addClass('mfp-image-loaded');
                    }, 16);
                }
            }
        });

    });
})(jQuery)