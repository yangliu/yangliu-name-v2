<?php

add_action( 'after_setup_theme', 'yl_setup' );

/* Many codes are stolen from Twentyten... */
function yl_setup() {
	//add_editor_style();

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// Make theme available for translation
	// Translations can be filed in the /languages/ directory
	load_theme_textdomain( 'yangliu-name-v2', TEMPLATEPATH . '/languages' );

	$locale = get_locale();
	$locale_file = TEMPLATEPATH . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'yangliu-name-v2' ),
	) );

}

function ylname_widgets_init() {
	// Area 1, left above footer
	register_sidebar( array(
		'name' => __( 'Left Footer Widget Area', 'yangliu-name-v2' ),
		'id' => 'left-footer-widget-area',
		'description' => __( 'Left Footer Widget Area', 'yangliu-name-v2' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 2, center above footer
	register_sidebar( array(
		'name' => __( 'Center Footer Widget Area', 'yangliu-name-v2' ),
		'id' => 'center-footer-widget-area',
		'description' => __( 'Center Footer Widget Area', 'yangliu-name-v2' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	// Area 3, right above footer
	register_sidebar( array(
		'name' => __( 'Right Footer Widget Area', 'yangliu-name-v2' ),
		'id' => 'right-footer-widget-area',
		'description' => __( 'Right Footer Widget Area', 'yangliu-name-v2' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}
/** Register sidebars by running twentyten_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'ylname_widgets_init' );

/*--
	wp_nav_menu() fallback
 */
function ylname_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'ylname_page_menu_args' );

/*--
	Removes the default styles that are packaged with the Recent Comments widget.
*/
function ylname_remove_recent_comments_style() {
	add_filter( 'show_recent_comments_widget_style', '__return_false' );
}
add_action( 'widgets_init', 'ylname_remove_recent_comments_style' );
/**
 * Remove inline styles printed when the gallery shortcode is used.
 */
add_filter( 'use_default_gallery_style', '__return_false' );
/**
 * Sets the post excerpt length to 200 characters.
 *
 */
function ylname_excerpt_length( $length ) {
	return 200;
}
add_filter( 'excerpt_length', 'ylname_excerpt_length' );

/**
 * Returns a "Continue Reading" link for excerpts
 */
function ylname_continue_reading_link() {
	return ' <a href="'. get_permalink() . '">' . __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'yangliu-name-v2' ) . '</a>';
}

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and ylname_continue_reading_link().
 */
function ylname_auto_excerpt_more( $more ) {
	return ' &hellip;' . ylname_continue_reading_link();
}
add_filter( 'excerpt_more', 'ylname_auto_excerpt_more' );

/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 */
function ylname_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= ylname_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'ylname_custom_excerpt_more' );

