<?php
/**
 * Project name: SWWB
 * Template name: Get Involved
 * @package understrap
 */

get_header(); ?>

<script type="text/javascript" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-includes/js/ps/page-scroll.js"></script>

<div class="wrapper top" id="wrapper-page">

  <section class="panel pd-top-nav" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-1-background-image', true) ) : echo get_post_meta($post->ID, 'section-1-background-image', true); endif; ?>'); background-color: <?php if ( get_post_meta($post->ID, 'section-1-background-colour', true) ) : echo get_post_meta($post->ID, 'section-1-background-colour', true); endif; ?>;">

    <div id="section-1-panel" class="panel-wrapper va-top">

      <div class="panel-inner">

          <div class="container typr">

            <div class="container-wrapper-100">

              <div id="get-involved-content-wrapper" class="typr col-sm-4 np theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-1-theme', true) ) : echo get_post_meta($post->ID, 'section-1-theme', true); endif; ?>">

                <h1 id="get-involved-content-intro" class="page-title lead section">

                  <?php if ( get_post_meta($post->ID, 'section-1-intro', true) ) : echo get_post_meta($post->ID, 'section-1-intro', true); endif; ?>

                </h1>

                <h2 id="get-involved-content-description" class="typr spaced frame">

                  <?php if ( get_post_meta($post->ID, 'section-1-content', true) ) : echo get_post_meta($post->ID, 'section-1-content', true); endif; ?>

                </h2>


              </div>

              <div id="get-involved-form" class="panel-page frame-thin br-top typr col-xs-12 col-sm-7 offset-sm-1 theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-1-form-theme', true) ) : echo get_post_meta($post->ID, 'section-1-form-theme', true); endif; ?>">

                <?php echo do_shortcode('[civicrm component="contribution" id="6" mode="live" hijack="0"]'); ?>

                <div class="typr center">

                  <?php	wp_nav_menu( array('theme_location' => 'social-menu', 'container_class' => 'social-menu' ) );?>

                </div>

              </div>

            </div>

          </div>

      </div>

    </div>

  </section>

</div>

<?php get_footer(); ?>
