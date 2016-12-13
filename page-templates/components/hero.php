<div class="hero feature <?php if ( get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?>" style="background-color: <?php if ( get_post_meta($post->ID, 'feature_background', true) ) : echo get_post_meta($post->ID, 'feature_background', true); endif; ?>;">

  <div class="feature-background nofix" style="background-image: url('<?php echo get_the_post_thumbnail_url( $post->ID, 'large' ); ?>');"></div>

  <div class="feature-wrap">

    <div class="feature-inner container">

      <div id="typed-strings">

        <p><a href="#read"><?php the_title(); ?></a></p>

      </div>

      <h1 class="entry-title <?php if ( get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?>"><span id="typed"></span></h1>

      <h2><?php if ( get_post_meta($post->ID, 'subheader', true) ) : echo get_post_meta($post->ID, 'subheader', true); endif; ?></h2>

    </div>

    <div class="feature-buttons container">

      <div class="entry-meta">

        <span class="feature-meta continue"><a href="#continue" class="btn btn-secondary btn-lg negative-wire  <?php if ( get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?>"><?php if ( get_post_meta($post->ID, 'call_to_action', true) ) : echo get_post_meta($post->ID, 'call_to_action', true); endif; ?></a></span>

      </div><!-- .entry-meta -->

    </div>

    <!--<div class="article-pseudo-header"></div>-->

  </div>

</div>
