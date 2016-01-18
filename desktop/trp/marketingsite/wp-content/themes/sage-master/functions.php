<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',                 // Scripts and stylesheets
  'lib/extras.php',                 // Custom functions
  'lib/setup.php',                  // Theme setup
  'lib/titles.php',                 // Page titles
  'lib/wrapper.php',                // Theme wrapper class
  'lib/customizer.php',             // Theme customizer
  'lib/wp_bootstrap_navwalker.php'  // Bootstrap nav walker
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

/**
 * Update read more link after the excerpt
 */
function trp_custom_excerpt_more($more) {
  return '<p class="trp-keep-reading"> <a href="' . get_permalink() . '">  Click here to keep reading</a></p>';
}
add_filter('excerpt_more', 'trp_custom_excerpt_more');

/**
 * Update excerpt length
 */
function trp_custom_excerpt_length($length) {
  return 20; 
}
add_filter('excerpt_length', 'trp_custom_excerpt_length');

/**
 * Get contact page url from template
 */
function trp_get_contact_url(){
  $url;

  $pages = query_posts(array(
    'post_type' =>'page',
    'meta_key'  =>'_wp_page_template',
    'meta_value'=> 'page-templates/contact.php'
  ));

  // Get url
  $url = null;

  if(isset($pages[0])) {
    $url = get_page_link($pages[0]->ID);
  }
  return $url;
}

/**
 * Get hospitals page url from template
 */
function trp_get_hospitals_url(){
  $url;

  $pages = query_posts(array(
    'post_type' =>'page',
    'meta_key'  =>'_wp_page_template',
    'meta_value'=> 'page-templates/hospitals.php'
  ));

  // Get url
  $url = null;

  if(isset($pages[0])) {
    $url = get_page_link($pages[0]->ID);
  }
  return $url;
}

/**
 * Get aco page url from template
 */
function trp_get_aco_url(){
  $url;

  $pages = query_posts(array(
    'post_type' =>'page',
    'meta_key'  =>'_wp_page_template',
    'meta_value'=> 'page-templates/aco.php'
  ));

  // Get url
  $url = null;

  if(isset($pages[0])) {
    $url = get_page_link($pages[0]->ID);
  }
  return $url;
}

/**
 * Get nsf page url from template
 */
function trp_get_nsf_url(){
  $url;

  $pages = query_posts(array(
    'post_type' =>'page',
    'meta_key'  =>'_wp_page_template',
    'meta_value'=> 'page-templates/skilled-nursing.php'
  ));

  // Get url
  $url = null;

  if(isset($pages[0])) {
    $url = get_page_link($pages[0]->ID);
  }
  return $url;
}

/**
 * Add login button to primary navigation
 */
function trp_add_login_button_to_primary_navbar($items, $args) {
  // Add login button only to primary navigation
  if ($args->theme_location == 'primary_navigation') {
    $homelink = '<li class="trp-login"><a href="https://app.therightplace.com/login" class="trp-button">Login</a></li>';
    $items = $items . $homelink;
  }
  return $items;
}
add_filter( 'wp_nav_menu_items', 'trp_add_login_button_to_primary_navbar', 10, 2 );