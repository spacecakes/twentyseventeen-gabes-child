<?php
/**
* Template name: Wide (no header)
* Hides the header on pages, for a cleaner look, and displays it in widescreen
*/

get_header(); ?>

<div class="wrap wide">
	<div id="primary" class="content-area wide">
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
