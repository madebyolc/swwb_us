<?php
/**
 * Project name: SWWB
 * Template name: Campaigns
 * @package understrap
 */

get_header(); ?>

<script type="text/javascript" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-includes/js/ps/page-scroll.js"></script>
<script type="text/javascript" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-includes/js/ps/draw.js"></script>

<div class="wrapper top" id="wrapper-page">

  <section id="section-1" class="panel h25 pd-top-nav" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-1-background-image', true) ) : echo get_post_meta($post->ID, 'section-1-background-image', true); endif; ?>'); background-position: bottom center; background-color: <?php if ( get_post_meta($post->ID, 'section-1-background-colour', true) ) : echo get_post_meta($post->ID, 'section-1-background-colour', true); endif; ?>;">

    <div class="section-mob-bg" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-1-background-image', true) ) : echo substr_replace(get_post_meta($post->ID, 'section-1-background-image', true),"_m.png",-4); endif; ?>'); background-position: top center;"></div>

    <div id="section-1-panel" class="panel-wrapper va-hero va-middle">

      <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-1-theme', true) ) : echo get_post_meta($post->ID, 'section-1-theme', true); endif; ?>">

            <div class="container-wrapper-100">

              <div id="section-1-icon-wrapper" class="header-icon col-xs-4 offset-xs-4 col-sm-2 offset-sm-0 push-sm-10 np">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                  <path id="line"
                    style="stroke-linecap: round; stroke-linejoin: round; stroke-dasharray: 509.23px; stroke-dashoffset: 509.23px;" fill="none" stroke-width="5"
                    d="<?php if ( get_post_meta($post->ID, 'header-icon', true) ) : echo get_post_meta($post->ID, 'header-icon', true); endif; ?>"/>
                </svg>
              </div>

              <div id="section-1-intro-wrapper" class="col-xs-12 col-sm-10 pull-sm-2 np typr mob-center">

                <!--<div class="breadcrumb lighten"><?php get_breadcrumb(); ?></div>-->

                <div class="typr">
                  <h1 id="section-1-intro" class="typr lead d b"><?php if ( get_post_meta($post->ID, 'section-1-intro', true) ) : echo get_post_meta($post->ID, 'section-1-intro', true); endif; ?></h1>
                </div>

                <p id="section-1-description" class="typr lighten spaced">
                  <?php if ( get_post_meta($post->ID, 'section-1-content', true) ) : echo get_post_meta($post->ID, 'section-1-content', true); endif; ?>
                </p>

              </div>

          </div>

      </div>

    </div>

  </section>

  <?php

  $args = array(
      'post_type'      => 'page',
      'posts_per_page' => -1,
      'post_parent'    => $post->ID,
      'order'          => 'ASC',
      'orderby'        => 'menu_order'
   );


  $parent = new WP_Query( $args );

  if ( $parent->have_posts() ) : ?>

  <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

  <section id="sub-<?php the_ID(); ?>" class="campaign sub-page panel h25 pd-top" style="background-color: <?php if ( get_post_meta($post->ID, 'section-1-background-colour', true) ) : echo get_post_meta($post->ID, 'section-1-background-colour', true); endif; ?>;">

    <div id="section-1-panel" class="panel-wrapper va-hero va-middle">

      <div class="panel-inner">

        <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-1-theme', true) ) : echo get_post_meta($post->ID, 'section-1-theme', true); endif; ?>">

          <div class="container-wrapper-100">

            <div id="section-1-intro-wrapper" class="col-md-9 np typr mob-center">

            <!--<div class="breadcrumb lighten"><?php get_breadcrumb(); ?></div>-->

              <div class="typr">
                <h1 id="section-1-intro"><?php the_title(); ?></h1>
              </div>

            </div>

            <div id="section-1-description-wrapper" class="col-md-9 np typr">

              <p id="section-1-description" class="typr lighten spaced">

                <?php if ( get_post_meta($post->ID, 'excerpt', true) ) : echo get_post_meta($post->ID, 'excerpt', true); endif; ?>

              </p>

            </div>

            <div class="col-md-3 np typr mob-center right">

              <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>" class="btn btn-primary btn-md go forward typr" role="button" aria-pressed="true">Campaign</a>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

  <?php endwhile; ?>

<?php endif; wp_reset_query(); ?>

<?php get_footer(); ?>
