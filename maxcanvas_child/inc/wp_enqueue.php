<?php
/**
 * SCRIPTS / STYLES
 */

/** ADD styles and scripts for Theme */
if ( ! function_exists( 'maxcanvas_child_scripts_styles' ) ):
	function maxcanvas_child_scripts_styles() {
	//____________________________________include fonts:
		wp_enqueue_style( 'montserrat_font', 'https://fonts.googleapis.com/css2?family=Montserrat', array() );
		wp_enqueue_style( 'heebo_font', 'https://fonts.googleapis.com/css2?family=Heebo', array() );
		wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
	//____________________________________include styles:
		wp_enqueue_style( 'wow-css', get_stylesheet_directory_uri() . '/wow-animation/animate.min.css', array() );
		wp_enqueue_style( 'splideslider-css', get_stylesheet_directory_uri() . '/splide_slider/splide.min.css', array() );
		wp_enqueue_style( 'bootstrap5-scc', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array() );
		wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/css/main.css', array() );
	 /*
		 if( is_page_template('templates/about-us.php') ): wp_enqueue_style('about_us-css', get_stylesheet_directory_uri() . '/css/about_us.css'); endif;
			etc...
	 */
		if( is_front_page() ): wp_enqueue_style('home-css', get_stylesheet_directory_uri() . '/css/home.css'); endif;

	//____________________________________include scripts:
		wp_enqueue_script('wow-script', get_stylesheet_directory_uri() . '/wow-animation/wow.min.js', array(), false, true); /*Need initial in JS-file --> new WOW().init();*/
		wp_enqueue_script('splideslider-js', get_stylesheet_directory_uri() . '/splide_slider/splide.min.js', array(), false, true);
		wp_enqueue_script('bootstrap5-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), true);
		wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/js/main.js', array(), false, true);
	  /*
		if( is_front_page() ): wp_enqueue_script('home-js', get_stylesheet_directory_uri() . '/js/home.js'); endif;
		if( is_page_template('templates/about-us.php') ): wp_enqueue_script('about_us-js', get_stylesheet_directory_uri() . '/js/about_us.js'); endif;
			etc...
	 */

		wp_localize_script('main-js','globalData', array(
			'nonce' => wp_create_nonce('wp_rest'),
			'siteURL' => get_site_url(),
			'billboardSettings_autoplay' => get_field('autoplay', 6),
			'billboardSettings_speed' => get_field('speed', 6),
			'billboardSettings_arrows_navigation' => get_field('arrows_navigation', 6),
		));
	}
endif;
add_action('wp_enqueue_scripts', 'maxcanvas_child_scripts_styles', 20 );

/** ADD styles and scripts for Admin-Panel */
if( !function_exists( 'custom_admin_style' ) ):
	function maxcanvas_admin_scripts_styles() {
		wp_enqueue_style('admin-css', get_stylesheet_directory_uri() . '/css/admin.css');
	}
	add_action('admin_enqueue_scripts', 'maxcanvas_admin_scripts_styles');
endif;
