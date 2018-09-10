<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function landmark_Post(){
$labels = array(
  'name' => _x('Tour Landmarks', 'post type general name'),
  'singular_name' => _x('Landmark', 'post type singular name'),
  'all_items' => __( 'All Landmarks' ),
  'add_new' => _x('Add new Landmark', 'Landmarks'),
  'add_new_item' => __('Add new Landmark post'),
  'edit_item' => __('Edit Landmark post'),
  'new_item' => __('New Landmark post'),
  'view_item' => __('View Landmarks posts'),
  'search_items' => __('Search in Landmarks posts'),
  'not_found' =>  __('No Landmark posts found'),
  'not_found_in_trash' => __('No Landmark posts found in trash'),
  'parent_item_colon' => ''
);
//$post_supports = array('title','editor','comments','thumbnail','excerpt');
$post_supports = array('title','editor','thumbnail');
$args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'query_var' => true,
  //'menu_icon' => get_stylesheet_directory_uri() . '/images/slider.png',
  'rewrite' => true,
  'capability_type' => 'post',
  'hierarchical' => false,
  'menu_position' => null,
  'supports' => $post_supports,
  'has_archive' => true,
  'order' => 'ASC',
  'posts_per_page' => 8,
  'post_type' => 'landmark',
  'tax_query' => array(
     array(
        'taxonomy' => 'landmark-type',
        'field'    => 'slug',
        'terms'    => 'bread',
     ),
  ),
  'taxonomies' => array( 'category' ),
);

$landmark = new WP_Query( $args );
register_post_type( 'Landmark', $args );

}

add_action( 'init', 'landmark_Post' );

function sixpert_Post(){
$labels = array(
  'name' => _x('6ixpert', 'post type general name'),
  'singular_name' => _x('6ixpert', 'post type singular name'),
  'all_items' => __( 'All 6ixperts' ),
  'add_new' => _x('Add new 6ixpert', '6ixpert'),
  'add_new_item' => __('Add new 6ixpert post'),
  'edit_item' => __('Edit 6ixpert post'),
  'new_item' => __('New 6ixpert post'),
  'view_item' => __('View 6ixpert posts'),
  'search_items' => __('Search in 6ixpert posts'),
  'not_found' =>  __('No 6ixpert posts found'),
  'not_found_in_trash' => __('No 6ixpert posts found in trash'),
  'parent_item_colon' => ''
);
//$post_supports = array('title','editor','comments','thumbnail','excerpt');
$post_supports = array('title','editor','thumbnail');
$args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'query_var' => true,
  //'menu_icon' => get_stylesheet_directory_uri() . '/images/slider.png',
  'rewrite' => true,
  'capability_type' => 'post',
  'hierarchical' => false,
  'menu_position' => null,
  'supports' => $post_supports,
  'has_archive' => true,
  'order' => 'ASC',
  'posts_per_page' => 8,
  'post_type' => '6ixpert',
  'tax_query' => array(
     array(
        'taxonomy' => '6ixpert-type',
        'field'    => 'slug',
        'terms'    => 'bread',
     ),
  ),
  'taxonomies' => array( 'category' ),
);

$sixperts = new WP_Query( $args );
register_post_type( '6ixpert', $args );

}

add_action( 'init', 'sixpert_Post' );

function Review_Post(){
$labels = array(
  'name' => _x('Review', 'post type general name'),
  'singular_name' => _x('Review', 'post type singular name'),
  'all_items' => __( 'All Reviews' ),
  'add_new' => _x('Add new Review', 'Review'),
  'add_new_item' => __('Add new Review post'),
  'edit_item' => __('Edit Review post'),
  'new_item' => __('New Review post'),
  'view_item' => __('View Review posts'),
  'search_items' => __('Search in Review posts'),
  'not_found' =>  __('No Review posts found'),
  'Category' => _x('Eat', 'Sleep', 'Do', 'Wear'),
  'not_found_in_trash' => __('No Review posts found in trash'),
  'parent_item_colon' => ''
);
//$post_supports = array('title','editor','comments','thumbnail','excerpt');
$post_supports = array('title','editor','thumbnail');
$args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'query_var' => true,
  //'menu_icon' => get_stylesheet_directory_uri() . '/images/slider.png',
  'rewrite' => true,
  'capability_type' => 'post',
  'hierarchical' => false,
  'menu_position' => null,
  'supports' => $post_supports,
  'has_archive' => true,
  'order' => 'ASC',
  'posts_per_page' => 8,
  'post_type' => 'Review',
  'tax_query' => array(
     array(
        'taxonomy' => 'Review-type',
        'field'    => 'slug',
        'terms'    => 'bread',
     ),
  ),
  'taxonomies' => array( 'category' ),
);

$Reviews = new WP_Query( $args );
register_post_type( 'Review', $args );

}

add_action( 'init', 'Review_Post' );

function about_Tour_Post(){
$labels = array(
  'name' => _x('About the Tour', 'post type general name'),
  'singular_name' => _x('About', 'post type singular name'),
  'all_items' => __( 'All' ),
  'add_new' => _x('Add new Tour Post', 'Tour Post'),
  'add_new_item' => __('Add new Tour Post'),
  'edit_item' => __('Edit Tour Post'),
  'new_item' => __('New Tour Post'),
  'view_item' => __('View Tour Post'),
  'search_items' => __('Search in Tour Posts'),
  'not_found' =>  __('No Tour Posts found'),
  'not_found_in_trash' => __('No Tour Posts found in trash'),
  'parent_item_colon' => ''
);
//$post_supports = array('title','editor','comments','thumbnail','excerpt');
$post_supports = array('title','editor','thumbnail');
$args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'query_var' => true,
  //'menu_icon' => get_stylesheet_directory_uri() . '/images/slider.png',
  'rewrite' => true,
  'capability_type' => 'post',
  'hierarchical' => false,
  'menu_position' => null,
  'supports' => $post_supports,
  'has_archive' => true,
  'order' => 'ASC',
  'posts_per_page' => 8,
  'post_type' => 'about_tour',
  'tax_query' => array(
     array(
        'taxonomy' => 'About-type',
        'field'    => 'slug',
        'terms'    => 'bread',
     ),
  ),
  'taxonomies' => array( 'category' ),
);

$About = new WP_Query( $args );
register_post_type( 'About', $args );

}

add_action( 'init', 'about_Tour_Post' );

flush_rewrite_rules();
