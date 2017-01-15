<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header(); ?>
<div class="wrapper fixed-nav" id="single-wrapper">

    <div id="content" class="article container">

        <div class="row">

            <div id="primary" class="content-area">

                <main id="main" class="site-main" role="main">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'loop-templates/content', 'single' ); ?>

                        <div class="pagination">

                          <div class="previous typr"><span class="link"><?php next_posts_link( 'Previous' ); ?></span></div>

                          <div class="next typr"><span class="link"><?php previous_posts_link( 'Next' ); ?></span></div>

                        </div>

                    <?php endwhile; // end of the loop. ?>

                </main><!-- #main -->

            </div><!-- #primary -->

        </div><!-- .row -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
