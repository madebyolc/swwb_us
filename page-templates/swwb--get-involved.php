<?php
/**
 * Project name: SWWB
 * Template name: Get Involved
 * @package understrap
 */

get_header(); ?>
<script type="text/javascript" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-includes/js/ps/page-about.js"></script>

<div class="wrapper top" id="wrapper-page">

  <section id="section-1" class="panel h100 pd-top-nav" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-1-background-image', true) ) : echo get_post_meta($post->ID, 'section-1-background-image', true); endif; ?>'); background-color: <?php if ( get_post_meta($post->ID, 'section-1-background-colour', true) ) : echo get_post_meta($post->ID, 'section-1-background-colour', true); endif; ?>;">

    <div id="section-1-panel" class="panel-wrapper va-hero va-middle">

      <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-1-theme', true) ) : echo get_post_meta($post->ID, 'section-1-theme', true); endif; ?>">

            <div class="container-wrapper-100">

              <div class="breadcrumb lighten"><small><?php get_breadcrumb(); ?></small></div>

              <div class="panel-row row">

                <div class="panel-boxes col-sm-12">

                  <div class="panel-box">

                    <h1 class="typr"><?php if ( get_post_meta($post->ID, 'section-1-intro', true) ) : echo get_post_meta($post->ID, 'section-1-intro', true); endif; ?></h1>

                    <p class="lighten"><?php if ( get_post_meta($post->ID, 'section-1-content', true) ) : echo get_post_meta($post->ID, 'section-1-content', true); endif; ?></p>

                  </div>

                </div>

                <div class="panel-boxes col-sm-6">

                  <div class="panel-box">

                    <div class="form get-involved typr">

                      <?php $id = 22; $p = get_page($id); echo apply_filters('the_content', $p->post_content); ?>

                    </div>

                  </div>

                </div>

                <div class="panel-boxes col-sm-6">

                  <div class="panel-box">

                      <p class=" lighten"><?php if ( get_post_meta($post->ID, 'section-1-content-2', true) ) : echo get_post_meta($post->ID, 'section-1-content-2', true); endif; ?><br/><br/></p>

                      <p class=" lighten">If you would like more information about Social Workers Without Borders, follow the links below</p>

                      <a href="<?php echo get_permalink( get_page_by_path( 'about' ) ) ?>" class="btn btn-tertiary btn-lg go forward block typr" role="button" aria-pressed="true">About us</a>

                      <a href="<?php echo get_category_link( 3 ); ?> " class="btn btn-tertiary btn-lg go forward block clear typr" role="button" aria-pressed="true">Latest News</a>

                  </div>

                </div>

              </div>

            </div>

          </div>

      </div>

    </div>

  </section>

</div>

<?php get_footer(); ?>
