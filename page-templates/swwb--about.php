<?php
/**
 * Project name: SWWB
 * Template name: About
 * @package understrap
 */

get_header(); ?>
<script type="text/javascript" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-includes/js/ps/page-about.js"></script>

<div class="wrapper top" id="wrapper-page">

  <section id="section-1" class="panel pin h100 pd-top-nav" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-1-background-image', true) ) : echo get_post_meta($post->ID, 'section-1-background-image', true); endif; ?>'); background-color: <?php if ( get_post_meta($post->ID, 'section-1-background-colour', true) ) : echo get_post_meta($post->ID, 'section-1-background-colour', true); endif; ?>;">

    <div class="section-mob-bg" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-1-background-image', true) ) : echo substr_replace(get_post_meta($post->ID, 'section-1-background-image', true),"_m.png",-4); endif; ?>'); background-position: top center;"></div>

    <div id="section-1-panel" class="panel-wrapper va-hero va-middle">

      <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-1-theme', true) ) : echo get_post_meta($post->ID, 'section-1-theme', true); endif; ?>">

            <div class="container-wrapper-100">

              <div id="section-1-description-wrapper">

                <!--<div class="breadcrumb lighten"><?php get_breadcrumb(); ?></div>-->

                <h1 id="section-1-intro" class="typr lead b">

                  <?php if ( get_post_meta($post->ID, 'section-1-intro', true) ) : echo get_post_meta($post->ID, 'section-1-intro', true); endif; ?>

                </h1>

                <h2 id="section-1-description" class="typr lighten spaced col-sm-8 np">

                  <?php if ( get_post_meta($post->ID, 'section-1-content', true) ) : echo get_post_meta($post->ID, 'section-1-content', true); endif; ?>

                </h2>

                <div class="col-sm-12 np">

                  <a href="<?php echo get_permalink( get_page_by_path( 'get-involved' ) ) ?>" class="btn btn-primary btn-lg go forward typr" role="button" aria-pressed="true">Get Involved</a>
                  <a href="#continue" class="btn btn-plain bg btn-lg go bottom typr" role="button" aria-pressed="true">Find out more</a>

                </div>

              </div>

            </div>

          </div>

      </div>

    </div>

    <div class="<?php if ( is_singular() && get_post_meta($post->ID, 'section-1-theme', true) ) : echo get_post_meta($post->ID, 'section-1-theme', true); endif; ?> scroll-this-way down"></div>

  </section>

  <div id="continue"></div>
  <section id="section-2" class="panel h100 pd-top-nav white" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-2-background-image', true) ) : echo get_post_meta($post->ID, 'section-2-background-image', true); endif; ?>'); background-position: bottom center; background-color: <?php if ( get_post_meta($post->ID, 'section-2-background-colour', true) ) : echo get_post_meta($post->ID, 'section-2-background-colour', true); endif; ?>;">

    <div class="section-mob-bg" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-2-background-image', true) ) : echo substr_replace(get_post_meta($post->ID, 'section-2-background-image', true),"_m.png",-4); endif; ?>'); background-position: top center;"></div>

    <div id="section-2-panel" class="panel-wrapper va-top">

      <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-2-theme', true) ) : echo get_post_meta($post->ID, 'section-2-theme', true); endif; ?>">

            <div class="container-wrapper-100">

              <div id="section-2-description-wrapper">

                <h1 id="section-2-intro" class="typr col-sm-7 np">

                  <?php if ( get_post_meta($post->ID, 'section-2-intro', true) ) : echo get_post_meta($post->ID, 'section-2-intro', true); endif; ?>

                </h1>

                <div class="col-sm-7 np">

                  <a href="#section-3" class="btn btn-plain go bottom np bg btn-lg typr" role="button" aria-pressed="true">Next</a>

                </div>

                <div id="section-2-poster" class="poster clear col-sm-6 offset-sm-6 np" style="height: 300px; background-image: url('<?php if ( get_post_meta($post->ID, 'section-2-poster', true) ) : echo get_post_meta($post->ID, 'section-2-poster', true); endif; ?>');"></div>

              </div>

            </div>

          </div>

      </div>

    </div>

  </section>

  <section id="section-3" class="panel h100 pd-top-nav" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-3-background-image', true) ) : echo get_post_meta($post->ID, 'section-3-background-image', true); endif; ?>'); background-position: bottom center; background-color: <?php if ( get_post_meta($post->ID, 'section-3-background-colour', true) ) : echo get_post_meta($post->ID, 'section-3-background-colour', true); endif; ?>;">

    <div class="section-mob-bg" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-3-background-image', true) ) : echo substr_replace(get_post_meta($post->ID, 'section-3-background-image', true),"_m.png",-4); endif; ?>'); background-position: bottom center;"></div>

    <div id="section-3-panel" class="panel-wrapper va-top">

      <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-3-theme', true) ) : echo get_post_meta($post->ID, 'section-3-theme', true); endif; ?>">

            <div class="container-wrapper-100">

              <div id="section-3-description-wrapper">

                <h2 id="section-3-intro" class="typr col-sm-8 offset-sm-2 np">

                  <?php if ( get_post_meta($post->ID, 'section-3-intro', true) ) : echo get_post_meta($post->ID, 'section-3-intro', true); endif; ?>

                </h2>

                <div class="col-sm-8 offset-sm-2 np">

                  <a href="#section-4" class="btn btn-plain go bottom np bg btn-lg typr" role="button" aria-pressed="true">Next</a>

                </div>

              </div>

            </div>

          </div>

      </div>

    </div>

  </section>

  <section id="section-4" class="panel h100 pd-top grey" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-4-background-image', true) ) : echo get_post_meta($post->ID, 'section-4-background-image', true); endif; ?>'); background-position: top center; background-color: <?php if ( get_post_meta($post->ID, 'section-4-background-colour', true) ) : echo get_post_meta($post->ID, 'section-4-background-colour', true); endif; ?>;">

    <div id="section-4-panel" class="panel-wrapper va-middle">

      <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-4-theme', true) ) : echo get_post_meta($post->ID, 'section-4-theme', true); endif; ?>">

            <div class="container-wrapper-100">

              <div id="section-4-description-wrapper typr">

                <p id="section-4-intro" class="lead col-sm-8 offset-sm-2 np">

                  <?php if ( get_post_meta($post->ID, 'section-4-intro', true) ) : echo get_post_meta($post->ID, 'section-4-intro', true); endif; ?>

                </p>

                <div class="col-sm-8 offset-sm-2 np">

                  <a href="#section-5" class="btn btn-plain go bottom np bg btn-lg typr" role="button" aria-pressed="true">Next: Our Aims &amp; Objectives</a>

                </div>

              </div>

            </div>

          </div>

      </div>

    </div>

  </section>

  <section id="section-5" class="panel h100 pd-top white" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-5-background-image', true) ) : echo get_post_meta($post->ID, 'section-5-background-image', true); endif; ?>'); background-color: <?php if ( get_post_meta($post->ID, 'section-5-background-colour', true) ) : echo get_post_meta($post->ID, 'section-5-background-colour', true); endif; ?>;">

    <div id="section-5-panel" class="panel-wrapper va-top">

      <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-5-theme', true) ) : echo get_post_meta($post->ID, 'section-5-theme', true); endif; ?>">

            <div class="container-wrapper-100">

              <div id="section-5-description-wrapper typr">

                <h2 id="section-5-intro" class="col-sm-12 np">

                  <?php if ( get_post_meta($post->ID, 'section-5-intro', true) ) : echo get_post_meta($post->ID, 'section-5-intro', true); endif; ?>

                </h2>

                <div class="panel-row row">

                  <div class="panel-boxes col-sm-6">

                    <div class="panel-box">

                      <h2 class="lighten" style="margin-bottom: 0;"><small>Objective 1</small></h2>

                      <h1 class="typr b">Campaigning</h1>

                      <p><?php if ( get_post_meta($post->ID, 'section-5-objective-1', true) ) : echo get_post_meta($post->ID, 'section-5-objective-1', true); endif; ?></p>

                      <a href="<?php echo get_permalink( get_page_by_path( 'campaign' ) ) ?>" class="btn btn-tertiary btn-lg go forward clear typr" role="button" aria-pressed="true">Our Campaigns</a>

                    </div>

                  </div>

                </div><!-- end row -->

                <div class="panel-row row">

                  <div class="panel-boxes col-sm-6 offset-sm-6">

                    <div class="panel-box">

                      <h2 class="lighten" style="margin-bottom: 0;"><small>Objective 2</small></h2>

                      <h1 class="typr b">Education/training and co-production</h1>

                      <p><?php if ( get_post_meta($post->ID, 'section-5-objective-2', true) ) : echo get_post_meta($post->ID, 'section-5-objective-2', true); endif; ?></p>

                      <a href="<?php echo get_permalink( get_page_by_path( 'resources' ) ) ?>" class="btn btn-tertiary btn-lg go forward clear typr" role="button" aria-pressed="true">Our Resources</a>

                    </div>

                  </div>

                </div><!-- end row -->

                <div class="panel-row row">

                  <div class="panel-boxes col-sm-6">

                    <div class="panel-box">

                      <h2 class="lighten" style="margin-bottom: 0;"><small>Objective 3</small></h2>

                      <h1 class="typr b">Direct Work</h1>

                      <p><?php if ( get_post_meta($post->ID, 'section-5-objective-3', true) ) : echo get_post_meta($post->ID, 'section-5-objective-3', true); endif; ?></p>

                      <a href="<?php echo get_permalink( get_page_by_path( 'direct-work' ) ) ?>" class="btn btn-tertiary btn-lg go forward clear typr" role="button" aria-pressed="true">Direct Work</a>

                    </div>

                  </div>

                </div><!-- end row -->

                <div class="panel-row row">

                  <div class="panel-boxes col-sm-6 offset-sm-6">

                    <div class="panel-box">

                      <h2 class="lighten" style="margin-bottom: 0;"><small>Objective 4</small></h2>

                      <h1 class="typr b">Regional Work</h1>

                      <p><?php if ( get_post_meta($post->ID, 'section-5-objective-4', true) ) : echo get_post_meta($post->ID, 'section-5-objective-4', true); endif; ?></p>

                    </div>

                  </div>

                </div><!-- end row -->

                <div class="panel-row row">

                  <div class="panel-boxes col-sm-6">

                    <div class="panel-box">

                      <h2 class="lighten" style="margin-bottom: 0;"><small>Objective 5</small></h2>

                      <h1 class="typr b">Work Together</h1>

                      <p><?php if ( get_post_meta($post->ID, 'section-5-objective-5', true) ) : echo get_post_meta($post->ID, 'section-5-objective-5', true); endif; ?></p>

                    </div>

                  </div>

                </div><!-- end row -->

              </div>

            </div>

          </div>

      </div>

    </div>

  </section>

  <section id="section-6" class="panel h100 pd-top white" style="background-color: <?php if ( get_post_meta($post->ID, 'section-6-background-colour', true) ) : echo get_post_meta($post->ID, 'section-6-background-colour', true); endif; ?>; background-image: url('<?php if ( get_post_meta($post->ID, 'section-6-background-image', true) ) : echo get_post_meta($post->ID, 'section-6-background-image', true); endif; ?>');">

    <div class="section-mob-bg" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-6-background-image', true) ) : echo substr_replace(get_post_meta($post->ID, 'section-6-background-image', true),"_m.png",-4); endif; ?>'); background-size: auto 100%!important; background-position: top center;"></div>

    <div id="section-6-panel" class="panel-wrapper va-middle">

      <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-6-theme', true) ) : echo get_post_meta($post->ID, 'section-6-theme', true); endif; ?>">

            <div class="container-wrapper-100">

              <div id="section-6-description-wrapper typr">

                <div class="panel-row row">

                  <div class="panel-boxes col-xs-8">

                    <div class="panel-box typr">

                      <h1 id="section-6-intro">

                        <?php if ( get_post_meta($post->ID, 'section-6-intro', true) ) : echo get_post_meta($post->ID, 'section-6-intro', true); endif; ?>

                      </h1>

                      <p><?php if ( get_post_meta($post->ID, 'section-6-content', true) ) : echo get_post_meta($post->ID, 'section-6-content', true); endif; ?></p>
                      <a href="<?php echo get_permalink( get_page_by_path( 'get-involved' ) ) ?>" class="btn btn-primary btn-lg go forward block typr" role="button" aria-pressed="true">Get Involved</a>

                    </div>

                  </div>

                </div><!-- end row -->

                <div class="panel-row row">

                  <div class="panel-boxes col-sm-12">

                    <div class="panel-box typr">

                      <h1><?php if ( get_post_meta($post->ID, 'section-6-content-2', true) ) : echo get_post_meta($post->ID, 'section-6-content-2', true); endif; ?></h1>

                    </div>

                  </div>

                </div><!-- end row -->

              </div>

            </div>

          </div>

      </div>

    </div>

  </section>

  <section id="section-7" class="panel h50 pd-top white" style="background-color: <?php if ( get_post_meta($post->ID, 'section-7-background-colour', true) ) : echo get_post_meta($post->ID, 'section-7-background-colour', true); endif; ?>; background-image: url('<?php if ( get_post_meta($post->ID, 'section-7-background-image', true) ) : echo get_post_meta($post->ID, 'section-7-background-image', true); endif; ?>');">

    <div id="section-7-panel" class="panel-wrapper va-middle">

      <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-7-theme', true) ) : echo get_post_meta($post->ID, 'section-7-theme', true); endif; ?>">

            <div class="container-wrapper-100">

              <div id="section-7-description-wrapper typr">

                <div class="panel-row row">

                  <div class="panel-boxes col-sm-12">

                    <div class="panel-box typr">

                      <h1><?php if ( get_post_meta($post->ID, 'section-7-content', true) ) : echo get_post_meta($post->ID, 'section-7-content', true); endif; ?></h1>
                      <p>The SWWB team</p>
                      <a href="<?php echo get_category_link( 3 ); ?> " class="btn block btn-tertiary btn-lg go forward clear typr" role="button" aria-pressed="true">Latest News</a>

                    </div>

                  </div>

                </div><!-- end row -->

                <a href="#" class="btn block btn-plain btn-lg go top np clear typr" role="button" aria-pressed="true">To the Top</a>

              </div>

            </div>

          </div>

      </div>

    </div>

  </section>

</div>

<?php get_footer(); ?>
