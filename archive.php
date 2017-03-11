<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header(); ?>

<script type="text/javascript" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-includes/js/ps/page-scroll.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.6.0/clipboard.min.js"></script>

  <div class="wrapper top" id="wrapper-page">

    <section id="archive-section" class="archive-section panel mg-top-nav pd-top-small" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-1-background-image', true) ) : echo get_post_meta($post->ID, 'section-1-background-image', true); endif; ?>'); background-color: <?php if ( get_post_meta($post->ID, 'section-1-background-colour', true) ) : echo get_post_meta($post->ID, 'section-1-background-colour', true); endif; ?>;">

      <div class="panel-wrapper-min va-top">

        <div class="panel-inner">

            <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-1-theme', true) ) : echo get_post_meta($post->ID, 'section-1-theme', true); endif; ?>">

              <div class="container-wrapper-100">

                <div id="section-1-description-wrapper typr">

                  <?php if ( is_category() ) :

                    echo '<h1 class="page-title lead section">' . single_cat_title( 'SWWB ', false ) . '</h1>';
                    the_archive_description( '<h2 class="typr spaced frame">', '</p>' );

                    elseif ( is_archive() ) :

                    echo '<p class="typr lead  db">' . str_replace('Month: ','',get_the_archive_title()) . '</p>';

                  endif; ?>

                </div>

              </div>

            </div>

            <div class="archive-filter container archive typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-1-theme', true) ) : echo get_post_meta($post->ID, 'section-1-theme', true); endif; ?>">

              <div class="container-wrapper-100">

                <div class="col-sm-12 np typr left">

                  <span class="list-archive-nav">
                    <a href="#" class="button btn btn-tertiary go bottom" data-toggle="collapse" data-target="#list-archive-filter" data-parent="#list-archive-group" aria-expanded="false" aria-controls="list-archive-filter">
                      Filter
                    </a>
                  </span>

                  <div class="list-archive-container collapse" id="list-archive-filter">

                    <div class="wrap">
                      <div class="list-archive typr left">
                        <div class="row">
                          <div class="col-sm-6">
                            <span class="title b">Group</span>
                            <?php
                            $args = array(
                              'current_category' => 3,
                              'title_li' => ' '
                            );
                              wp_list_categories($args);
                            ?>
                          </div>
                          <div class="col-sm-6">
                            <span class="title b">Date</span>
                            <?php
                              global $wpdb;
                              $limit = 0;
                              $year_prev = null;
                              $months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,	YEAR( post_date ) AS year, COUNT( id ) as post_count FROM $wpdb->posts WHERE post_status = 'publish' and post_date <= now( ) and post_type = 'post' GROUP BY month , year ORDER BY post_date DESC");
                              foreach($months as $month) :
                                $year_current = $month->year;
                                if ($year_current != $year_prev){
                                  if ($year_prev != null){?>

                                  <?php } ?>

                                <li class="archive-year"><a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/"><?php echo $month->year; ?></a></li>

                                <?php } ?>
                                <li class="archive-date"><a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>"><span class="archive-month"><?php echo date_i18n("F", mktime(0, 0, 0, $month->month, 1, $month->year)) ?></span></a></li>
                              <?php $year_prev = $year_current;

                              if(++$limit >= 18) { break; }

                              endforeach; ?>
                          </div>
                      </div>

                    </div>
                  </div>

                </div>

                </div>

              </div>

            </div>

        </div>

      </div>

    </section>

    <section class="archive-panel panel">

      <div class="panel-wrapper-min">

        <div class="panel-inner">

          <div class="container typr theme ">

            <div class="container-wrapper-100">

              <?php if ( have_posts() ) : ?>

              <?php /* Start the Loop */ ?>
              <?php while ( have_posts() ) : the_post(); ?>

                <div class="article-box-panel">
                  <?php
                      /* Include the Post-Format-specific template for the content.
                       * If you want to override this in a child theme, then include a file
                       * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                       */
                      get_template_part( 'loop-templates/content', get_post_format() );
                  ?>
                </div>

              <?php endwhile; ?>

            </div>

          </div>

        </div>

      </div>

    </section>

    <section id="sub-<?php the_ID(); ?>" class="archive-pagination sub-page panel">

      <div id="section-1-panel">

        <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-1-theme', true) ) : echo get_post_meta($post->ID, 'section-1-theme', true); endif; ?>">

            <div class="container-wrapper-100">

              <div class="panel-page pagination br-top no-shadow">

                <div class="previous typr"><span class="link"><?php next_posts_link( 'Previous' ); ?></span></div>

                <div class="next typr"><span class="link"><?php previous_posts_link( 'Next' ); ?></span></div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </section>

    </div>

    <?php else : ?>

        <?php get_template_part( 'loop-templates/content', 'none' ); ?>

    <?php endif; ?>

  </div><!-- Container end -->

<?php get_footer(); ?>
