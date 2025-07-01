<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 */

get_header(); ?>

<main class="main-content">
	<?php while ( have_posts() ) : the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="page-header padding-vertical-1 margin-bottom-2 has-secondary-background-color has-white-color">
				<div class="grid-container">
					<h1 class="entry-title margin-bottom-0"><?php the_title(); ?></h1>
				</div>
			</header>
			

			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>
		
		<?php edit_post_link( __( 'Edit Page', 'foundationwp' ) ); ?>
	
	<?php endwhile; ?>
</main>

<?php get_footer();
