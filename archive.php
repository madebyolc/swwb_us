<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="archive-wrapper">

    <div id="content" class="container archive">

        <div class="row">

    	    <div id="primary" class="content-area">

            <main id="main" class="site-main" role="main">

                      <?php if ( have_posts() ) : ?>

                        <header class="page-header typr">
                            <?php
                                echo '<h1 class="page-title">' . single_cat_title( 'News from ', false ) . '</h1>';
                                the_archive_description( '<h3 class="taxonomy-description">', '</h3>' );
                            ?>
                        </header><!-- .page-header -->

                        <span class="typr">
                          <?php
                          $args = array(
                            'current_category' => 3,
                            'title_li' => 'Jump to group: '
                          );
                            wp_list_categories($args);
                          ?>
                        </span>

                        <?php /* Start the Loop */ ?>
                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php
                                /* Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                get_template_part( 'loop-templates/content', get_post_format() );
                            ?>

                        <?php endwhile; ?>

                            <?php the_posts_navigation(); ?>

                        <?php else : ?>

                            <?php get_template_part( 'loop-templates/content', 'none' ); ?>

                        <?php endif; ?>

            </main><!-- #main -->

    	    </div><!-- #primary -->

    </div> <!-- .row -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
