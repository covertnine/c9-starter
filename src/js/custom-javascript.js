	jQuery(window).scroll(function () {

	    var scroll = jQuery(window).scrollTop();

	    if (scroll >= 168) {
		    jQuery('.navbar').addClass('navbar-small fixed-top');
		    jQuery('.header-navbar').addClass('jumpfix');
	    }
	    if (scroll <= 167) {
		    jQuery('.navbar').removeClass('navbar-small fixed-top');
		    jQuery('.header-navbar').removeClass('jumpfix');
	    }

	});

	if (jQuery(window).width() <= 767) {

		jQuery('.navbar').addClass('navbar-small');

		// add class to top for mobile
		jQuery('.navbar-top').addClass('navbar-small-mobile');

	} //end small screens
