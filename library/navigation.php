<?php
/**
 * Register Menus
 *
 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 */

register_nav_menus(
	array(
		'main-menu'  => esc_html__( 'Main Menu', 'foundationpress' ),
		// 'secondary-menu' => esc_html__( 'Secondary Menu', 'foundationpress' ),
		'footer-menu' => esc_html__( 'Footer Menu', 'foundationpress' ),
	)
);


/**
 * Desktop menu
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
if ( ! function_exists( 'foundationwp_main_menu_desktop' ) ) {
	function foundationwp_main_menu_desktop() {
		wp_nav_menu(
			array(
				'container'      => false,
				'menu_class'     => 'dropdown menu main-menu-desktop align-right',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
				'theme_location' => 'main-menu',
				'depth'          => 3,
				'fallback_cb'    => false,
				'walker'         => new FoundationWP_Dropdown_Menu_Walker(),
			)
		);
	}
}


/**
 * Mobile menu
 */
if ( ! function_exists( 'foundationwp_main_menu_mobile' ) ) {
	function foundationwp_main_menu_mobile() {
		wp_nav_menu(
			array(
				'container'      => false,
				'menu_class'     => 'vertical menu',
				'theme_location' => 'main-menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" data-accordion-menu data-submenu-toggle="true">%3$s</ul>',
				'fallback_cb'    => false,
				'walker'         => new FoundationWP_Mobile_Menu_Walker(),
			)
		);
	}
}


/**
 * Footer menu
 */
if ( ! function_exists( 'foundationwp_footer_menu' ) ) {
	function foundationwp_footer_menu() {
		wp_nav_menu(
			array(
				'container'      => false,
				'menu_class'     => 'menu',
				'theme_location' => 'footer-menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'fallback_cb'    => false,
				'walker'         => '',
			)
		);
	}
}


/**
 * Add support for buttons in the desktop menu
 * 1) In WordPress admin, go to Apperance -> Menus.
 * 2) Click 'Screen Options' from the top panel and enable 'CSS CLasses' and 'Link Relationship (XFN)'
 * 3) On your menu item, type 'has-form' in the CSS-classes field. Type 'button' in the XFN field
 * 4) Save Menu. Your menu item will now appear as a button in your top-menu
*/
if ( ! function_exists( 'foundationwp_add_menuclass' ) ) {
	function foundationwp_add_menuclass( $ulclass ) {
		$find    = array( '/<a rel="button"/', '/<a title=".*?" rel="button"/' );
		$replace = array( '<a rel="button" class="button"', '<a rel="button" class="button"' );

		return preg_replace( $find, $replace, $ulclass, 1 );
	}
	add_filter( 'wp_nav_menu', 'foundationwp_add_menuclass' );
}

/**
 * Customize the output of menus for Foundation top bar
 */

if ( ! class_exists( 'FoundationWP_Dropdown_Menu_Walker' ) ) :
	class FoundationWP_Dropdown_Menu_Walker extends Walker_Nav_Menu {
		function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent  = str_repeat( "\t", $depth );
			$output .= "\n$indent<ul class=\"dropdown menu vertical\" data-toggle>\n";
		}
	}
endif;


/**
 * Customize the output of menus for Foundation mobile walker
 */

if ( ! class_exists( 'FoundationWP_Mobile_Menu_Walker' ) ) :
	class FoundationWP_Mobile_Menu_Walker extends Walker_Nav_Menu {
		function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent  = str_repeat( "\t", $depth );
			$output .= "\n$indent<ul class=\"vertical nested menu\">\n";
		}
	}
endif;
