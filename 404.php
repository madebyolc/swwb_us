<?php
/**
 * The template for displaying 404 pages (not found).
 * @package understrap
 */

get_header(); ?>
<div class="wrapper" id="wrapper-page">

  <section class="panel pd-top background-primary">

    <div id="section-1-panel" class="va-top">

      <div class="panel-inner">

          <div class="container typr theme">

            <div class="container-wrapper-100">

              <div class="light">

                <div class="breadcrumb lighten theme"><?php get_breadcrumb(); ?></div>

              </div>

              <div class="panel-page br-top" id="404-panel-wrapper">

                <div>

                  <div id="typed-strings">

                  <p><?php _e( 'This page has either been moved or no longer exists', 'understrap' ); ?></p>

                  </div>

                  <h1 id="section-1-intro" class="page-title lead">

                    <p>
                      <?php _e( '', 'understrap' ); ?>
                      <span id="typed"></span>
                     </p>

                  </h1>

                </div>

                <div class="search search-lg typr">

                  <?php get_search_form(); ?>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </section>

  </div>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
