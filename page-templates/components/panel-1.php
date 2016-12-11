
<div class="hero feature <?php if ( get_post_meta($post->ID, 'id', true) ) : echo get_post_meta($post->ID, 'id', true); endif; ?> panel-1">

  <div class="feature-background nofix" style="background-image: url('<?php echo get_the_post_thumbnail_url( $post->ID, 'large' ); ?>');"></div>

  <div class="feature-wrap">

    <div class="feature-inner container">

      <h3>Panel</h3>

    </div>

  </div>

</div>
