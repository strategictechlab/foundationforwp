<?php
/**
 * Register theme support for languages, menus, post-thumbnails, post-formats etc.
 */

if ( ! function_exists( 'foundationwp_theme_support' ) ) :
	function foundationwp_theme_support() {
		// Switch default core markup for search form, comment form, and comments to output valid HTML5
		add_theme_support(
			'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		// Add menu support
		add_theme_support( 'menus' );

		// Let WordPress manage the document title
		add_theme_support( 'title-tag' );

		// Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
		add_theme_support( 'post-thumbnails' );

		// RSS thingy
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'align-wide' );

		// add custom logo support
		$defaults = array(
	        'height'               => 100,
	        'width'                => 400,
	        'flex-height'          => true,
	        'flex-width'           => true,
	        'header-text'          => array( 'site-title', 'site-description' ),
	        'unlink-homepage-logo' => true, 
	    );
	    add_theme_support( 'custom-logo', $defaults );
	}

	add_action( 'after_setup_theme', 'foundationwp_theme_support' );
endif;