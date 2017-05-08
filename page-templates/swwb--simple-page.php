<?php
/**
 * Project name: SWWB
 * Template name: Simple Page
 * @package understrap
 */

get_header(); ?>

<script type="text/javascript" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-includes/js/ps/page-scroll.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.6.0/clipboard.min.js"></script>

<div class="wrapper top" id="wrapper-page">

  <section class="panel mg-top-nav" style="background-color: <?php if ( get_post_meta($post->ID, 'page-background', true) ) : echo get_post_meta($post->ID, 'page-background', true); endif; ?>;">

    <div id="section-1-panel" class="panel-wrapper-min va-top">

      <div class="panel-inner">

        <div class="container pd-top-small typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-1-theme', true) ) : echo get_post_meta($post->ID, 'section-1-theme', true); endif; ?>">

          <div class="container-wrapper-100">

            <div id="page-heading-wrapper">

            <?php if ( get_post_meta($post->ID, 'page-svg', true)) { ?>

              <div id="page-title-description-wrapper" class="col-xs-6 np">

            <?php } else { ?>

              <div id="page-title-description-wrapper" class="col-xs-12 np">

            <?php } ?>

                <h1 id="page-title" class="page-title lead section">

                  <?php the_title(); ?>

                </h1>

                <div id="page-description">

                  <h2 id="<?php echo strtolower(str_replace(' ', '-', the_title('', '', false))); ?>-page-description" class="typr spaced frame">

                    <?php if ( get_post_meta($post->ID, 'page-description', true) ) : echo get_post_meta($post->ID, 'page-description', true); endif; ?>

                  </h2>

                </div>

              </div>

            </div>

          </div>

        </div>

        <?php if ( get_post_meta($post->ID, 'page-svg', true ) ) : ?>

          <div id="page-svg" class="page-svg col-xs-6 offset-xs-6 np">

            <svg id="<?php echo strtolower(str_replace(' ', '-', the_title('', '', false))); ?>-svg" data-name="<?php echo strtolower(str_replace(' ', '-', the_title('', '', false))); ?>" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 250">
              <defs>
                <style>.cls-1{fill:#ff5cc9;}.cls-2{fill:#5ce2ff;}.cls-3{fill:#3b2eff;}.cls-4{fill:#ffde17;}.cls-5{fill:#faffa2;}</style>
              </defs>
              <title><?php echo strtolower(str_replace(' ', '-', the_title('', '', false))); ?></title>
              <?php if ( get_post_meta($post->ID, 'page-svg', true ) ) : echo get_post_meta($post->ID, 'page-svg', true ); endif; ?>
            </svg>

          </div>

        <?php endif; ?>

      </div>

    </div>

  </section>

  <!--section id="breadcrumb" class="panel pd-top-small" style="background-color: <?php if ( get_post_meta($post->ID, 'section-1-background-colour', true) ) : echo get_post_meta($post->ID, 'section-1-background-colour', true); endif; ?>;">

    <div class="panel-inner">

      <div class="container">

        <div class="breadcrumb lighten theme"><?php get_breadcrumb(); ?></div>

      </div>

    </div>

  </section-->

  <section class="panel h50" style="background-color: <?php if ( get_post_meta($post->ID, 'page-background', true) ) : echo get_post_meta($post->ID, 'page-background', true); endif; ?>;">

    <div class="panel-wrapper va-top">

      <div class="panel-inner">

        <div class="container typr">

          <div class="container-wrapper-100">

            <div class="panel-page panel h50 br-full content typr">

              <?php the_content(); ?>

            </div>

            <?php
        			wp_link_pages( array(
        				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
        				'after'  => '</div>',
        			) );
        		?>

          </div>

        </div>

      </div>

    </div>

  </section>

<?php get_footer(); ?>
