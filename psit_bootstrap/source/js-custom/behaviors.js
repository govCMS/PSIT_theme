/**
 * @file
 * Provides jQuery behaviors.
 */


(function ($) {
  /**
   * Test jQuery by adding a test="test" attribute to all anchor tags.
   */
  Drupal.behaviors.testLinks = {
    attach: function (context, settings) {
      // Add random background on breadcrumb.
      var breadcrumb_backgrounds = new Array('orange.png', 'aqua.png', 'green.png', 'pink.png', 'yellow.png');
      $('#breadcrumbWrap', context).css( 'background', 'url(/' + Drupal.settings.pathToTheme + '/images/banner-bg-' + breadcrumb_backgrounds[ Math.floor(Math.random() * breadcrumb_backgrounds.length) ] + ') no-repeat scroll center left #038FCD' );
    }
  };

})(jQuery);
