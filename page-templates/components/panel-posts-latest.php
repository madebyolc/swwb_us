<div id="panel-1" class="panel">

  <div id="primary" class="content-area">

    <h1>Latest Articles</h1>

    <main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : ?>

        <?php
        // the query
        $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
        <?php if ( $wpb_all_query->have_posts() ) : ?>
        <ul class="box box-box-box">
            <!-- the loop -->
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

              <li class="box-post">

                <a class="box-button" href="<?php the_permalink(); ?>" style="background-color: <?php if ( get_post_meta($post->ID, 'feature_background', true) ) : echo get_post_meta($post->ID, 'feature_background', true); endif; ?>;">



                  <?php if ( has_post_thumbnail() ) { ?>

                    <div class="box-post-feature">

                      <span class="title">
                        <?php the_title(); ?>
                        <div class="box-button-cta">Read</div>
                      </span>

                      <?php the_post_thumbnail('medium_large'); ?>


                    </div>

                  <?php } else { ?>

                    <div class="box-post-caption">

                      <span class="title">
                        <?php the_title(); ?>
                        <div class="box-button-cta">Read</div>
                      </span>

                    </div>

                  <?php } ?>

                </a>

              </li>

            <?php endwhile; ?>
            <!-- end of the loop -->
        </ul>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

      <?php endif; ?>

    </main><!-- #main -->

  </div><!-- #primary -->

</div><!-- #panel-1 -->
