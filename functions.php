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

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
register_nav_menus(array(
    'top_nav' => __('Top Menu Navigation', 'strapped_down'),
));

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
add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');

//begin pagination
function strapped_down_pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;
     global $paged;
    if (empty($paged)) {
        $paged = 1;
    }
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }
    if (1 != $pages) {
        echo "<div class='pagination'>Page:&nbsp;";
        if ($paged > 2 && $paged > $range+1 && $showitems < $pages) {
            echo "<a class='btn btn-default' href='".get_pagenum_link(1)."'><i class='fa fa-angle-double-left'></i></a>";
        }
        if ($paged > 1 && $showitems < $pages) {
            echo "<a class='btn btn-default' href='".get_pagenum_link($paged - 1)."'><i class='fa fa-angle-left'></i></a>";
        }
        for ($i=1; $i <= $pages; $i++) {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
                echo ($paged == $i)? "<span class='btn btn-default '>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='btn btn-default' >".$i."</a>";
            }
        }
        if ($paged < $pages && $showitems < $pages) {
            echo "<a class='btn btn-default' href='".get_pagenum_link($paged + 1)."'><i class='fa fa-angle-right'></i></a>";
        }
        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) {
            echo "<a class='btn btn-default' href='".get_pagenum_link($pages)."'><i class='fa fa-angle-double-right'></i></a>";
        }
        global $wp_query;
        echo "&nbsp;of&nbsp;";
        echo $wp_query->max_num_pages;
        echo "&nbsp;total pages</div>";
    }
}
