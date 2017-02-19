<?php
/**
 * Project name: SWWB
 * Template name: Campaign - Go the extra mile
 * @package understrap
 */

get_header(); ?>

<script type="text/javascript" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-includes/js/ps/page-scroll.js"></script>

<div class="wrapper top" id="wrapper-page">

  <section id="section-1" class="panel h100 pd-top-nav" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-1-background-image', true) ) : echo get_post_meta($post->ID, 'section-1-background-image', true); endif; ?>'); background-position: bottom center; background-color: <?php if ( get_post_meta($post->ID, 'section-1-background-colour', true) ) : echo get_post_meta($post->ID, 'section-1-background-colour', true); endif; ?>;">

    <div class="section-mob-bg" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-1-background-image', true) ) : echo substr_replace(get_post_meta($post->ID, 'section-1-background-image', true),"_m.png",-4); endif; ?>'); background-position: top center;"></div>

    <div id="section-1-panel" class="panel-wrapper va-hero va-middle">

      <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-1-theme', true) ) : echo get_post_meta($post->ID, 'section-1-theme', true); endif; ?>">

            <div id="section-1-description-wrapper">

              <!--<div class="breadcrumb lighten"><?php get_breadcrumb(); ?></div>-->

              <h1 id="section-1-intro" class="typr lead d">

                <?php echo 'Will you join '?>

                <span class="pledge-count"><?php echo do_shortcode('[lh_signing_total_count id="43"]') ?></span>

                <?php echo 'others &amp; pledge to '?>

                <?php if ( get_post_meta($post->ID, 'section-1-intro', true) ) : echo get_post_meta($post->ID, 'section-1-intro', true); endif; ?>

              </h1>

            </div>

            <div id="section-1-pledge-wrapper" class="col-sm-12 np">

              <h1 class="typr">

                <?php echo do_shortcode('[lh_signing_form first_name="1" first_name_placeholder="My Name" last_name="0" email_placeholder="My Email" submit_value="Pledge"]') ?>

              </h1>

            </div>

            <div class="col-sm-12 np">

              <a href="#lh_signing-content_message-div" class="btn btn-plain bg btn-sm block go bottom typr nm" role="button" aria-pressed="true">Find out more</a>

            </div>

          </div>

      </div>

    </div>

  </section>

  <div id="lh_signing-content_message-div"></div>
  <section id="section-2" class="panel h100 pd-top white" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-2-background-image', true) ) : echo get_post_meta($post->ID, 'section-2-background-image', true); endif; ?>'); background-position: top center; background-repeat: repeat-y; background-color: <?php if ( get_post_meta($post->ID, 'section-2-background-colour', true) ) : echo get_post_meta($post->ID, 'section-2-background-colour', true); endif; ?>;">

    <div class="section-mob-bg" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-2-background-image', true) ) : echo substr_replace(get_post_meta($post->ID, 'section-2-background-image', true),"_m.png",-4); endif; ?>'); background-position: top center; background-repeat: repeat-y;"></div>

    <div id="section-2-panel" class="panel-wrapper va-top">

      <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-2-theme', true) ) : echo get_post_meta($post->ID, 'section-2-theme', true); endif; ?>">

            <div class="container-wrapper-100">

              <div class="panel-row row">

                <div class="panel-boxes col-sm-12">

                  <div class="panel-box">

                    <div id="section-2-pledge-wrapper">



                    </div>

                  </div>

                </div>

                <div class="panel-boxes col-sm-8 offset-sm-2">

                  <div class="panel-box">

                    <div class="typr">


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
