jQuery(document).ready(function () {
	wp.customize.bind('ready', function () {
		wp.customize('c9_default_font', function (setting) {
			wp.customize.control('c9_heading_font', function (control) {
				var visibility = function () {
					if ('no' !== setting.get()) {
						control.container.slideDown(180);
					} else {
						control.container.slideUp(180);
					}
				};
				visibility();
				setting.bind(visibility);
			});
			wp.customize.control('c9_subheading_font', function (control) {
				var visibility = function () {
					if ('no' !== setting.get()) {
						control.container.slideDown(180);
					} else {
						control.container.slideUp(180);
					}
				};
				visibility();
				setting.bind(visibility);
			});
			wp.customize.control('c9_body_font', function (control) {
				var visibility = function () {
					if ('no' !== setting.get()) {
						control.container.slideDown(180);
					} else {
						control.container.slideUp(180);
					}
				};
				visibility();
				setting.bind(visibility);
			});
		});
	});
});
