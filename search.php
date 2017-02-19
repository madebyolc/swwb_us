<?php
/**
 * The template for displaying search results pages.
 *
 * @package understrap
 */

get_header(); ?>
<div class="wrapper search-wrapper">

    <div class="container search">

        <div class="row">

            <section id="primary" class="content-area">

                <main id="main" class="site-main" role="main">


                <?php if ( have_posts() ) : ?>

                    <header class="page-header typr">

                        <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'understrap' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

                    </header><!-- .page-header -->

                    <div class="search search-lg typr">

                      <?php get_search_form(); ?>

                    </div>

                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php
                        /**
                         * Run the loop for the search to output the results.
                         * If you want to overload this in a child theme then include a file
                         * called content-search.php and that will be used instead.
                         */
                        get_template_part( 'loop-templates/content', 'search' );
                        ?>

                    <?php endwhile; ?>

                    <div class="pagination">

                      <div class="previous typr"><span class="link"><?php next_posts_link( 'Previous' ); ?></span></div>

                      <div class="next typr"><span class="link"><?php previous_posts_link( 'Next' ); ?></span></div>

                    </div>

                <?php else : ?>

                    <?php get_template_part( 'loop-templates/content', 'none' ); ?>

                <?php endif; ?>

                </main><!-- #main -->

            </section><!-- #primary -->

        </div><!-- .row -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
