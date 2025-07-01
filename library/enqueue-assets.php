<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 */

if ( ! function_exists( 'foundationforwp_assets' ) ) :
	function foundationforwp_assets() {
		// Enqueue the main Foundation stylesheet.
		wp_enqueue_style( 'main-stylesheet', get_stylesheet_directory_uri() . '/dist/assets/css/app.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'theme-manual-stylesheet', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all' );

		// Deregister the jquery version bundled with WordPress.
		wp_deregister_script( 'jquery' );

		// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
		wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', false );

		// Deregister the jquery-migrate version bundled with WordPress.
		wp_deregister_script( 'jquery-migrate' );

		// CDN hosted jQuery migrate for compatibility with jQuery 3.x
		wp_register_script( 'jquery-migrate', '//code.jquery.com/jquery-migrate-3.0.1.min.js', array('jquery'), '3.0.1', false );

		// Enqueue jQuery migrate. Uncomment the line below to enable.
		// wp_enqueue_script( 'jquery-migrate' );

		// Enqueue Foundation scripts
		wp_enqueue_script( 'main-script', get_stylesheet_directory_uri() . '/dist/assets/js/app.js', array( 'jquery' ), '2.10.4', true );
	}

	add_action( 'wp_enqueue_scripts', 'foundationforwp_assets' );
endif;


