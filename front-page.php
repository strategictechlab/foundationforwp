<?php
/**
 * The template used for the front page of the site
 */

get_header(); ?>


<main class="main-content">
	<?php while ( have_posts() ) : the_post(); ?>
		
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
			<?php the_content(); ?>
			
			<?php edit_post_link( __( '(Edit)', 'foundationforwp' ), '<span class="edit-link">', '</span>' ); ?>
		</div>
	</article>
	<?php endwhile; ?>
</main>
<?php
get_footer();
