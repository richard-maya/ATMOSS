<?php
	if(!isset($content_width)){
		$content_width = 660;
	}

	function atmosswp_setup(){
		add_theme_support('post-thumbnails');
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');

		require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
		
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'THEMENAME' ),
		) );
	}

	add_action('after_setup_theme', 'atmosswp_setup');

	function atmoss_scripts(){
		wp_enqueue_style('atmoss', get_template_directory_uri() . '/style.css');
		wp_enqueue_script('atmoss', get_template_directory_uri() . '/assets/js/atmoss.js');
	}

	add_action('wp_enqueue_scripts', 'atmoss_scripts');

	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page(array(
			'page_title' 	=> 'Theme General Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
		
	}
?>