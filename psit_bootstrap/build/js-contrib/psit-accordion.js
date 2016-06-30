/**
 * @file
 * Script for creating frontpage accordion on PSIT site.
 */

(function ($) {
  // Quickfix for jQuery and jQuery UI compatibility issue. See:
  // http://stackoverflow.com/questions/12048271/jquery-ui-1-8-13-sudden-error
  $.curCSS = function (element, attrib, val) {
    $(element).css(attrib, val);
  };

  Drupal.behaviors.psitAccordion = {
    attach: function (context, settings) {
      $(document).ready(function() {
        if ($("ul.accordion li").length > 2) {
          $("ul.accordion").accordion();
        }
      });
    }
  };
})(jQuery);
