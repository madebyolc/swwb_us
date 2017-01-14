<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="archive-wrapper">

    <div id="content" class="container archive">

        <div class="row">

    	    <div id="primary" class="content-area">

            <main id="main" class="site-main" role="main">

                      <?php if ( have_posts() ) : ?>

                        <header class="page-header typr">

                            <?php if ( is_category() ) :

                              echo '<h1 class="page-title">' . single_cat_title( 'News from ', false ) . '</h1>';
                              the_archive_description( '<h3 class="taxonomy-description">', '</h3>' );

                              elseif ( is_archive() ) :

                              echo '<h1 class="page-title">' . str_replace('Month: ','News in ',get_the_archive_title()) . '</h1>';

                            endif; ?>

                            <span class="list-archive-nav">
                              <a href="#" class="button" data-toggle="collapse" data-target="#list-archive-filter" data-parent="#list-archive-group" aria-expanded="false" aria-controls="list-archive-filter">
                                Filter
                              </a>
                            </span>

                            <div class="list-archive-container collapse" id="list-archive-filter">

                              <div class="wrap">
                                <div class="list-archive typr">
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <span class="title">Group</span>
                                      <?php
                                      $args = array(
                                        'current_category' => 3,
                                        'title_li' => ' '
                                      );
                                        wp_list_categories($args);
                                      ?>
                                    </div>
                                    <div class="col-sm-6">
                                      <span class="title">Date</span>
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

                        </header><!-- .page-header -->

                        <?php /* Start the Loop */ ?>
                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php
                                /* Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                get_template_part( 'loop-templates/content', get_post_format() );
                            ?>

                        <?php endwhile; ?>

                            <?php the_posts_navigation(); ?>

                        <?php else : ?>

                            <?php get_template_part( 'loop-templates/content', 'none' ); ?>

                        <?php endif; ?>

            </main><!-- #main -->

    	    </div><!-- #primary -->

    </div> <!-- .row -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
