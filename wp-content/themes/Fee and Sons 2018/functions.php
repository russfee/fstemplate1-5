<?php

/*************************************************************/
/*   Friendly Block Titles                                  */
/***********************************************************/
 
function my_layout_title($title, $field, $layout, $i) {
	if($value = get_sub_field('layout_title')) {
		return $value;
	} else {
		foreach($layout['sub_fields'] as $sub) {
			if($sub['name'] == 'layout_title') {
				$key = $sub['key'];
				if(array_key_exists($i, $field['value']) && $value = $field['value'][$i][$key])
					return $value;
			}
		}
	}
	return $title;
}
add_filter('acf/fields/flexible_content/layout_title', 'my_layout_title', 10, 4);

//GRAVITY FORMS
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );


//ACF OPTIONS PAGE
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}
if( function_exists('acf_set_options_page_title') )
{
    acf_set_options_page_title( __('Options') );
    acf_add_options_sub_page("Top Bar");
    acf_add_options_sub_page("Logo");
    acf_add_options_sub_page("Footer");
	

}


// EDITOR STYLESHEET
function my_theme_add_editor_styles() {
    add_editor_style( 'style-editor.css' );
}
add_action( 'admin_init', 'my_theme_add_editor_styles' );

// ENABLES WIGITIZED SIDEBARS
if ( function_exists('register_sidebar') )

// Sidebar Widget
// Location: The Sidebar
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
	
	register_sidebar(array('name'=>'Sidebar',
		'id'            => 'sidbear',
		'description'   => '',
        'class'         => '',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}
// TITLE TAG SUPPORT
add_theme_support( 'title-tag' );
// HEADER IMAGE SUPPORT
add_theme_support( "custom-header", $args );
// CUSTOME BACKRGOUNF SUPPORT
add_theme_support( "custom-background", $args );
// POST THUMBNAIL SUPPORT
add_theme_support( 'post-thumbnails' );

// ADDS POST THUMBBAIL SUPPORT TO RSS FEED
function cwc_rss_post_thumbnail($content) {
    global $post;
    if(has_post_thumbnail($post->ID)) {
        $content = '<p>' . get_the_post_thumbnail($post->ID) .
        '</p>' . get_the_content();
    }
    return $content;
}
add_filter('the_excerpt_rss', 'cwc_rss_post_thumbnail');
add_filter('the_content_feed', 'cwc_rss_post_thumbnail');

// MAXIMUM CONTENT WIDTH
if ( ! isset( $content_width ) ) {
	$content_width = 3600;
}

// CUSTOM MENU SUPPORT
add_theme_support( 'menus' );
if ( function_exists( 'register_nav_menus' ) ) {
  	register_nav_menus(
  		array(
  		  'header-menu' => 'Header Menu',
  		  'sidebar-menu' => 'Sidebar Menu',
  		  'footer-menu' => 'Footer Menu',
  		  'logged-in-menu' => 'Logged In Menu'
  		)
  	);
}

// SECURITY: REMOVES DETAILED LOGIN ERROR INFORMATION
add_filter('login_errors',create_function('$a', "return null;"));
	
// SECURITY: REMOVES WORDPRESS VERSION FROM HEADER
function wb_remove_version() {
	return '<!--built on the Whiteboard Framework-->';
}
add_filter('the_generator', 'wb_remove_version');
	
// REMOVES TRACKBACKS FROM COMMENT COUNT
add_filter('get_comments_number', 'comment_count', 0);
function comment_count( $count ) {
	if ( ! is_admin() ) {
		global $id;
		$comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
		return count($comments_by_type['comment']);
	} else {
		return $count;
	}
}
// CUSTOM EXCERPT ELLIPSES 
function custom_excerpt_more($more) {
	return 'Read More &raquo;';
}
add_filter('excerpt_more', 'custom_excerpt_more');

// CONTINUE READING MORE LINK
function no_more_jumping($post) {
	return '&nbsp; <a href="'.get_permalink($post->ID).'" class="read-more">'.'Continue Reading &raquo;'.'</a>';
}
add_filter('excerpt_more', 'no_more_jumping');
	
// CATEGORY ID IN BODY AND POST CLASS
function category_id_class($classes) {
	global $post;
	foreach((get_the_category($post->ID)) as $category)
		$classes [] = 'cat-' . $category->cat_ID . '-id';
		return $classes;
}
add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');

// ADDS CLASS TO POST IF THERE IS A THUMBNAIL
function has_thumb_class($classes) {
	global $post;
	if( has_post_thumbnail($post->ID) ) { $classes[] = 'has_thumb'; }
		return $classes;
}
add_filter('post_class', 'has_thumb_class');

//ADDS THEME SUPPORT AUTOMATIC FEED LINKS
function custom_theme_setup() {
	add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

//ENHANCED COMMENTS
function newborn_enqueue_comments_reply() {
if( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
add_action( 'comment_form_before', 'newborn_enqueue_comments_reply' );

?>