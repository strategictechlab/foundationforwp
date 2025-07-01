<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 */
?>

<footer class="site-footer">
	<div class="grid-container padding-vertical-2">
		<div class="grid-x grid-margin-x align-justify">
			<div class="cell small-12 large-shrink text-center margin-bottom-1">
				<?php // get custom logo
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				?>

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php if ( has_custom_logo() ) { 
						echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" style="width: 200px;">';
					} else {
						bloginfo( 'name' );
					} ?>
				</a>
			</div>
			<div class="cell small-12 large-shrink">
				<?php foundationwp_footer_menu(); ?>
			</div>
		</div>
		<div class="grid-x grid-margin-x margin-top-1">
			<div class="cell">
				<p class="disclaimer text-center margin-bottom-0">
					<small>This site is not affiliated with or endorsed by WordPress or Foundation Sites. It is not supported or warranted by WordPress or Foundation Sites.</small><br>
					<small><a href="https://strategictechlab.com" target="_blank">Maintained by Strategic Tech Lab</a></small>
				</p>
			</div>
		</div>
	</div>
</footer>

</div><!-- Close .site-container -->
</div><!-- Close off-canvas content -->

<?php wp_footer(); ?>

<?php get_template_part( 'template-parts/dev-utilities-footer' ); ?>

</body>
</html>
