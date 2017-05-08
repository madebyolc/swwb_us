<?php
/**
 * Project name: SWWB
 * Template name: Resource Directory
 * @package understrap
 */

get_header(); ?>

<script type="text/javascript" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-includes/js/ps/page-scroll.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.6.0/clipboard.min.js"></script>

<div class="wrapper top" id="wrapper-page">

  <!--<section id="section-1" class="panel head-draw mg-top-nav pd-top theme <?php if ( is_singular() && get_post_meta($post->ID, 'draw-theme', true) ) : echo get_post_meta($post->ID, 'draw-theme', true); endif; ?>" style="background-color: <?php if ( get_post_meta($post->ID, 'draw-background-colour', true) ) : echo get_post_meta($post->ID, 'draw-background-colour', true); endif; ?>;">

    <div id="section-1-icon-wrapper" class="header-icon parent">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
        <path id="line"
          style="stroke-linecap: round; stroke-linejoin: round; stroke-dasharray: 509.23px; stroke-dashoffset: 509.23px;" fill="none" stroke-width="5"
          d="<?php if ( get_post_meta($post->ID, 'header-icon', true) ) : echo get_post_meta($post->ID, 'header-icon', true); endif; ?>"/>
      </svg>
    </div>

  </section>-->

  <section class="panel mg-top-nav pd-top-small" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-1-background-image', true) ) : echo get_post_meta($post->ID, 'section-1-background-image', true); endif; ?>'); background-color: <?php if ( get_post_meta($post->ID, 'section-1-background-colour', true) ) : echo get_post_meta($post->ID, 'section-1-background-colour', true); endif; ?>;">

    <div id="section-1-panel" class="panel-wrapper-min va-top">

      <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-1-theme', true) ) : echo get_post_meta($post->ID, 'section-1-theme', true); endif; ?>">

            <div class="container-wrapper-100">

              <div id="section-1-description-wrapper typr">

                <h1 id="section-1-intro" class="page-title lead section">

                  <?php if ( get_post_meta($post->ID, 'section-1-intro', true) ) : echo get_post_meta($post->ID, 'section-1-intro', true); endif; ?>

                </h1>

                <h2 id="section-1-description" class="typr spaced frame col-sm-6 np">

                  <?php if ( get_post_meta($post->ID, 'section-1-content', true) ) : echo get_post_meta($post->ID, 'section-1-content', true); endif; ?>

                </h2>

              </div>

            </div>

          </div>

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

  <section class="panel" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-2-background-image', true) ) : echo get_post_meta($post->ID, 'section-2-background-image', true); endif; ?>'); background-color: <?php if ( get_post_meta($post->ID, 'section-1-background-colour', true) ) : echo get_post_meta($post->ID, 'section-1-background-colour', true); endif; ?>;">

    <div class="panel-wrapper-min va-top">

      <div class="panel-inner">

        <div class="container typr theme ">

          <?php

          $args = array(
              'post_type'      => 'page',
              'posts_per_page' => -1,
              'post_parent'    => $post->ID,
              'order'          => 'desc',
              'orderby'        => 'post_date'
           );


          $parent = new WP_Query( $args );

          if ( $parent->have_posts() ) : ?>

          <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

            <section class="anc" id="<?php echo sanitize_title_with_dashes( get_the_title()); ?>"></section>

            <div id="child-<?php the_ID(); ?>" class="panel-row row nm panel-page br-full">

              <div class="panel-box heading grey row nm">

                <div class="col-xs-8 np">

                  <h1 class="d b"><?php the_title(); ?></h1>

                </div>

                <div class="col-xs-4 np right">

                  <h2 class="lighten b" >

                    <small>

                      <button class="btn btn-none" data-clipboard-text="<?php echo get_permalink( $post->post_parent ); ?>#<?php echo sanitize_title_with_dashes( get_the_title()); ?>"><i class="fa fa-link" aria-hidden="true"></i></button>

                    </small>

                  </h2>

                  <script>
                    var btns = document.querySelectorAll('button');
                    var clipboard = new Clipboard(btns);
                    clipboard.on('success', function(e) {
                        console.log(e);
                    });
                    clipboard.on('error', function(e) {
                        console.log(e);
                    });
                  </script>

                </div>

              </div>

              <div class="panel-box col-sm-6 np">

                <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?></a>

              </div>

              <div class="panel-box col-sm-6 np pad-left">

                <p class="typr spacer bottom"><?php if ( get_post_meta($post->ID, 'excerpt', true) ) : echo get_post_meta($post->ID, 'excerpt', true); endif; ?></p>

                <div class="typr">

                  <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>" class="btn btn-plain btn-md block go forward typr" role="button" aria-pressed="true"><?php the_title(); ?></a>

                </div>

              </div>

            </div><!-- end row -->

          <?php endwhile; ?>

          <?php endif; wp_reset_query(); ?>

        </div>

      </div>

    </div>

  </section>

<?php get_footer(); ?>
