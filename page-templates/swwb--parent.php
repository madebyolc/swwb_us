<?php
/**
 * Project name: SWWB
 * Template name: Parent
 * @package understrap
 */

get_header(); ?>

<script type="text/javascript" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-includes/js/ps/page-scroll.js"></script>
<script type="text/javascript" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-includes/js/ps/draw.js"></script>

<div class="wrapper top" id="wrapper-page">

  <section id="section-1" class="panel head-draw mg-top-nav pd-top theme <?php if ( is_singular() && get_post_meta($post->ID, 'draw-theme', true) ) : echo get_post_meta($post->ID, 'draw-theme', true); endif; ?>" style="background-color: <?php if ( get_post_meta($post->ID, 'draw-background-colour', true) ) : echo get_post_meta($post->ID, 'draw-background-colour', true); endif; ?>;">

    <div id="section-1-icon-wrapper" class="header-icon parent">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
        <path id="line"
          style="stroke-linecap: round; stroke-linejoin: round; stroke-dasharray: 509.23px; stroke-dashoffset: 509.23px;" fill="none" stroke-width="5"
          d="<?php if ( get_post_meta($post->ID, 'header-icon', true) ) : echo get_post_meta($post->ID, 'header-icon', true); endif; ?>"/>
      </svg>
    </div>

  </section>

  <section class="panel pd-top-small" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-1-background-image', true) ) : echo get_post_meta($post->ID, 'section-1-background-image', true); endif; ?>'); background-color: <?php if ( get_post_meta($post->ID, 'section-1-background-colour', true) ) : echo get_post_meta($post->ID, 'section-1-background-colour', true); endif; ?>;">

    <div id="section-1-panel" class="panel-wrapper va-top">

      <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-1-theme', true) ) : echo get_post_meta($post->ID, 'section-1-theme', true); endif; ?>">

            <div class="container-wrapper-100">

              <div id="section-1-description-wrapper typr">

                <h1 id="section-1-intro" class="lead section nmt col-sm-12 np">

                  <?php if ( get_post_meta($post->ID, 'section-1-intro', true) ) : echo get_post_meta($post->ID, 'section-1-intro', true); endif; ?>

                </h1>

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

                  <div id="child-<?php the_ID(); ?>" class="panel-row border-bottom col-sm-12 np">

                    <div class="col-sm-5 np">

                      <h1 class="b lead"><?php the_title(); ?></h1>

                    </div>

                    <div class="panel-box col-sm-6 offset-sm-1 np">

                      <p><?php if ( get_post_meta($post->ID, 'excerpt', true) ) : echo get_post_meta($post->ID, 'excerpt', true); endif; ?></p>

                      <h2 class="lighten b" ><small>Launched <?php echo get_the_date('M Y'); ?></small></h2>

                      <div class="typr right" style="padding-top: 1rem;">

                        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>" class="btn btn-primary btn-md go forward typr" role="button" aria-pressed="true">Campaign</a>

                      </div>

                    </div>

                  </div><!-- end row -->

                <?php endwhile; ?>

                <?php endif; wp_reset_query(); ?>

              </div>

            </div>

          </div>

      </div>

    </div>

  </section>

<?php get_footer(); ?>
