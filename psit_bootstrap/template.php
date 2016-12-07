<?php

/**
 * @file
 * The primary PHP file for this theme.
 */

/**
 * Include WordPress helper function.
 */
include_once './' . drupal_get_path('theme', 'psit_bootstrap') . '/includes/wordpress.inc';

/**
 * Implements theme_preprocess_html().
 */
function psit_bootstrap_preprocess_html(&$variables) {
  // Add legacy classes.
  $theme_path = drupal_get_path('theme', 'psit_bootstrap');
  drupal_add_js(['pathToTheme' => $theme_path], 'setting');
  if (drupal_is_front_page()) {
    $variables['classes_array'][] = drupal_html_class('home');
  }
}

/**
 * Implements hook_form_alter().
 */
function psit_bootstrap_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id === 'search_api_page_search_form_default_search') {
    // Modify placeholder text in search field.
    $form['keys_1']['#title'] = t('Search');
    $form['keys_1']['#attributes']['placeholder'] = t('Search...');
  }
}

/**
 * Implements hook_js_alter().
 */
function psit_bootstrap_js_alter(&$javascript) {
  // Use updated jQuery library on all but some paths.
  $node_admin_paths = [
    'node/*/edit',
    'node/add',
    'node/add/*',
  ];
  $replace_jquery = TRUE;
  if (path_is_admin(current_path())) {
    $replace_jquery = FALSE;
  }
  else {
    foreach ($node_admin_paths as $node_admin_path) {
      if (drupal_match_path(current_path(), $node_admin_path)) {
        $replace_jquery = FALSE;
      }
    }
  }
  // Swap out jQuery to use an updated version of the library.
  if ($replace_jquery) {
    $javascript['misc/jquery.js']['data'] = drupal_get_path('theme', 'psit_bootstrap') . '/js/jquery.min.js';
  }
}

/**
 * Implements hook_preprocess_entity().
 */
function psit_bootstrap_preprocess_entity(&$variables, $hook) {
  // Enable use of function psit_bootstrap_preprocess_entity_[entity_type]().
  $function = __FUNCTION__ . '_' . $variables['entity_type'];
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}

/**
 * Override or insert variables into the bean templates.
 */
function psit_bootstrap_preprocess_entity_bean(&$vars) {
  global $base_root;
  $bean = $vars['bean'];

  if ($bean->delta === 'psit-categories-quick-links') {
    $vocab = taxonomy_vocabulary_machine_name_load('category');
    $tree = taxonomy_get_tree($vocab->vid);
    dpm($vars);
    foreach ($tree as $term) {

    }
    $vars['content'] = [
      '#markup' => 'test this',
    ];
  }

  // Add javascript for 'assess your ideas' form.
  if ($bean->delta === 'psit_assessing_your_idea_bean') {
    drupal_add_js(drupal_get_path('theme', 'psit_bootstrap') . '/build/js-contrib/jquery.form-field-values.js', 'file');
    drupal_add_js(drupal_get_path('theme', 'psit_bootstrap') . '/build/js-contrib/psit-ideas.js', 'file');
  }

  // Add javascript for 'diagnostic tool' form.
  if ($bean->delta === 'psit_diagnostic_tool_bean') {
    drupal_add_js(drupal_get_path('theme', 'psit_bootstrap') . '/build/js-contrib/jquery.form-field-values.js', 'file');
    drupal_add_js(drupal_get_path('theme', 'psit_bootstrap') . '/build/js-contrib/jquery.smooth-scroll.min.js', 'file');
    drupal_add_js(drupal_get_path('theme', 'psit_bootstrap') . '/build/js-contrib/jquery.browser.min.js', 'file');
    drupal_add_library('system', 'ui.dialog');
    drupal_add_js(drupal_get_path('theme', 'psit_bootstrap') . '/build/js-contrib/psit-diagnostic-tool.js', 'file');
  }

  if ($bean->delta === 'psit_share_it_bean') {
    // Generate social media share links in share it block.
    $current_page = $base_root . '/' . drupal_get_path_alias();
    $links = [
      [
        'type' => 'facebook',
        'title' => t('Facebook'),
        'url' => 'http://www.facebook.com/sharer.php?u=' . $current_page,
      ],
      [
        'type' => 'twitter',
        'title' => t('Twitter'),
        'url' => 'http://twitter.com/home/?status=' . $current_page,
      ],
      [
        'type' => 'email',
        'title' => t('Email'),
        'url' => 'mailto:?subject=Public+Sector+Innovation+Toolkit&amp;body=' . $current_page,
      ],
      [
        'type' => 'rss',
        'title' => t('RSS'),
        'url' => '/feed',
      ],
    ];

    // Make sure is no existing content.
    $vars['content'] = [];

    foreach ($links as $link) {
      $vars['content'][$link['type']] = [
        '#theme' => 'link',
        '#text' => $link['title'],
        '#path' => $link['url'],
        '#options' => [
          'attributes' => [
            'title' => $link['title'],
            'class' => [
              $link['type'],
            ],
          ],
          'html' => FALSE,
        ],
      ];
    }
  }
}

/**
 * Implements template_preprocess_views_view().
 */
function psit_bootstrap_preprocess_views_view(&$vars) {
  $view = $vars['view'];
  if ($view->name === 'psit_homepage_hero') {
    // Add javascript for accordion behaviour.
    drupal_add_js(drupal_get_path('theme', 'psit_bootstrap') . '/build/js-contrib/jquery.accordion.js', 'file');
    drupal_add_js(drupal_get_path('theme', 'psit_bootstrap') . '/build/js-contrib/psit-accordion.js', 'file');
  }

  if ($view->name === 'psit_categories_quick_links') {
    // Add javascript for categories quicklinks behaviour.
    drupal_add_js(drupal_get_path('theme', 'psit_bootstrap') . '/build/js-contrib/psit-category-quicklinks.js', 'file');
  }
}

/**
 * Implements template_preprocess_views_view_fields().
 */
function psit_bootstrap_preprocess_views_view_fields(&$vars) {
  $view = $vars['view'];
  if ($view->name === 'psit_homepage_hero') {
    // Set alt tag on image to slide title.
    $vars['row']->field_field_slide_image[0]['rendered']['#item']['alt'] = check_plain($vars['row']->node_title);
  }

  // Create <option> parameters for categories quick links.
  if ($view->name === 'psit_categories_quick_links') {
    $node_count = $vars['row']->taxonomy_term_data_name_1;
    $path = url('taxonomy/term/' . $vars['row']->tid);
    $term_name = $vars['row']->taxonomy_term_data_name;
    $vars['custom']['text'] = $term_name . ' (' . $node_count . ')';
    $vars['custom']['path'] = $path;
    $vars['custom']['tid'] = $vars['row']->tid;
  }

  // Rewrite title field link to use link field url if present.
  if ($view->name === 'psit_events' && $view->current_display === 'psit_view__psit_events__front') {
    $fields = $vars['fields'];

    if (!empty($fields['field_psit_event_link'])) {
      $title_text = check_plain($vars['fields']['title']->raw);
      $vars['fields']['title']->content = l($title_text, $fields['field_psit_event_link']->content);
    }
  }
}

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
function psit_bootstrap_preprocess_node(&$variables, $hook) {
  // Add pubdate to submitted variable.
  $variables['pubdate'] = '<time pubdate datetime="' . format_date($variables['node']->created, 'custom', 'c') . '">' . $variables['date'] . '</time>';
  if ($variables['display_submitted']) {
    $variables['submitted_by'] = t('Submitted by !username', array('!username' => $variables['name']));
    $variables['submitted_on'] = t('on !datetime', array('!datetime' => $variables['pubdate']));
  }
}

/**
 * Preprocess the field.
 *
 * @param $vars
 */
function psit_bootstrap_preprocess_field(&$vars) {
  $function = 'psit_bootstrap_preprocess_field__' . $vars['element']['#field_name'];
  if (function_exists($function)) {
    $function($vars);
  }
}

/**
 * Preprocess the body field.
 *
 * @param $vars
 */
function psit_bootstrap_preprocess_field__body(&$vars) {
  // Process custom tokens.
  if (!empty($vars['items'][0]['#markup'])) {
    $content = $vars['items'][0]['#markup'];
    $content = _govstrap_custom_token_process($content);
    $vars['items'][0]['#markup'] = token_replace($content);
  }
}

/**
 * Scan custom token.
 *
 * @param $text
 * @return mixed
 */
function _govstrap_custom_token_process($text) {
  $tokens = _govstrap_custom_tokens();

  if (FALSE === strpos($text, '[')) {
    return $text;
  }

  // Find all registered tag names in $content.
  preg_match_all('@\[([^<>&/\[\]\x00-\x20=]++)@', $text, $matches);
  $tags = array_intersect(array_keys($tokens), $matches[1]);

  // Return if no tag found.
  if (empty($tags)) {
    return $text;
  }

  $pattern = get_shortcode_regex($tags);

  $text = preg_replace_callback("/$pattern/", '_govstrap_custom_token_callback', $text);

  return $text;
}

/**
 * Process custom token callback.
 */
function _govstrap_custom_token_callback($m) {
  $tokens = _govstrap_custom_tokens();

  // allow [[foo]] syntax for escaping a tag
  if ($m[1] == '[' && $m[6] == ']') {
    return substr($m[0], 1, -1);
  }

  $tag = $m[2];
  $attr = shortcode_parse_atts($m[3]);

  if (!is_callable($tokens[$tag])) {
    return $m[0];
  }

  if (isset($m[5])) {
    // enclosing tag - extra parameter
    return $m[1] . call_user_func($tokens[$tag], $attr, $m[5], $tag) . $m[6];
  }
  else {
    // self-closing tag
    return $m[1] . call_user_func($tokens[$tag], $attr, NULL, $tag) . $m[6];
  }
}

/**
 * List of custom tokens.
 *
 * @return array
 */
function _govstrap_custom_tokens() {
  return array(
    'caption' => '_govstrap_custom_token_caption',
    'gallery' => '_govstrap_custom_token_gallery',
  );
}

/**
 * WordPress caption token callback.
 *
 * @param $attr
 * @param null $extras
 * @param $tag
 */
function _govstrap_custom_token_caption($attr, $extras = NULL, $tag) {
  $output = '<div class="caption">';
  $output .= $extras;
  $output .= "</div>";

  return $output;
}

/**
 * WordPress gallery token callback.
 *
 * @param $attr
 * @param null $extras
 * @param $tag
 */
function _govstrap_custom_token_gallery($attr, $extras = NULL, $tag) {
  $output = '';

  return $output;
}
