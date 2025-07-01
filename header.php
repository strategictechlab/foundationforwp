<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<script src="https://kit.fontawesome.com/329720bc45.js" crossorigin="anonymous"></script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> id="foundationforwp-body">
		<?php // get custom logo
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		?>

		<nav class="mobile-off-canvas-menu off-canvas position-right" id="mobile-menu" data-off-canvas data-auto-focus="false" data-transition="push" data-content-scroll="false" role="navigation">
			<?php foundationwp_main_menu_mobile(); ?>
		</nav>

		<div class="off-canvas-content" data-off-canvas-content>
			<div class="site-container">
				<header class="site-header top-bar">
					<div class="grid-container" style="width: 100%;">
						<div class="grid-x grid-padding-x grid-padding-y align-middle align-justify">
							<div class="cell shrink">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<?php if ( has_custom_logo() ) { 
										echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" style="width: 200px;" />';
									} else {
										bloginfo( 'name' );
									} ?>
								</a>
							</div>
							<div class="cell auto text-right">
								<div class="show-for-large">
									<?php foundationwp_main_menu_desktop(); ?>
								</div>

								<div class="hide-for-large">
									<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="mobile-menu"></button>
								</div>
							</div>
						</div>
					</div>
				</header>