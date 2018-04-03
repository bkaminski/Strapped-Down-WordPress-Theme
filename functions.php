<?php

//Force SSL on Theme Customizer Uploads
function get_theme_mod_img($mod_name)
{
     return str_replace(array('http:', 'https:'), '', get_theme_mod($mod_name));
}

//ASYNC LOAD SCRIPTS
function async_load_scripts($url)
{
    if ( strpos( $url, '#asyncload') === false )
        return $url;
    else if ( is_admin() )
        return str_replace( '#asyncload', '', $url );
    else
	return str_replace( '#asyncload', '', $url )."' async='async"; 
    }
add_filter( 'clean_url', 'async_load_scripts', 11, 1 );

// DEFER LOAD SCRIPTS
function defer_load_scripts($url)
{
    if ( strpos( $url, '#deferload') === false )
        return $url;
    else if ( is_admin() )
        return str_replace( '#deferload', '', $url );
    else
	return str_replace( '#deferload', '', $url )."' defer='defer"; 
    }
add_filter( 'clean_url', 'defer_load_scripts', 11, 1 );

//Load Main Scripts
function enqueue_strapped_down_scripts()
{
    wp_enqueue_script('Ajax-Popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', false, null, true, null);
    wp_enqueue_script('bootstrap4.0.0.js','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), null, true, null);
    wp_enqueue_script('strapped-down-js', get_template_directory_uri() . '/js/sD_scripts.js', array('jquery'), null, true, null);
    wp_enqueue_script('font-awesome-cdn','https://use.fontawesome.com/releases/v5.0.8/js/all.js#asyncload', false, null, true, null);
    wp_enqueue_script('adsense','https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js#deferload', false, null, null, null);
    wp_enqueue_script('twitter','https://platform.twitter.com/widgets.js#asyncload', false, null, true);
    wp_enqueue_script('g-plus','https://apis.google.com/js/platform.js#deferload', false, null, true);
    wp_enqueue_script('linkedin', 'https://platform.linkedin.com/badges/js/profile.js', false, null, true);
    wp_enqueue_script('GitHub-Buttons', 'https://buttons.github.io/buttons.js', false, null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_strapped_down_scripts');

//Load Holderjs on Front Page only
function holderjs_front_page() {
    if ( is_front_page() ) //Holderjs on frontpage only
{
  	wp_enqueue_script('holderjs', 'https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js', false, null, true, null);
}}
add_action('wp_enqueue_scripts', 'holderjs_front_page');

//Load ReactJS Scripts
function reactjs_page() {
    if (  is_page(1745) ) //Crypto Donate Page Only
{
    wp_enqueue_script('babel-core', 'https://unpkg.com/babel-core@5.8.38/browser.min.js', false, null, null, null);
    wp_enqueue_script('react-js', 'https://unpkg.com/react@15/dist/react.min.js', false, null, null, null);
    wp_enqueue_script('react-dom', 'https://unpkg.com/react-dom@15/dist/react-dom.min.js', false, null, null, null);
    wp_enqueue_script('axios', 'https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.js', false, null, null, null);
}}

add_action('wp_enqueue_scripts', 'reactjs_page');

//Load CSS
function enqueue_strapped_down_styles()
{
    wp_enqueue_style('bootstrap4.0beta-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('wp-styles', get_template_directory_uri() . '/style.css', array(), null);
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Inconsolata', array(), null);
}
add_action('wp_enqueue_scripts', 'enqueue_strapped_down_styles');

//Gravatar Alt Tags
function replace_content($text)
{
$alt = get_the_author_meta( 'display_name' );
$text = str_replace('alt=\'\'', 'alt=\'Avatar for '.$alt.'\' title=\'Gravatar for '.$alt.'\'',$text);
return $text;
}
add_filter('get_avatar','replace_content');

//Widgets
if ( function_exists('register_sidebar') )
register_sidebar(array(
	'before_widget' => '<div class="card border-dark bg-light mb-3 card-drop">',
	'after_widget' => '</div>',
	'before_title' => '<div class="card-header"><h3 class="consolata">',
	'after_title' => '</h3></div>',
));
register_sidebar(array(
  	'name' => __( 'Footer Menu' , 'strapped_down' ),
  	'id' => 'strapped_down_footer_menu',
  	'description' => __( 'Footer Navigation' , 'strapped_down' ),
  	'before_widget' => '',
  	'after_widget'  => '',
  	'before_title' => '',
  	'after_title' => ''
));

//Change WP Emails and email address away from "WordPress" as sender
function bk_mail_name( $email ){
  return 'Ben Kaminski'; // new email name from sender.
}
add_filter( 'wp_mail_from_name', 'bk_mail_name' );

function bk_mail_from ($email ){
  return 'ben@benkaminski.com'; // new email address from sender.
}
add_filter( 'wp_mail_from', 'bk_mail_from' );



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


//begin blog page read more button
function excerpt_read_more_link($output)
{
    global $post;
    return $output . '<a class="btn btn-dark text-uppercase" href="'. get_permalink() . '">Read More  <i class="fas fa-arrow-right fa-fw"></i></a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');
//end blog page read more button

//begin pagination
function wss_pagination($pages = '', $range = 1) {
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '') {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages) {
             $pages = 1;
         }
     }

     if(1 != $pages) {
         echo "<nav aria-label='Blog Navigation pagination'>";
            echo "<ul class='pagination justify-content-center'>";
            echo "<li class='page-item'>";
                if($paged > 2 && $paged > $range+1 && $showitems < $pages) 
                  echo "<a class='page-link' aria-label='First Page' href='".get_pagenum_link(1)."'>
                      		<i class='fa fa-angle-double-left fa-lg' aria-hidden='true'></i>
                        	<span class='sr-only'>go to first page</span>
                    	</a>"
            ;
            echo "</li>";
            echo "<li class='page-item'>";
                if($paged > 1 && $showitems < $pages) 
                  echo "<a class='page-link' href='".get_pagenum_link($paged - 1)."'>
                      		<i class='fa fa-angle-left fa-lg' aria-hidden='true'></i>
                        	<span class='sr-only'>go to previous page</span>
                  		</a>"
            ;
            echo "</li>";
            for ($i=1; $i <= $pages; $i++) {
                if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
                    echo ($paged == $i)? "<li class='page-link'>".$i."</li>":"<a href='".get_pagenum_link($i)."' class='page-link' >".$i."</a>"
                ;}}
                if ($paged < $pages && $showitems < $pages) 
                  echo "<a class='page-link' aria-label='Next Page' href='".get_pagenum_link($paged + 1)."'>
                          <i class='fa fa-angle-right fa-lg' aria-hidden='true'></i>
                          <span class='sr-only'>go to next page</span>
                        </a>";
                if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) 
                  echo "<a class='page-link' aria-label='Last Page' href='".get_pagenum_link($pages)."'>
                          <i class='fa fa-angle-double-right fa-lg' aria-hidden='true'></i>
                          <span class='sr-only'>go to last page</span>
                        </a>";
            global $wp_query;
              echo "</ul></nav>";
          }
}
//end pagination

//begin tag cloud
add_filter('widget_tag_cloud_args', 'tag_widget_limit');
function tag_widget_limit($args){
 //Check if taxonomy option inside widget is set to tags
 if(isset($args['taxonomy']) && $args['taxonomy'] == 'post_tag'){
  $args['number'] = 30; //Limit number of tags
  $args['order'] = RAND; // Order in which to appear
 }
 return $args;
}
//end tag cloud

//begin url link for comments override
add_filter('comment_form_default_fields', 'url_filtered');
function url_filtered($fields)
{
if(isset($fields['url']))
unset($fields['url']);
return $fields;
}
//end url link comment override

//add SVG Support
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/**
 * Display template for comments and pingbacks.
 *
 */
if (!function_exists('strapped_down_comment')) :
    function strapped_down_comment($comment, $args, $depth)
    {
        $GLOBALS['comment'] = $comment;
        switch ($comment->comment_type) :
            case 'pingback' :
            case 'trackback' : ?>
                <span id="comment-<?php comment_ID(); ?>">
                    <div class="card card-drop mb-1">
                        <div class="card-header">
                            <h4 class="card-title"><?php _e('<i class="fas fa-share-alt fa-fw fa-lg"></i>&nbsp;Pingback:', 'strapped_down'); ?></h4>
                        </div>
                        <div class="card-body">
                            <?php comment_author_link(); ?>
                        </div>
                    </div>
                    <br />
                <?php
                break;
                default :
                // Proceed with normal comments.
                global $post; ?>
                <p id="li-comment-<?php comment_ID(); ?>">
                    <div itemprop="comment">
                      <div class="card card-drop">
                        <div class="card-header">
                            <?php echo get_avatar($comment, 64); ?>
                            <h4><?php
                                printf('<small class="fn">%1$s %2$s</small>',
                                    get_comment_author_link(),
                                    // If current post author is also comment author, make it known visually.
                                    ($comment->user_id === $post->post_author) ? '<br /><span class="badge badge-success"><i class="fas fa-pencil-alt fa-fw"></i> ' . __(
                                        'Post author',
                                        'strapped_down'
                                    ) . '</span> ' : ''); ?>
                              </h4>
                            <small>
                                  <?php printf('<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
                                              esc_url(get_comment_link($comment->comment_ID)),
                                              get_comment_time('c'),
                                              sprintf(
                                                  __('%1$s at %2$s', 'strapped_down'),
                                                  get_comment_date(),
                                                  get_comment_time()
                                              )
                                    ); ?>
                            </small>
                            </div>
                            <?php if ('0' == $comment->comment_approved) : ?>
                                <p class="alert alert-warning"><?php _e(
                                    'Your comment has been submitted and is awaiting moderation. Thank you.',
                                    'strapped_down'
                                ); ?></p>
                            <?php endif; ?>
                            <div class="card-body">
                              <?php comment_text(); ?>
                              <?php comment_reply_link( array_merge($args, array(
                                    'reply_text' => __('<button class="btn btn-info btn-md"><i class="far fa-comment-alt fa-fw fa-lg"></i>&nbsp;Reply</button>', 'strapped_down'),
                                    'depth'      => $depth,
                                    'max_depth'  => $args['max_depth']
                                    )
                              )); ?>
                        </div>
                    </div>
                </div>
                <?php
                break;
        endswitch;
    }
endif;
