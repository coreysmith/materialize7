<?php
function materialize7_preprocess_page(&$vars, $hook) {
  if (isset($vars['node']->type)) {
    // If the content type's machine name is "my_machine_name" the file
    // name will be "page--my-machine-name.tpl.php".
    $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
  }
}


function materialize7_preprocess_html(&$variables) {
  /**
   * Add default icon
   */
  $apple_icon =  array(

    '#tag' => 'link',
    '#attributes' => array(
      'href' => '/'.path_to_theme() .'/apple-touch-icon.png',
      'rel' => 'apple-touch-icon-precomposed',
    ),
  );

  /**
   * Loop through to add various sizes
   */
  $apple_icon_sizes = array(57,72,114,144);

  foreach($apple_icon_sizes as $size){
    $apple = array(
      '#tag' => 'link',
      '#attributes' => array(
        'href' => '/'.path_to_theme().'/apple-touch-icon-'.$size.'x'.$size.'.png',
        'rel' => 'apple-touch-icon-precomposed',
        'sizes' => $size . 'x' . $size,
      ),
    );
    drupal_add_html_head($apple, 'apple-touch-icon-'.$size);
  }
}

