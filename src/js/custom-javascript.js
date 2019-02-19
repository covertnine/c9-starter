	jQuery(window).scroll(function () {

	    var scroll = jQuery(window).scrollTop();
	    var screenWidth = jQuery(window).width();

	    if (scroll >= 168) {
		    jQuery('.navbar').addClass('navbar-small fixed-top');
		    jQuery('.header-navbar').addClass('jumpfix');
	    }
	    if ((scroll <= 167) && (screenWidth >= 668)) {
		    jQuery('.navbar').removeClass('navbar-small fixed-top');
		    jQuery('.header-navbar').removeClass('jumpfix');
	    }

	});

	if (jQuery(window).width() <= 667) {

		jQuery('.navbar').addClass('navbar-small');

		// add class to top for mobile
		jQuery('.navbar-top').addClass('navbar-small-mobile');

	} //end small screens