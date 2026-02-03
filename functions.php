<?php
/**
 * Cheeky Robots theme functions and definitions.
 *
 * @package CheekyRobots
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'CHEEKY_ROBOTS_VERSION', '1.0.0' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function cheeky_robots_setup(): void {
	add_editor_style( 'assets/css/editor-style.css' );
}
add_action( 'after_setup_theme', 'cheeky_robots_setup' );

/**
 * Enqueue theme styles.
 */
function cheeky_robots_enqueue_styles(): void {
	wp_enqueue_style(
		'cheeky-robots-global',
		get_template_directory_uri() . '/assets/css/global.css',
		array(),
		CHEEKY_ROBOTS_VERSION
	);

	wp_enqueue_style(
		'cheeky-robots-blocks',
		get_template_directory_uri() . '/assets/css/blocks.css',
		array( 'cheeky-robots-global' ),
		CHEEKY_ROBOTS_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'cheeky_robots_enqueue_styles' );

/**
 * Register the Case Study custom post type.
 */
function cheeky_robots_register_case_study_cpt(): void {
	$labels = array(
		'name'                  => _x( 'Case Studies', 'Post type general name', 'cheeky-robots' ),
		'singular_name'         => _x( 'Case Study', 'Post type singular name', 'cheeky-robots' ),
		'menu_name'             => _x( 'Case Studies', 'Admin menu text', 'cheeky-robots' ),
		'add_new'               => __( 'Add New Case Study', 'cheeky-robots' ),
		'add_new_item'          => __( 'Add New Case Study', 'cheeky-robots' ),
		'new_item'              => __( 'New Case Study', 'cheeky-robots' ),
		'edit_item'             => __( 'Edit Case Study', 'cheeky-robots' ),
		'view_item'             => __( 'View Case Study', 'cheeky-robots' ),
		'all_items'             => __( 'All Case Studies', 'cheeky-robots' ),
		'search_items'          => __( 'Search Case Studies', 'cheeky-robots' ),
		'not_found'             => __( 'No case studies found.', 'cheeky-robots' ),
		'not_found_in_trash'    => __( 'No case studies found in Trash.', 'cheeky-robots' ),
		'archives'              => __( 'Case Study Archives', 'cheeky-robots' ),
		'filter_items_list'     => __( 'Filter case studies list', 'cheeky-robots' ),
		'items_list_navigation' => __( 'Case studies list navigation', 'cheeky-robots' ),
		'items_list'            => __( 'Case studies list', 'cheeky-robots' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'work' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon'          => 'dashicons-portfolio',
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
		'template'           => array(),
	);

	register_post_type( 'cheeky_case_study', $args );
}
add_action( 'init', 'cheeky_robots_register_case_study_cpt' );

/**
 * Register block pattern category.
 */
function cheeky_robots_register_pattern_categories(): void {
	register_block_pattern_category(
		'cheeky-robots',
		array(
			'label' => __( 'Cheeky Robots', 'cheeky-robots' ),
		)
	);
}
add_action( 'init', 'cheeky_robots_register_pattern_categories' );

/**
 * Register the ticker-bar custom block.
 */
function cheeky_robots_register_blocks(): void {
	register_block_type( get_template_directory() . '/blocks/ticker-bar' );
}
add_action( 'init', 'cheeky_robots_register_blocks' );
