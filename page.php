<?php
/**
 * The template for displaying all pages without comments
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
            while (have_posts()) : the_post();

                get_template_part('template-parts/page/content', 'page');

            endwhile; // End of the loop.
            ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
