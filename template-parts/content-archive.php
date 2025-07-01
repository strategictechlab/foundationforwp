<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="grid-x grid-margin-x">
		<?php if ( has_post_thumbnail( $post->ID ) ) : ?>
		<div class="cell small-12 medium-shrink">
			<img src="<?php the_post_thumbnail_url('medium') ?>" alt="">
		</div>
		<?php endif; ?>
		<div class="cell small-12 medium-auto">
			<?php $terms = get_the_terms( $post->ID, 'category' );
			if ($terms) { ?>
				<div class="categories">
					<?php $i = 1;
					foreach ( $terms as $term ) { ?>
						<?php if($term->name != "Uncategorized"): ?>
					 	<a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a>
					 	<?php //  Add comma (except after the last theme)
					 		echo ($i < count($terms)) ? ", " : "";
					 		// Increment counter
					 		$i++;
					 	endif;
					} ?>
				</div>
			<?php } ?>
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<?php the_excerpt() ?>
			<a href="<?php the_permalink() ?>" class="button">Read More</a>
		</div>
	</div>
	<hr>

</article>

