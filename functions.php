<?php
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles()
{
  $parenthandle = 'twentytwenty'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
  wp_enqueue_style(
    $parenthandle,
    get_template_directory_uri() . '/style.css',
    array()
  );
}

function get_template_child_directory()
{
  $template     = 'twentytwenty-child';
  $theme_root   = get_theme_root_uri($template);
  $template_dir = "$theme_root/$template";

  /**
   * Filters the active theme directory path.
   *
   * @since 1.5.0
   *
   * @param string $template_dir The path of the active theme directory.
   * @param string $template     Directory name of the active theme.
   * @param string $theme_root   Absolute path to the themes directory.
   */
  return apply_filters('template_directory', $template_dir, $template, $theme_root);
}


/* Add bootstrap, fontawesome support to the Wordpress theme*/
function theme_add_bootstrap()
{
  wp_enqueue_style('bootstrap-css', get_template_child_directory() . '/assets/css/common/bootstrap.min.css');
  // wp_enqueue_style('fontawesome-css', get_template_child_directory() . '/assets/css/all.min.css');
  wp_enqueue_style('fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');
  wp_enqueue_script('jquery', get_template_child_directory() . '/assets/js/common/jquery.min.js');
}
add_action('wp_enqueue_scripts', 'theme_add_bootstrap');


/* Add bootstrap support to the Wordpress theme*/
function add_css_home_page()
{
  wp_enqueue_style('home-page-css', get_template_child_directory() . '/assets/css/pages/home-page.css');
}
add_action('wp_enqueue_scripts', 'add_css_home_page');
