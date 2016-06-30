<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>

<div id="wrapper" class="hfeed">

  <div id="header">
    <div id="masthead">
      <div id="branding" role="banner">
        <div id="logo-and-description">
          <div id="site-logo">
            <?php if ($logo): ?>
              <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
              </a>
            <?php endif; ?>
          </div>
            <?php if (!empty($site_name)): ?>
              <div id="site-description">
              <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
              </div>
            <?php endif; ?>
        </div>
        <div id="search-and-shareOn">
          <?php print render($page['header']); ?>
        </div>
      </div>
      <div class="clearAll"></div>
      <div id="access" role="navigation">
        <div class="menu">
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <?php if (!empty($page['highlighted'])): ?>
    <div id="teaser"><?php print render($page['highlighted']); ?></div>
  <?php endif; ?>

  <div id="breadcrumbWrap">
    <div id="breadcrumb">
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
    </div>
  </div>

  <div class="container_12">

    <?php if (!empty($page['help'])): ?>
      <?php print render($page['help']); ?>
    <?php endif; ?>

    <div id="main_wrapper">
      <div id="main">
        <div <?php if ($is_front) { print 'class="container_12"'; } else { print 'id="container"'; } ?>>
          <div id="content" role="main">
            <a id="main-content"></a>
            <?php print render($title_prefix); ?>
            <?php if (!empty($title)): ?>
              <h1 class="page-header"><?php print $title; ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php print $messages; ?>
            <?php if (!empty($tabs)): ?>
              <?php print render($tabs); ?>
            <?php endif; ?>
            <?php if (!empty($action_links)): ?>
              <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            <?php print render($page['content']); ?>
            <?php if ($is_front): ?>
              <div id="content" role="main" class="homepage-panel-bg clearfix">
                <?php if (!empty($page['homepage_left'])): ?>
                  <?php print render($page['homepage_left']); ?>
                <?php endif; ?>
                <?php if (!empty($page['homepage_middle'])): ?>
                  <?php print render($page['homepage_middle']); ?>
                <?php endif; ?>
                <?php if (!empty($page['homepage_right'])): ?>
                  <?php print render($page['homepage_right']); ?>
                <?php endif; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>

        <?php if (!empty($page['sidebar_first']) || !empty($page['sidebar_second'])): ?>
          <div id="sidebar" class="widget-area" role="complementary">
            <?php endif; ?>

            <?php if (!empty($page['sidebar_first'])): ?>
              <?php print render($page['sidebar_first']); ?>
            <?php endif; ?>

            <?php if (!empty($page['sidebar_second'])): ?>
              <?php print render($page['sidebar_second']); ?>
            <?php endif; ?>

            <?php if (!empty($page['sidebar_first']) || !empty($page['sidebar_second'])): ?>
          </div>  <!-- /#sidebar-first /#sidebar-second -->
        <?php endif; ?>

      </div>
    </div>
  </div>

  <?php if (!empty($page['footer'])): ?>
    <footer class="footer <?php print $container_class; ?>">
      <?php print render($page['footer']); ?>
    </footer>
  <?php endif; ?>

</div>
