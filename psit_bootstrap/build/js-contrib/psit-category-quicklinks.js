/**
 * @file
 * Script for creating categories quicklinks switcher on PSIT site.
 */

(function ($) {
  // Quickfix for jQuery and jQuery UI compatibility issue. See:
  // http://stackoverflow.com/questions/12048271/jquery-ui-1-8-13-sudden-error
  $.curCSS = function (element, attrib, val) {
    $(element).css(attrib, val);
  };

  Drupal.behaviors.psitCatergoryQuicklinks = {
    attach: function (context, settings) {

      $(document).ready(function() {
        var $switcher = $('select[name="psit-category-switcher"]', context);

        // Redirect to relevant taxonomy term aggregation page on <select> change.
        $switcher.change(function (event) {
          var selected_option = $switcher.find(':selected').val();
          if (selected_option !== 'all') {
            var path = $switcher.find(':selected').attr('psit-taxonomy-path');
            window.location.href = path;
          }
        });
      });
    }
  };
})(jQuery);
