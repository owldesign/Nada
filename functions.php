<?php

/**
 * @package WordPress
 * @subpackage Nada
 * @since Nada 1.0
 */


if (!function_exists('nada_setup')) :

function nada_setup() {
  // Theme textdomain
  $textdomain = 'nada';

  // Translations can be filed in the /languages/ directory.
  load_theme_textdomain('nada', get_template_directory() . '/languages');

  // WP Decides <title> 
  add_theme_support('title-tag'); 

  // Enable Post Thumnail Size
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(1200, 9999);

  // Register 2 Navs
  register_nav_menus([
    'primary' => __('Primary Menu', $textdomain),
    'secondary'  => __('Secondary Menu', $textdomain),
  ]);

  // Switch markup to HTML5
  add_theme_support('html5', [
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ]);

  // Post Format Supports
  add_theme_support('post-formats', [
    'aside',
    'image',
    'video',
    'quote',
    'link',
    'gallery',
    'status',
    'audio',
    'chat',
  ]);

  // Custom editor styles
  // add_editor_style(array('css/editor-style.css', twentysixteen_fonts_url()));
}

endif; // End Theme Setup
add_action('after_setup_theme', 'nada_setup');


function nada_scripts() {
  // style.css
  wp_enqueue_style('nada-style', get_stylesheet_uri());

  // jQuery
  wp_deregister_script('jquery');
  wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js", false, null);
  wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'nada_scripts');


// Add custom classes to body 
function nada_body_classes($classes) {
  if (!is_active_sidebar('sidebar-1')) {
    $classes[] = 'no-sidebar';
  }

  return $classes;
}
add_filter('body_class', 'nada_body_classes');




