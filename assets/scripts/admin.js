"use strict";
(function($) {
  // Code Editor Javascript to accompany
  $(function() {
    //John Lynch : Code for Typography
    //The below code checks if Yes / No is checked for the Typography tab
    //If yes is clicked, all options are shown.
    //If no is clicked, all options are hidden. Hide is thrown twice so that if
    //the page is refreshed the contents will remain hidden
    //Start typography code : 
    $(document).ready(function() {});
    var modes = RegExp("(html|css|javascript)");
    if ($("#cortex_typography input[value='no']").is(':checked')){
      $("label[for='cortex_typography[heading_font]']").parents("tr").hide();
      $("label[for='cortex_typography[subheading_font]']").parents("tr").hide();
      $("label[for='cortex_typography[typography_presets]']").parents("tr").hide();
      }
    console.log("Doc ready");
    $("#cortex_typography input[value='no']").click(function() {
      if ($("#cortex_typography input[value='no']").is(':checked')){
      $("label[for='cortex_typography[heading_font]']").parents("tr").hide();
      $("label[for='cortex_typography[subheading_font]']").parents("tr").hide();
      $("label[for='cortex_typography[typography_presets]']").parents("tr").hide();
      }
      });
    $("#cortex_typography input[value='yes']").click(function() {
      $("label[for='cortex_typography[heading_font]']").parents("tr").show();
      $("label[for='cortex_typography[subheading_font]']").parents("tr").show();
      $("label[for='cortex_typography[typography_presets]']").parents("tr").show();
    });
    //End typography code : 

    //John Lynch : Refresh Prompt for changes
    //Code for checking if a user has submitted changes : prompts the user
    //if they are going to leave without saving those changes


    $("textarea[class^=code_editor_page_").each(function() {
      // pulls the class to determine type of editor
      if (
        $(this)
          .attr("class")
          .match(modes) !== null
      ) {
        var mode = $(this)
          .attr("class")
          .match(modes)[0];
      } else {
        mode = "html";
        console.log(
          "looks like you have something misconfigured in one of your 'code' fields. Did you correctly set the language?",
          $(this)
        );
      }
      var editorSettings = wp.codeEditor.defaultSettings
        ? _.clone(wp.codeEditor.defaultSettings)
        : {};
      editorSettings.codemirror = _.extend({}, editorSettings.codemirror, {
        indentUnit: 2,
        tabSize: 2,
        mode: mode
      });
      wp.codeEditor.initialize($(this), editorSettings);
    });
  });
})(jQuery);
