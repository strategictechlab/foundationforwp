<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 */

get_header(); ?>

<main class="main-content">
  <header class="page-header padding-vertical-1 margin-bottom-2 has-secondary-background-color has-white-color">
    <div class="grid-container">
      <h1 class="entry-title margin-bottom-0"><?php echo get_the_title(get_option('page_for_posts', true)); ?></h1>
    </div>
  </header>

  <?php if ( have_posts() ) : ?>

    <div class="entry-content">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/content-archive' ); ?>
      <?php endwhile; ?>
    </div>

  <?php endif; // End have_posts() check. ?>

  <?php if ( function_exists( 'foundationforwp_pagination' ) ) {
    foundationforwp_pagination();
  } ?>

</main>


<?php get_footer();
