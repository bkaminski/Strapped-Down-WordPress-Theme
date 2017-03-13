<?php
//Load Scripts
function enqueue_strapped_down_scripts()
{
    wp_enqueue_script('react-js', '//unpkg.com/react@15.3.2/dist/react.min.js', array(), null, null);
    wp_enqueue_script('react-dom', '//unpkg.com/react-dom@15.3.2/dist/react-dom.min.js', array(), null, null);
    wp_enqueue_script('babel-core', '//unpkg.com/babel-core@5.8.38/browser.min.js', array(), null, null);
    wp_enqueue_script('jQuery-slim-min', '//code.jquery.com/jquery-3.1.1.slim.min.js', array('jquery'), null, true);
    wp_enqueue_script('CloudFlare-Tether', '//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array(), null, true);
    wp_enqueue_script('bootstrap4a6-js-cdn', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('strapped-down-js', get_template_directory_uri() . '/js/theme_scripts.js', array('jquery'), null, true);
    wp_enqueue_script('font-awesome-cdn', '//use.fontawesome.com/05b5b9ecc6.js', false, null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_strapped_down_scripts');

//Load CSS
function enqueue_strapped_down_styles()
{
    wp_enqueue_style('bootstrap4a6-css-cdn', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css');
    wp_enqueue_style('wp-styles', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_strapped_down_styles');

// Register Custom Navigation Walker
require_once('wp_bootstrap4_navwalker.php');
register_nav_menus(array(
    'top_nav' => __('Top Menu Navigation', 'strapped_down'),
));

//Wordpress Fluid Images Bootstrap 4.0.0-alpha.6
function bootstrap_fluid_images( $html ){
  $classes = 'img-fluid'; // Bootstrap 4.0.0-alpha.6
  // check if there are already classes assigned to the anchor
  if ( preg_match('/<img.*? class="/', $html) ) {
    $html = preg_replace('/(<img.*? class=".*?)(".*?\/>)/', '$1 ' . $classes . ' $2', $html);
  } else {
    $html = preg_replace('/(<img.*?)(\/>)/', '$1 class="' . $classes . '" $2', $html);
  }
  // remove dimensions from images,, does not need it!
  $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
  return $html;
}
add_filter( 'the_content','bootstrap_fluid_images',10 );
add_filter( 'post_thumbnail_html', 'bootstrap_fluid_images', 10 );

//Change WP Emails and email address away from "WordPress" as sender
function aod_mail_name($email)
{
    return 'Strapped Down Theme'; // new email name from sender.
}
add_filter('wp_mail_from_name', 'strapped_down_mail_name');
function strapped_down_mail_from($email)
{
    return 'ben@benkaminski.com'; // new email address from sender.
}
add_filter('wp_mail_from', 'strapped_down_mail_from');

//WP Helpers
show_admin_bar(false);
add_theme_support('post-thumbnails');
