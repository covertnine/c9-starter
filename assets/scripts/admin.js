"use strict";
(function($) {
  // Code Editor Javascript to accompany
  $(function() {
    $(document).ready(function() {});
    var modes = RegExp("(html|css|javascript)");
    console.log("Doc ready");
    $("#cortex_typography input[value='no']").click(function() {
      $("label[for='cortex_typography[heading_font]']").hide();
    });
    $("#cortex_typography input[value='yes']").click(function() {
      $("label[for='cortex_typography[heading_font]']").show();
    });
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
