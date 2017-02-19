<?php
/**
 * The template for displaying 404 pages (not found).
 * @package understrap
 */

get_header(); ?>
<div class="wrapper top" id="wrapper-page">

  <section id="section-1" class="panel pin h50 pd-top-nav" style="background: #f0f0f0;">

    <div class="section-mob-bg" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-1-background-image', true) ) : echo substr_replace(get_post_meta($post->ID, 'section-1-background-image', true),"_m.png",-4); endif; ?>'); background-position: top center;"></div>

    <div id="section-1-panel" class="panel-wrapper va-hero va-middle">

      <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-1-theme', true) ) : echo get_post_meta($post->ID, 'section-1-theme', true); endif; ?>">

            <div class="container-wrapper-100">

              <div id="section-1-description-wrapper">

                <!--<div class="breadcrumb lighten"><?php get_breadcrumb(); ?></div>-->

                <div id="typed-strings">

        					<p><?php _e( 'Sorry...', 'understrap' ); ?></p>
        					<p><?php _e( 'This page has either been moved or no longer exists...', 'understrap' ); ?></p>

        				</div>

        				<span class="">

        					<h1 class="entry-title typr d <?php if ( get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?>">

        						<span id="typed"></span>

        					</h1>

        				</span>

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
