<?php
/**
 * HOLDS CUSTOM POST TYPES, TAXONOMIES, etc.
 */

define('THEME_URL', get_bloginfo('stylesheet_directory'));
define('THEME_PATH', get_stylesheet_directory());

/** ADD CPT "services" and taxonomy for them */
function services_cpt() {
	$labels = array(
		'name'                => _x( 'Services', 'Post Type General Name'),
		'singular_name'       => _x( 'Service', 'Post Type Singular Name'),
		'menu_name'           => __( 'Services'),
		'parent_item_colon'   => __( 'Parent Service'),
		'all_items'           => __( 'All Services'),
		'view_item'           => __( 'View Service'),
		'add_new_item'        => __( 'Add New Service'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Service'),
		'update_item'         => __( 'Update Service'),
		'search_items'        => __( 'Search Service'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash'),
	);
	$args = array(
		'label'               => __( 'Services'),
		'description'         => __( 'Service'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions'),
		'taxonomies'          => array( 'services-taxonomy' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 3.1,
		'can_export'          => true,
		'has_archive'         => false,
		'rewrite' => ['slug'=>'services'],
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest' => true,
		'menu_icon' => 'dashicons-archive',
	);
	register_post_type( 'services', $args );
} add_action( 'init', 'services_cpt', 0 );
function services_cpt_taxonomy() {
	register_taxonomy(
		'services-taxonomy',
		'services',
		array(
			'hierarchical' => true,
			'label' => 'Services Category',
			'query_var' => true,
			'has_archive' => false,
			'exclude_from_search' => true,
			'show_in_rest'  => true
		)
	);
} add_action( 'init', 'services_cpt_taxonomy');
/**__/ADD CPT "services" and taxonomy for them */

/**ADD CPT "Testimonials" and taxonomy for them */
function testimonials_cpt() {
	$labels = array(
		'name'                => _x( 'Testimonials', 'Post Type General Name'),
		'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name'),
		'menu_name'           => __( 'Testimonials'),
		'parent_item_colon'   => __( 'Parent Testimonial'),
		'all_items'           => __( 'All Testimonials'),
		'view_item'           => __( 'View Testimonial'),
		'add_new_item'        => __( 'Add New Testimonials'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Testimonial'),
		'update_item'         => __( 'Update Testimonial'),
		'search_items'        => __( 'Search Testimonial'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash'),
	);
	$args = array(
		'label'               => __( 'Testimonials'),
		'description'         => __( 'Testimonial'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions'),
		'taxonomies'          => array( 'testimonials-taxonomy' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 3.1,
		'can_export'          => true,
		'has_archive'         => false,
		'rewrite' => ['slug'=>'testimonials'],
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest' => true,
		'menu_icon' => 'dashicons-testimonial',
	);
	register_post_type( 'testimonials', $args );
} add_action( 'init', 'testimonials_cpt', 0 );
function testimonials_cpt_taxonomy() {
	register_taxonomy(
		'testimonials-taxonomy',
		'testimonials',
		array(
			'hierarchical' => true,
			'label' => 'Testimonials Category',
			'query_var' => true,
			'has_archive' => false,
			'exclude_from_search' => true,
			'show_in_rest'  => true
		)
	);
} add_action( 'init', 'testimonials_cpt_taxonomy');
/**__/ADD CPT "Testimonials" and taxonomy for them */

/** Change "Posts" to "News" in the admin side menu(in Admin-Panel)*/
function change_post_menu_label(){
	global $menu;
	global $submenu;
	$menu[5][0] = 'News';
	$submenu['edit.php'][5][0] = 'All News';
	$submenu['edit.php'][10][0] = 'Add News';
	$submenu['edit.php'][16][0] = 'Tags';
	echo '';
} add_action( 'admin_menu', 'change_post_menu_label' );
function change_post_object_label(){
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'News';
	$labels->singular_name = 'News';
	$labels->add_new = 'Add News';
	$labels->add_new_item = 'Add News';
	$labels->edit_item = 'Edit News';
	$labels->new_item = 'News Article';
	$labels->view_item = 'View News';
	$labels->search_items = 'Search News';
	$labels->not_found = 'No News Articles found';
	$labels->not_found_in_trash = 'No News found in Trash';
} add_action( 'init', 'change_post_object_label' );
/**__/Change "Posts" to "News" in the admin side menu(in Admin-Panel)*/