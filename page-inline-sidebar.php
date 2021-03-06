<?php
/**
* Template Name: Inline sidebar (no header)
* This page template displays the sidebar content area below the main content
*/

get_header(); ?>

<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">


            <?php
            while (have_posts()) : the_post();

                get_template_part('template-parts/page/content', 'page-no-header');

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>


            <div class="sidebar inline">
                <!-- Inline class allows specific styling when sidebar is displayed inline-->
                <?php get_sidebar(); ?>
            </div>
        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->
</div>
<!-- .wrap -->

<?php get_footer();
