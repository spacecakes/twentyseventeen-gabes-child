<?php
/**
* Template name: Full-width (no header)
* Hides the header on pages, for a cleaner look, and displays it in ultra widescreen
*/

get_header(); ?>

<div class="wrap ultra-wide">
	<div id="primary" class="content-area ultra-wide">
		<main id="main" class="site-main" role="main">
			<!-- Look, ma'! No header!  -->
			<?php
            while (have_posts()) : the_post();

                get_template_part('template-parts/page/content', 'page-no-header');

            endwhile; // End of the loop.
            ?>

		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->
</div>
<!-- .wrap -->

<?php get_footer();
