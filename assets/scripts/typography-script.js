// Typography script that will be used in conjuction with fonts parsed in by the
// admin-settings.php file.

// The handler set to this javascript file with the data it contains is named: 'selected-fonts'
// The fonts that the user selects (either defualt or manually selected), will all be parsed by the
// heading names of the specific fonts (heading_font/subheading_font/typography_presets)
// If user decided to use their own fonts (clicked no)

if (c9SelectedFonts.c9_default_font === "yes") {
	console.log(
		c9SelectedFonts.c9_heading_font,
		c9SelectedFonts.c9_subheading_font,
		c9SelectedFonts.c9_body_font
	);
	WebFont.load({
		google: {
			families: [
				c9SelectedFonts.c9_heading_font,
				c9SelectedFonts.c9_subheading_font,
				c9SelectedFonts.c9_body_font
			]
		}
	});
}
console.log(c9SelectedFonts);
