<?php
//Load Scripts/Styles
function enqueue_strapped_down_scripts()
{
    wp_enqueue_script('bootstrap-js-cdn', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('strapped-down-js', get_template_directory_uri() . '/js/theme_scripts.js', array('jquery'), null, true);
    wp_enqueue_script('font-awesome-cdn', '//use.fontawesome.com/27505604f5.js', false, null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_strapped_down_scripts');
//Load CSS files
function enqueue_strapped_down_styles()
{
    wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_style('wp-styles', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_strapped_down_styles');


//Disable Emoji's, they're dumb.
function disable_wp_emojicons()
{
  // all actions related to emojis
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
  // filter to remove TinyMCE emojis
    add_filter('tiny_mce_plugins', 'disable_emojicons_tinymce');
}
add_action('init', 'disable_wp_emojicons');
function disable_emojicons_tinymce($plugins)
{
    if (is_array($plugins)) {
        return array_diff($plugins, array( 'wpemoji' ));
    } else {
        return array();
    }
}
