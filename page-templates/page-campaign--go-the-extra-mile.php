<?php
/**
 * Project name: SWWB
 * Template name: Page Campaign - Go the Extra Mile
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="full-width-page-wrapper">

  <hero class="hero push-top campaign go-the-extra-mile" style="background-image: url('<?php if ( get_post_meta($post->ID, 'hero_image', true) ) : echo get_post_meta($post->ID, 'hero_image', true); endif; ?>')">

    <div  id="content" class="container">

      <h1>Hero</h1>

      <div style="text-align: center; padding: 10rem 0;">
        <a class="btn btn-info btn-lg" style="padding: 2rem 5rem; font-weight: bold; font-size: 2rem;" href="<?php if ( get_post_meta($post->ID, 'call_to_action_link', true) ) : echo get_post_meta($post->ID, 'call_to_action_link', true); endif; ?>">
          <?php if ( get_post_meta($post->ID, 'call_to_action', true) ) : echo get_post_meta($post->ID, 'call_to_action', true); endif; ?>
        </a>
      </div>

      <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'loop-templates/content', 'page' ); ?>

          <?php
              // If comments are open or we have at least one comment, load up the comment template
              if ( comments_open() || get_comments_number() ) :

                  comments_template();

              endif;
          ?>

      <?php endwhile; // end of the loop. ?>

    </div><!-- Container end -->

  </hero> <!-- hero -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
