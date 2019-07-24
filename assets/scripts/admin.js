"use strict";
(function($) {
  // Code Editor Javascript to accompany
  $(function() {

    //Start typography code : 
    // init the form when the document is ready or when the form is populated after an ajax call
  $(document).ready(function() {
    
  });

  
    /*
    John Lynch : Alert when not saved
    Code that will prompt the user to save the changes before moving
    through tabs or leaving the page. Will first get to work with refreshing
    the page/leaving the site, will then try to get it to work on each individual tab
    */

    //Two variables to initialize if the reload page / save changes
    //needs to be thrown to the user.
    
    var isDirty = false;
    var tabMoved = false;

    //If the user attempts to leave without submitting, error thrown
    $('.form-table').on('click', function() {
      isDirty = true;
    });
    
    //If the user selects submit button : no errors will be thrown
    $('.submit').on('click', function() {
      isDirty = false;
    });

    //This runs the onload function, so that Google Chrome can throw an alert if the user
    //navigates away from the page without saving changes
    window.onload = function() {
      window.addEventListener("beforeunload", function (e) {
        //The user has unsaved changes:
          if (isDirty === true) {
            isDirty = false;
            var confirmationMessage = 'It looks like you have been editing something. '
            + 'If you leave before saving, your changes will be lost.';
            (e || window.event).returnValue = confirmationMessage; //Gecko + IE
            return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
          }
          //The user has selected submit and has saved changes
          else if (isDirty === false) {
             alert('All changes saved...');
          }
      });
  }

  //Test code for the navigation tab within the Theme settings:
  //Check if the user has made a change, and alert them if they try
  //moving away from the tab to a new

  $('.nav-tab').click (function(e) {
    // e.preventDefault();
    // e.stopPropagation();
    // console.log(e.isPropagationStopped());
    tabMoved = true;
    console.log("Before the if statement")
    console.log(tabMoved);
    console.log(isDirty);
    if (isDirty === true && tabMoved === true) {
      //var currentTab = $(this).val(localStorage.getItem(this.id))[0];
      var test = window.confirm("You have unsaved changes...Continue without saving?")
      if (test === true) {
        //Let the user continue:

       } 
       else {
        // do other stuff
        e.preventDefault();
        e.stopPropagation();

      }
    }
    tabMoved = false;
    isDirty = false;
    console.log("After the if statement")
    console.log(tabMoved);
    console.log(isDirty);
  });
  
    var modes = RegExp("(html|css|javascript)");
    
    //John Lynch : Code for Typography
    //The below code checks if Yes / No is checked for the Typography tab
    //If yes is clicked, all options are shown.
    //If no is clicked, all options are hidden. Hide is thrown twice so that if
    //the page is refreshed the contents will remain hidden
    
    // Remove navigation prompt
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
  
    $("textarea[classs=code_editor_page_").each(function() {
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
