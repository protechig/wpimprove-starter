<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package WPImprove Starter
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function wpimprove_starter_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'wpimprove_starter_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function wpimprove_starter_jetpack_setup
add_action( 'after_setup_theme', 'wpimprove_starter_jetpack_setup' );

function wpimprove_starter_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function wpimprove_starter_infinite_scroll_render