<?php
/**
 * @file
 * Theme functions
 */

// Include all files from the includes directory.
$includes_path = dirname(__FILE__) . '/includes/*.inc';
foreach (glob($includes_path) as $filename) {
  require_once dirname(__FILE__) . '/includes/' . basename($filename);
}

function ipbes_new_form_views_exposed_form_alter(&$form, &$form_state, $form_id) {
  if (isset($form['search_api_views_fulltext'])) {
    $form['search_api_views_fulltext']['#attributes']['placeholder'] = t('Enter search terms');
  }
   if (isset($form['combine'])) {
      $form['combine']['#attributes']['placeholder'] = t('Enter search terms');}
}

function ipbes_new_preprocess_views_exposed_form(&$vars, $hook) {
    // Change the text on the submit button
    $vars['form']['submit']['#value'] = t('Search');

    // Rebuild the rendered version (submit button, rest remains unchanged)
    unset($vars['form']['submit']['#printed']);
    $vars['button'] = drupal_render($vars['form']['submit']);
}

?>
