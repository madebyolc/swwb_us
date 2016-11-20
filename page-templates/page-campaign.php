<?php
/**
 * Project name: SWWB
 * Template name: Page Campaign
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="full-width-page-wrapper">

  <hero class="hero push-top campaign" style="background-color: <?php if ( get_post_meta($post->ID, 'hero_colour', true) ) : echo get_post_meta($post->ID, 'hero_colour', true); endif; ?>; background-image: url('<?php if ( get_post_meta($post->ID, 'hero_image', true) ) : echo get_post_meta($post->ID, 'hero_image', true); endif; ?>')">

    <div class="hero-wrap">

      <div class="hero-inner center container">

        <h1>
          <?php if ( get_post_meta($post->ID, 'header', true) ) : echo get_post_meta($post->ID, 'header', true); endif; ?>
        </h1>

        <p class="lead">
          <?php if ( get_post_meta($post->ID, 'subheader', true) ) : echo get_post_meta($post->ID, 'subheader', true); endif; ?>
        </p>

        <div class="hero-cta">
          <a class="btn btn-primary btn-lg" href="<?php if ( get_post_meta($post->ID, 'call_to_action_link', true) ) : echo get_post_meta($post->ID, 'call_to_action_link', true); endif; ?>">
            <?php if ( get_post_meta($post->ID, 'call_to_action', true) ) : echo get_post_meta($post->ID, 'call_to_action', true); endif; ?>
          </a>
        </div>

      </div><!-- .hero-inner end -->

    </div>

  </hero> <!-- hero -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
