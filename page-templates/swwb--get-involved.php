<?php
/**
 * Project name: SWWB
 * Template name: Get Involved
 * @package understrap
 */

get_header(); ?>

<script type="text/javascript" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-includes/js/ps/page-scroll.js"></script>

<div class="wrapper top" id="wrapper-page">

  <section id="section-1" class="panel h50 pd-top-nav" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-1-background-image', true) ) : echo get_post_meta($post->ID, 'section-1-background-image', true); endif; ?>'); background-position: bottom center; background-color: <?php if ( get_post_meta($post->ID, 'section-1-background-colour', true) ) : echo get_post_meta($post->ID, 'section-1-background-colour', true); endif; ?>;">

    <div class="section-mob-bg" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-1-background-image', true) ) : echo substr_replace(get_post_meta($post->ID, 'section-1-background-image', true),"_m.png",-4); endif; ?>'); background-position: top center;"></div>

    <div id="section-1-panel" class="panel-wrapper va-hero va-middle">

      <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-1-theme', true) ) : echo get_post_meta($post->ID, 'section-1-theme', true); endif; ?>">

            <div class="container-wrapper-100">

              <div id="section-1-description-wrapper">

                <!--<div class="breadcrumb lighten"><?php get_breadcrumb(); ?></div>-->

                <h1 id="section-1-intro" class="typr lead b">

                  <?php if ( get_post_meta($post->ID, 'section-1-intro', true) ) : echo get_post_meta($post->ID, 'section-1-intro', true); endif; ?>

                </h1>

                <h2 id="section-1-description" class="typr lighten spaced col-sm-6 np">

                  <?php if ( get_post_meta($post->ID, 'section-1-content', true) ) : echo get_post_meta($post->ID, 'section-1-content', true); endif; ?>

                </h2>

              </div>

            </div>

          </div>

      </div>

    </div>

  </section>

  <div id="continue"></div>
  <section id="section-2" class="panel h100 pd-top white" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-2-background-image', true) ) : echo get_post_meta($post->ID, 'section-2-background-image', true); endif; ?>'); background-position: top center; background-repeat: repeat-y; background-color: <?php if ( get_post_meta($post->ID, 'section-2-background-colour', true) ) : echo get_post_meta($post->ID, 'section-2-background-colour', true); endif; ?>;">

    <div class="section-mob-bg" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-2-background-image', true) ) : echo substr_replace(get_post_meta($post->ID, 'section-2-background-image', true),"_m.png",-4); endif; ?>'); background-position: top center; background-repeat: repeat-y;"></div>

    <div id="section-2-panel" class="panel-wrapper va-top">

      <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-2-theme', true) ) : echo get_post_meta($post->ID, 'section-2-theme', true); endif; ?>">

            <div class="container-wrapper-100">

              <div class="panel-row row">

                <div class="panel-boxes col-sm-12">

                  <div class="panel-box">

                    <div id="section-2-description-wrapper">

                      <p id="section-2-content" class="typr">

                        <?php if ( get_post_meta($post->ID, 'section-2-content', true) ) : echo get_post_meta($post->ID, 'section-2-content', true); endif; ?>

                      </p>

                    </div>

                  </div>

                </div>

                <div class="panel-boxes col-sm-8 offset-sm-2">

                  <div class="panel-box">

                    <div class="typr">

                        <?php echo do_shortcode('[civicrm component="contribution" id="6" mode="live" hijack="0"]'); ?>

                    </div>

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
