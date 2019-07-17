"use strict";
(function ($) {
  // Code Editor Javascript to accompany 
  $(function () {
    $(document).ready(function () {
      console.log("Doc ready");
      $("#wposa-cortex_typography[defaultFont][no]").click(function () {
        console.log("clicked!");
        $("toggle_test").toggle()
      });
    });
    var modes = RegExp("(html|css|javascript)");
    $("textarea[class^=code_editor_page_").each(function () {
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
