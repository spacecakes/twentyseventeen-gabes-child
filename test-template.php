<?php
/**
* Template Name: Test  template
*/

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="sidebar">
                <p>sidebar</p>
                <?php get_sidebar(); ?>
            </div>

			<?php
            while (have_posts()) : the_post();

                get_template_part('template-parts/page/content', 'page');

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->

	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
