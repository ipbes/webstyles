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

// Add permalink to comments
function ipbes_new_preprocess_comment(&$variables){

  /* Easy links to the comment and parent node */
  $comment = $variables['comment'];
  $node = node_load($comment->nid);
  $variables['first_post'] = $node;

  // Set the post ID for theming / targetting
  $variables['post_id'] = "post-$comment->cid";

  /* Linked post number */
  if (!isset($post_number)) {
    static $post_number = 1;
  }

  $posts_per_page = variable_get('comment_default_per_page_' . $node->type, 50);

  $page_number = !empty($_GET['page']) ? $_GET['page'] : 0;
  if (!$page_number) {
    $page_number = 0;
  }

  $post_number++;

  $linktext = '#' . (($page_number * $posts_per_page) + $post_number);

  // Permalink
  //  You can erase next 3 lines if you wish to use built-in Permalink.
  //  Template adjusted: $post_link -> $permalink
  $uri = entity_uri('comment', $comment);
  $uri['options'] += array('attributes' => array('class' => 'permalink', 'rel' => 'bookmark'));
  $variables['permalink'] = l($linktext, $uri['path'], $uri['options']);

}
function ipbes_new_preprocess_page(&$variables) {
  $path = current_path();
  $aliaspath = drupal_get_path_alias();
  $alias = explode("/", $aliaspath);
  if(($alias['0'] == "group" && $alias[1] == "onet") || 
    ($aliaspath == "eform/submit/organization-signup") || 
    ($aliaspath == "eform/submit/open-ended-stakeholder-network") || 
    ($aliaspath == "forum/onet-forum")) {
    // echo "here";die;
    $variables['theme_hook_suggestions'][] = 'page__grouponet';
  }
} 
function ipbes_new_preprocess_node(&$variables) {
  $path = current_path();
  $aliaspath = drupal_get_path_alias();
  $alias = explode("/", $aliaspath);
  if($alias['0'] == "group" && $alias[1] == "onet") {
    $variables['theme_hook_suggestions'][] = 'node__12025';
  }
} 

?>
