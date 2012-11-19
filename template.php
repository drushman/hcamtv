<?php

/**
* Adding HTML classes to <body> tag for styling.
*/
function hcamtv_body_class($is_front, $logged_in, $is_admin, $node, $sidebar_right, $banner_right) {
  // Checks if current page is front or not.
  if ($is_front) {
    $class = 'front-page';
  }
  else {
    $class = 'not-front-page';
  }

  // Checks whether user is logged in or not.
  if ($logged_in) {
    $class .= ' logged-in';
  }
  else {
    $class .= ' not-logged-in';
  }

  // Checks whether user has permission to access administration pages.
  if ($is_admin) {
    $class .= ' admin';
  }
  else {
    $class .= ' not-admin';
  }

  // Add arg(0) for easier styling depending on the current page type.
  // Eg: node, admin, user
  // Illegal characters are removed and prevented from breaking the class names.
  $class .= ' '. preg_replace('![^abcdefghijklmnopqrstuvwxyz0-9-_]+!s', '', 'page-'. drupal_strtolower(arg(0)));

  // Add the node type on individual node page.
  if (isset($node->type)) {
    $class .= ' node-type-'. $node->type;
  }

  // Layout classes.
  if ($sidebar_right != '') {
    $class .= ' sidebar-right';
  }
  if ($banner_right != '') {
    $class .= ' banner-right';
  }

  return $class;
}

function hcamtv_preprocess_html(&$vars) {
  $class = '';
  if (!empty($vars['page']['sidebar_right'])) {
    $class .= ' sidebar-right';
  }
  if (!empty($vars['page']['banner_right'])) {
    $class .= ' banner-right';
  }
  $vars['classes_array'][] = $class;
}


