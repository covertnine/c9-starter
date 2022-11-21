// Typography script that will be used in conjuction with fonts parsed in by the
// admin-settings.php file.

// The handler set to this javascript file with the data it contains is named: 'c9SelectedFonts'
// The fonts that the user selects (either defualt or manually selected), will all be parsed by the
// heading names of the specific fonts (heading_font/subheading_font/typography_presets)
// If user decided to use their own fonts (clicked no)

//check if the settings were actually set, if so push the font css
if ((c9SelectedFonts.c9_default_font === "yes") && (c9SelectedFonts.c9_font_list.length)) {
	WebFont.load({
		google: {
			families: c9SelectedFonts.c9_font_list
		},
		timeout: 8000 // Set the timeout to 8 seconds. Font may swap if webfont take longer than that.
	});
}
//console.log(c9SelectedFonts.c9_font_list);
