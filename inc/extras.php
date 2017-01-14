<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package understrap
 */
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function understrap_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	return $classes;
}
add_filter( 'body_class', 'understrap_body_classes' );

// Removes tag class from the body_class array to avoid Bootstrap markup styling issues.

add_filter( 'body_class', 'adjust_body_class' );
function adjust_body_class( $classes ) {

    foreach ( $classes as $key => $value ) {
        if ( $value == 'tag' ) unset( $classes[ $key ] );
    }

    return $classes;

}

// Filter custom logo with correct classes
add_filter('get_custom_logo','change_logo_class');
function change_logo_class($html)
{
	$html = str_replace('class="custom-logo"', 'class="img-responsive"', $html);
	$html = str_replace('class="custom-logo-link"', 'class="navbar-brand custom-logo-link"', $html);
	return $html;
}

// Add URL to featured images outside single page
function wpb_autolink_featured_images( $html, $post_id, $post_image_id ) {

If (! is_singular()) {
	$html = '<a class="wp-post-img-link" href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
	return $html;
	} else {
		return $html;
	}
}
add_filter( 'post_thumbnail_html', 'wpb_autolink_featured_images', 10, 3 );
