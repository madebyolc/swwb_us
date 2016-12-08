<div class="hero feature push-top <?php if ( get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?>" style="background-color: <?php if ( get_post_meta($post->ID, 'feature_background', true) ) : echo get_post_meta($post->ID, 'feature_background', true); endif; ?>;">

  <div class="feature-background nofix" style="background-image: url('<?php echo get_the_post_thumbnail_url( $post->ID, 'large' ); ?>');"></div>

  <div class="feature-wrap">

    <div class="feature-inner container">

      <div id="typed-strings">

        <p><a href="#read"><?php the_title(); ?></a></p>

      </div>

      <h1 class="entry-title <?php if ( get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?>">

        <span id="typed"></span>

      </h1>

      <h2>

        <?php if ( get_post_meta($post->ID, 'subheader', true) ) : echo get_post_meta($post->ID, 'subheader', true); endif; ?>

      </h2>

    </div>

    <div class="feature-buttons container">

      <div class="entry-meta">

        <span class="feature-meta continue"><a href="#read" class="btn btn-secondary btn-lg negative-wire  <?php if ( get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?>">Continue to Article</a></span>

        <span class="feature-meta  <?php if ( get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?> category"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php the_category(' '); ?></span>

        <span class="feature-meta  <?php if ( get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?> date"><i class="fa fa-calendar-o" aria-hidden="true"></i> <a href="<?php echo get_month_link('', ''); ?>"><?php the_date() ?></a></span>

        <span class="feature-meta  <?php if ( get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?> author"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?php the_author_posts_link(); ?></span>

      </div><!-- .entry-meta -->

    </div>

    <!--<div class="article-pseudo-header"></div>-->

  </div>

</div>
