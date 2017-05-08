<?php
/**
 * The template for displaying search results pages.
 *
 * @package understrap
 */

get_header(); ?>
<div class="wrapper search-wrapper">

  <section class="panel pd-top background-primary">

    <div id="section-1-panel" class="va-top">

      <div class="panel-inner">

          <div class="container typr theme">

            <div class="container-wrapper-100">

              <div class="light">

                <div class="breadcrumb lighten theme"><?php get_breadcrumb(); ?></div>

              </div>

              <div class="panel-page br-top theme primary" id="search-panel-wrapper">

                <?php if ( have_posts() ) : ?>

                    <header class="page-header typr">

                        <h1 class="page-title lead"><?php printf( __( 'Search Results for: %s', 'understrap' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

                    </header><!-- .page-header -->

                    <div class="search search-lg typr">

                      <?php get_search_form(); ?>

                    </div>

                    <?php /* Start the Loop */ ?>
                    <div class="pd-top">

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

                    </div>

                    <div class="pagination">

                      <div class="previous typr"><span class="link"><?php next_posts_link( 'Previous' ); ?></span></div>

                      <div class="next typr"><span class="link"><?php previous_posts_link( 'Next' ); ?></span></div>

                    </div>

                <?php else : ?>

                    <?php get_template_part( 'loop-templates/content', 'none' ); ?>

                <?php endif; ?>

              </div>

            </div>

          </div>

        </div>

      </div>

    </section>

<div class="container search">

        <div class="row">

            <section id="primary" class="content-area">

                <main id="main" class="site-main" role="main">




                </main><!-- #main -->

            </section><!-- #primary -->

        </div><!-- .row -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
