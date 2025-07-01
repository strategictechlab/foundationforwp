<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

<main class="main-content">
	<?php while ( have_posts() ) : the_post(); ?>
		
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php get_template_part( 'template-parts/featured-image' ); ?>

		<header class="page-header padding-vertical-1 margin-bottom-2 has-secondary-background-color has-white-color">
			<div class="grid-container">
				<h2 class="h1 entry-title margin-bottom-0"><?php echo get_the_title(get_option('page_for_posts', true)); ?></h1>
			</div>
		</header>
		<div class="entry-content">
			<h1 class="entry-title margin-bottom-0"><?php the_title(); ?></h1>
			<div><hr></div>
			<?php the_content(); ?>
			<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
		</div>
	</article>
	<?php endwhile; ?>
</main>

<?php get_footer();
