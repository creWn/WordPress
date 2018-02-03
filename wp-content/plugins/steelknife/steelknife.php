<?php
/**
 * @package Steelknife
 */
/*
Plugin Name: Steelknife
Plugin URI: 
Description: 
Version: 1
Author: Dmitry Parkhomenko
Author URI: https://www.upwork.com/freelancers/~0108fb79cc6dc701ad
License: 
Text Domain: steelknife
*/
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function steelknife_post_type() {
	register_post_type( 'knifes',
		array(
			'labels' => array(
				'name' => __( 'Ножи' ),
				'singular_name' => __( 'Нож' ),
				'add_new' => __('Добавить новый')
				),
			'hierarchical' 		=> true,
			'public' 			=> true,
			'menu_position' 	=> 5,
			'has_archive'		=> true,
			'publicly_queryable'  => true,
			'menu_icon' => 'dashicons-cart',
			'rewrite' => array('slug' => 'knifes'),
			'supports' => array('thumbnail', 'title', 'editor',	'revisions', 'custom-fields'),
			'taxonomies' => array('category')
			)
		);
}
add_action('init', 'steelknife_post_type');
add_theme_support( 'post-thumbnails' ); 