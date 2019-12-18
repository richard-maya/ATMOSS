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

	// function featureText(){
    //     $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    //     if (strpos($url,'noticias') !== false) {
    //         echo 'Últimas Noticias';
    //     } 
    //     if (strpos($url,'blog') !== false) {
    //         echo 'Blog';
    //     } 
    //     if (strpos($url,'talleres') !== false) {
    //         echo 'Talleres';
    //     } 
    //     if (strpos($url,'eventos') !== false) {
    //         echo 'Eventos';
    //     } 
    // }
?>