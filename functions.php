<?php
//Load Scripts
function enqueue_strapped_down_scripts()
{
    wp_enqueue_script('babel-core', '//unpkg.com/babel-core@5.8.38/browser.min.js', false, null, null, null);
    wp_enqueue_script('react-js', '//unpkg.com/react@15.3.2/dist/react.min.js', false, null, null, null);
    wp_enqueue_script('react-dom', '//unpkg.com/react-dom@15.3.2/dist/react-dom.min.js', false, null, null, null);
    wp_enqueue_script('CloudFlare-Tether', '//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', false, null, true, null);
    wp_enqueue_script('bootstrap4a6-js-cdn', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array('jquery'), null, true, null);
    wp_enqueue_script('strapped-down-js', get_template_directory_uri() . '/js/sD_scripts.js', array('jquery'), null, true, null);
    wp_enqueue_script('font-awesome-cdn', '//use.fontawesome.com/05b5b9ecc6.js', false, null, true, null);
    wp_enqueue_script('holder.min.js', '//cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js', false, null, true, null);
}
add_action('wp_enqueue_scripts', 'enqueue_strapped_down_scripts');

//Load CSS
function enqueue_strapped_down_styles()
{
    wp_enqueue_style('bootstrap4a6-css-cdn', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('wp-styles', get_template_directory_uri() . '/style.css', array(), null);
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

// add tag support to pages
function tags_support_all() {
  register_taxonomy_for_object_type('post_tag', 'page');
}

// ensure all tags are included in queries
function tags_support_query($wp_query) {
  if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}

// tag hooks
add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');

// remove elipses from excerpt
function new_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

//begin blog page read more button
function excerpt_read_more_link($output)
{
    global $post;
    return $output . '<a class="btn btn-warning text-uppercase card-button" href="'. get_permalink() . '">Read More ...</a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');

// Customizer Func's ==============================================================================

// Remove Default Func's
function strappedDown_remove_defaults( $wp_customize ) {
 $wp_customize->remove_control('header_image');
 $wp_customize->remove_panel('widgets');
 $wp_customize->remove_panel('nav_menus');
 $wp_customize->remove_section('colors');
 $wp_customize->remove_section('background_image');
 $wp_customize->remove_section('static_front_page');
 $wp_customize->remove_section('title_tagline');
}
add_action( 'customize_register', 'strappedDown_remove_defaults',20);


// Change Website Background Colors
function strappedDown_footer_bg_color( $wp_customize ) {

//Section for changing colors
$wp_customize->add_section( 'strappedDown_change_colors' , array(
    'title'       => __( 'Footer Color Selections', 'strapped_down' ),
    'priority'    => 30,
    'description' => 'In this section you can customize colors of your websites global footer.',
));
    //Footer Background Color Change
    $wp_customize->add_setting( 'sD_footer_bg_color' , array(
        'default' => '#333',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'sD_footer_bg_color', array(
        'label'    => __( 'Footer Background Color', 'strapped_down' ),
        'section'  => 'strappedDown_change_colors',
        'settings' => 'sD_footer_bg_color',
        'type'     => 'color',
    )));    
    }
    add_action('customize_register', 'strappedDown_footer_bg_color');

    //Footer Top Border Color Change
    function strappedDown_border_top_color( $wp_customize ) {
    $wp_customize->add_setting( 'sD_footer_top_border_color' , array(
        'default' => '#5bc0de',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'sD_footer_top_border_color', array(
        'label'    => __( 'Footer Top Border Color', 'strapped_down' ),
        'section'  => 'strappedDown_change_colors',
        'settings' => 'sD_footer_top_border_color',
        'type'     => 'color',
    )));    
    }
    add_action('customize_register', 'strappedDown_border_top_color');

    //Footer Top Border Thickness
    function strappedDown_border_top_thickness( $wp_customize ) {
    $wp_customize->add_setting( 'sD_footer_top_border_thickness' , array(
        'default'   => '4',
    ));
    $wp_customize->add_control('sD_footer_top_border_thickness' , array(
        'type'      => 'range',
        'label'     => __( 'Footer Top Border Thickness' ),
        'description' => __( 'The default value is 4px with a 2px minimum and a 12px maximum.' ),
        'section'   => 'strappedDown_change_colors',
        'settings' => 'sD_footer_top_border_thickness',
            'input_attrs' => array(
                'min' => 2, 
                'max' => 12,
                'step' => 1,
    ),
    ));    
    }
    add_action('customize_register', 'strappedDown_border_top_thickness');
