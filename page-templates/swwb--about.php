<?php
/**
 * Project name: SWWB
 * Template name: About
 * @package understrap
 */

get_header(); ?>
<script type="text/javascript" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-includes/js/ps/page-about.js"></script>

<div class="wrapper top" id="wrapper-page">

  <section id="section-1" class="panel pin hShort pd-top-nav" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-1-background-image', true) ) : echo get_post_meta($post->ID, 'section-1-background-image', false); endif; ?>'); background-color: <?php if ( get_post_meta($post->ID, 'section-1-background-color', true) ) : echo get_post_meta($post->ID, 'section-1-background-color', true); endif; ?>;">

    <div id="section-1-panel" class="panel-wrapper va-middle">

      <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?>">

            <div class="container-wrapper-100">

              <div id="section-1-description-wrapper">
                <div class="breadcrumb"><?php get_breadcrumb(); ?></div>

                <h1 id="section-1-intro" class="typr lead b">

                  <?php if ( get_post_meta($post->ID, 'section-1-intro', true) ) : echo get_post_meta($post->ID, 'section-1-intro', true); endif; ?>

                </h1>

                <p id="section-1-description" class="typr col-sm-7 np">

                  <?php if ( get_post_meta($post->ID, 'section-1-description', true) ) : echo get_post_meta($post->ID, 'section-1-description', true); endif; ?>

                </p>

                <div class="col-sm-12 np">

                  <a href="#" class="btn btn-primary btn-lg block typr" role="button" aria-pressed="true">Get Involved</a>
                  <a href="#continue" class="btn btn-plain bg btn-lg block typr" role="button" aria-pressed="true">Find out more</a>

                </div>

              </div>

            </div>

          </div>

      </div>

    </div>

    <div class="scroll-this-way down"></div>

  </section>

  <div id="continue"></div>
  <section id="section-2" class="panel pin h100 pd-top white" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-2-background-image', true) ) : echo get_post_meta($post->ID, 'section-2-background-image', true); endif; ?>'); background-color: <?php if ( get_post_meta($post->ID, 'section-2-background-color', true) ) : echo get_post_meta($post->ID, 'section-2-background-color', true); endif; ?>;">

    <div class="section-bg right" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-2-background-image', true) ) : echo get_post_meta($post->ID, 'section-2-background-image', true); endif; ?>'); background-color: <?php if ( get_post_meta($post->ID, 'section-2-background-color', true) ) : echo get_post_meta($post->ID, 'section-2-background-color', true); endif; ?>;"></div>

    <div id="section-2-panel" class="panel-wrapper va-middle">

      <div class="panel-inner">

          <div class="container typr">

            <div class="container-wrapper-50 pin">

              <h1 id="section-2-intro" class="typr">

                <?php if ( get_post_meta($post->ID, 'section-2-intro', true) ) : echo get_post_meta($post->ID, 'section-2-intro', true); endif; ?>

              </h1>

              <p id="section-2-content" class="typr" style="opacity: 0; padding-top: 2rem;">

                <?php if ( get_post_meta($post->ID, 'section-2-content', true) ) : echo get_post_meta($post->ID, 'section-2-content', true); endif; ?>

              </p>

            </div>

        </div>

      </div>

    </div>

  </section>

  <section id="section-3" class="panel h100 pd-top-nav white">

    <div class="section-bg" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-3-background-image', true) ) : echo get_post_meta($post->ID, 'section-3-background-image', true); endif; ?>'); background-color: <?php if ( get_post_meta($post->ID, 'section-3-background-color', true) ) : echo get_post_meta($post->ID, 'section-3-background-color', true); endif; ?>;"></div>

    <div id="section-3-panel" class="panel-wrapper va-top">

      <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-3-theme', true) ) : echo get_post_meta($post->ID, 'section-3-theme', true); endif; ?>">

            <div class="container-wrapper-50 right pd-top-nav pin">

              <h1 id="section-3-intro" class="typr">

                <?php if ( get_post_meta($post->ID, 'section-3-intro', true) ) : echo get_post_meta($post->ID, 'section-3-intro', true); endif; ?>

              </h1>

              <p id="section-3-content" class="typr" style="padding-top: 2rem;">

                <?php if ( get_post_meta($post->ID, 'section-3-content', true) ) : echo get_post_meta($post->ID, 'section-3-content', true); endif; ?>

              </p>

            </div>

        </div>

      </div>

    </div>

  </section>

</div>

<?php get_footer(); ?>
