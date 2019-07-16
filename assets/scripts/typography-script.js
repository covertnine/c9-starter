//Typography script that will be used in conjuction with fonts parsed in by the
//admin-settings.php file.

<<<<<<< HEAD

//The handler set to this javascript file with the data it contains is named: 'selected-fonts'
//The fonts that the user selects (either defualt or manually selected), will all be parsed by the 
//heading names of the specific fonts (heading_font/subheading_font/typography_presets)

console.log(selectedFonts);
console.log("After selected fonts have been logged");


//If user decided to use their own fonts (clicked no)
//Use JQUERY
if (selectedFonts["defaultFont"] === "yes"){
WebFont.load({
    google: {
       families: [selectedFonts["heading_font"], selectedFonts["subheading_font"], selectedFonts["typography_presets"]]
    }
});
}

// //If user decided to use default fonts (clicked yes)
// else if (selectedFonts["defaultFont"] === "yes"){
//   selectedFonts["heading_font"] = "Droid Sans";
//   selectedFonts["subheading_font"] = "Droid Sans";
//   selectedFonts["typography_presets"] = "Droid Sans";
//   selectedFonts["typography_code"] = "";
 
//   WebFont.load({
//     google: {
//       families: [selectedFonts["heading_font"], selectedFonts["subheading_font"], selectedFonts["typography_presets"]]
//     }
//   });
// }
=======
//The handler set to this javascript file with the data it contains is named: 'selected-fonts'
//The fonts that the user selects (either defualt or manually selected), will all be parsed by the
//heading names of the specific fonts (heading_font/subheading_font/typography_presets)
//If user decided to use their own fonts (clicked no)
if (selectedFonts["defaultFont"] === "no") {
  WebFont.load({
    google: {
      families: [
        selectedFonts["heading_font"],
        selectedFonts["subheading_font"],
        selectedFonts["typography_presets"]
      ]
    }
  });
}

//If user decided to use default fonts (clicked yes)
else if (selectedFonts["defaultFont"] === "yes") {
  selectedFonts["heading_font"] = "Droid Sans";
  selectedFonts["subheading_font"] = "Droid Sans";
  selectedFonts["typography_presets"] = "Droid Sans";
  selectedFonts["typography_code"] = "";

  WebFont.load({
    google: {
      families: [
        selectedFonts["heading_font"],
        selectedFonts["subheading_font"],
        selectedFonts["typography_presets"]
      ]
    }
  });
}
>>>>>>> 1d9b23eedd05e401d2119b9e7aa193e7a60551b4
