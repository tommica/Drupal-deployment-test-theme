<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

function tommi_menu_tree__main_menu($variables) {
  return '<ul id="main-menu" class="links inline clearfix main-menu">' . $variables['tree'] . '</ul>';
}

function tommi_menu_link__main_menu(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  if($element['#href'] === '<nolink>') {
    $output = "<span>".$element['#title']."</span>";
  } else {
    $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  }

  $element['#attributes']['class'][] = 'menu-'.$element['#original_link']['mlid'];
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}
