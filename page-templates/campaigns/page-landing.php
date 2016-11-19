<?php
/**
 * Campaign Template
 * Template name: Landing
 * Project name: SWWB
 * @package understrap
 */

get_header(); ?>

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'loop-templates/content', 'empty' ); ?>

                <?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
