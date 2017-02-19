<?php
/**
 * Project name: SWWB
 * Template name: Campaigns
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

                  <?php
                  $children = wp_list_pages( 'title_li=&child_of='.$post->ID.'&echo=25' );
                  if ( $children) : ?>
                      <br>
                      <br>
                      <ul>
                          <?php echo $children; ?>
                      </ul>
                  <?php endif; ?>

                </h2>

              </div>

            </div>

          </div>

      </div>

    </div>

  </section>

</div>

<?php get_footer(); ?>
