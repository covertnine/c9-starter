	if (jQuery(window).width() <= 667) {

		//use small nav for mobile
		jQuery('.navbar').addClass('navbar-small');

		jQuery(window).scroll(function () {

			//scroll position variable
			var scroll = jQuery(window).scrollTop();

			if (scroll >=168) {
				jQuery('.navbar').addClass('opacity0');
			}
			if (scroll <=167) {
				jQuery('.navbar').removeClass('opacity0');
			}

		    if (scroll >= 218) {
			    jQuery('.navbar').addClass('fixed-top opacity100');
			    jQuery('.header-navbar').addClass('jumpfix'); //accounts for position-fixed CSS change
		    }
		    if (scroll <= 217) {
			    jQuery('.navbar').removeClass('fixed-top opacity100');
			    jQuery('.header-navbar').removeClass('jumpfix'); //remove extra classes and put navs back at top
		    }
		});

	} else { //end small screens

		jQuery(window).scroll(function () {

		    var scroll = jQuery(window).scrollTop();
		    if (scroll >=168) {
				jQuery('.navbar').addClass('opacity0');
			}
			if (scroll <=167) {
				jQuery('.navbar').removeClass('opacity0');
			}


		    if (scroll >= 218) {
			    jQuery('.navbar').addClass('navbar-small fixed-top opacity100'); //shrink nav and fix it to top
			    jQuery('.header-navbar').addClass('jumpfix');
		    }
		    if (scroll <= 217) {
			    jQuery('.navbar').removeClass('navbar-small fixed-top opacity100'); //expand nav and remove fixed
			    jQuery('.header-navbar').removeClass('jumpfix');
		    }

		});

	} //end regular