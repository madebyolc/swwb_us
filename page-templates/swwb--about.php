<?php
/**
 * Project name: SWWB
 * Template name: About
 * @package understrap
 */

get_header(); ?>

<script type="text/javascript" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-includes/js/ps/page-scroll.js"></script>

<div class="page-about wrapper top" id="wrapper-page">

  <section id="section-1-<?php the_ID(); ?>" class="panel h100 pd-top-nav canvas" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-1-background-image', true) ) : echo get_post_meta($post->ID, 'section-1-background-image', true); endif; ?>'); background-color: <?php if ( get_post_meta($post->ID, 'section-1-background-colour', true) ) : echo get_post_meta($post->ID, 'section-1-background-colour', true); endif; ?>;">

    <div class="section-mob-bg" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-1-background-image', true) ) : echo substr_replace(get_post_meta($post->ID, 'section-1-background-image', true),"_m.png",-4); endif; ?>'); background-position: top center;"></div>

    <div id="section-1-panel" class="panel-wrapper va-hero va-middle">

      <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-1-theme', true) ) : echo get_post_meta($post->ID, 'section-1-theme', true); endif; ?>">

            <div class="container-wrapper-100">

              <div id="section-1-intro-wrapper" class="section-1-lead typr">

                <div id="typed-strings">

                  <?php if ( get_post_meta($post->ID, 'section-1-type-1', true) ) : echo "<p>"; echo get_post_meta($post->ID, 'section-1-type-1', true); echo "</p>"; endif; ?>
                  <?php if ( get_post_meta($post->ID, 'section-1-type-2', true) ) : echo "<p>"; echo get_post_meta($post->ID, 'section-1-type-2', true); echo "</p>"; endif; ?>
                  <?php if ( get_post_meta($post->ID, 'section-1-type-3', true) ) : echo "<p>"; echo get_post_meta($post->ID, 'section-1-type-3', true); echo "</p>"; endif; ?>
                  <?php if ( get_post_meta($post->ID, 'section-1-type-4', true) ) : echo "<p>"; echo get_post_meta($post->ID, 'section-1-type-4', true); echo "</p>"; endif; ?>
                  <?php if ( get_post_meta($post->ID, 'section-1-type-5', true) ) : echo "<p>"; echo get_post_meta($post->ID, 'section-1-type-5', true); echo "</p>"; endif; ?>
                  <?php if ( get_post_meta($post->ID, 'section-1-type-6', true) ) : echo "<p>"; echo get_post_meta($post->ID, 'section-1-type-6', true); echo "</p>"; endif; ?>

                </div>

                <span id="typed" class="typr typed lead d" style="background-color: <?php if ( get_post_meta($post->ID, 'section-1-background-colour', true) ) : echo get_post_meta($post->ID, 'section-1-background-colour', true); endif; ?>;"></span>

              </div>

              <div id="section-1-description-wrapper" class="col-sm-12 np">

                <!--<div class="breadcrumb lighten"><?php get_breadcrumb(); ?></div>-->

                <h2 id="section-1-description" class="typr d spaced frame col-sm-6 np">

                  <?php if ( get_post_meta($post->ID, 'section-1-content', true) ) : echo get_post_meta($post->ID, 'section-1-content', true); endif; ?>

                </h2>

                <div class="btn-group col-sm-12 np" style="padding-bottom: 2rem;">

                  <a href="#continue" class="btn btn-plain bg btn-lg block go bottom typr" role="button" aria-pressed="true">Find out more</a>
                  <a href="<?php echo get_permalink( get_page_by_path( 'get-involved' ) ) ?>" class="btn btn-primary btn-lg block go forward typr" role="button" aria-pressed="true">Get Involved</a>

                </div>

              </div>

            </div>

          </div>

      </div>

    </div>

    <!--<div class="<?php if ( is_singular() && get_post_meta($post->ID, 'section-1-theme', true) ) : echo get_post_meta($post->ID, 'section-1-theme', true); endif; ?> scroll-this-way down"></div>-->

  </section>
  
  <div id="continue"></div>
  <section id="section-2" class="panel h100 pd-top-nav white" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-2-background-image', true) ) : echo get_post_meta($post->ID, 'section-2-background-image', true); endif; ?>'); background-position: bottom center; background-color: <?php if ( get_post_meta($post->ID, 'section-2-background-colour', true) ) : echo get_post_meta($post->ID, 'section-2-background-colour', true); endif; ?>;">

    <div class="section-mob-bg" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-2-background-image', true) ) : echo substr_replace(get_post_meta($post->ID, 'section-2-background-image', true),"_m.png",-4); endif; ?>'); background-position: top center;"></div>

    <div id="section-2-panel" class="panel-wrapper va-middle">

      <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-2-theme', true) ) : echo get_post_meta($post->ID, 'section-2-theme', true); endif; ?>">

            <div class="container-wrapper-100">

              <div id="section-2-description-wrapper">

                <p id="section-2-intro" class="box col-xs-10 offset-xs-1 col-sm-6 offset-sm-3" style="background-color: <?php if ( get_post_meta($post->ID, 'section-2-background-colour', true) ) : echo get_post_meta($post->ID, 'section-2-background-colour', true); endif; ?>;">

                  <?php if ( get_post_meta($post->ID, 'section-2-intro', true) ) : echo get_post_meta($post->ID, 'section-2-intro', true); endif; ?>

                  <br/><br/>

                  <a href="#section-3" class="btn btn-plain go bottom np bg btn-xs typr" role="button" aria-pressed="true">Next</a>

                </p>

                <!--<div id="section-2-poster" class="poster clear col-sm-6 offset-sm-6 np" style="height: 300px; background-image: url('<?php if ( get_post_meta($post->ID, 'section-2-poster', true) ) : echo get_post_meta($post->ID, 'section-2-poster', true); endif; ?>');"></div>-->

              </div>

            </div>

          </div>

      </div>

    </div>

  </section>
  <section class="anc" id="section-3"></section>
  <section class="panel h100" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-3-background-image', true) ) : echo get_post_meta($post->ID, 'section-3-background-image', true); endif; ?>'); background-position: bottom center; background-color: <?php if ( get_post_meta($post->ID, 'section-3-background-colour', true) ) : echo get_post_meta($post->ID, 'section-3-background-colour', true); endif; ?>;">

    <div class="section-mob-bg" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-3-background-image', true) ) : echo substr_replace(get_post_meta($post->ID, 'section-3-background-image', true),"_m.png",-4); endif; ?>'); background-position: bottom center;"></div>

    <div id="section-3-panel" class="panel-wrapper va-middle">

      <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-3-theme', true) ) : echo get_post_meta($post->ID, 'section-3-theme', true); endif; ?>">

            <div class="container-wrapper-100">

              <div class="panel-page transparent col-xs-12 col-sm-12">

                <div id="section-3-description-wrapper" class="typr col-sm-12 np">

                  <h1 id="section-3-heading" class="lead section">

                    <?php if ( get_post_meta($post->ID, 'section-3-intro', true) ) : echo get_post_meta($post->ID, 'section-3-intro', true); endif; ?>

                  </h1>

                </div>

                <div class="col-sm-6 np">

                  <div class="col-sm-12 np">

                    <p id="section-3-intro" class="typr spaced frame">

                      <?php if ( get_post_meta($post->ID, 'section-3-content', true) ) : echo get_post_meta($post->ID, 'section-3-content', true); endif; ?>

                    </p>

                  </div>

                </div>

                <div id="section-3-poster" class="poster pin-left col-sm-6" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-3-poster', true) ) : echo get_post_meta($post->ID, 'section-3-poster', true); endif; ?>');"></div>

              </div>

            </div>

          </div>

      </div>

    </div>

  </section>

  <section class="anc" id="section-4"></section>
  <section class="panel h100 grey" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-4-background-image', true) ) : echo get_post_meta($post->ID, 'section-4-background-image', true); endif; ?>'); background-position: top center; background-color: <?php if ( get_post_meta($post->ID, 'section-4-background-colour', true) ) : echo get_post_meta($post->ID, 'section-4-background-colour', true); endif; ?>;">

    <div id="section-4-panel" class="panel-wrapper va-top">

      <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-4-theme', true) ) : echo get_post_meta($post->ID, 'section-4-theme', true); endif; ?>">

            <div class="container-wrapper-100">

              <div class="panel-page transparent col-xs-12 col-sm-12 offset-sm-0">

                <div id="section-4-description-wrapper typr">

                  <p id="section-4-intro" class="typr spaced frame">

                    <?php if ( get_post_meta($post->ID, 'section-4-intro', true) ) : echo get_post_meta($post->ID, 'section-4-intro', true); endif; ?>

                    <br/><br/>

                    <a href="#section-5" class="btn btn-plain go bottom np bg btn-xs typr" role="button" aria-pressed="true">Aims &amp; Objectives</a>

                  </p>

                  <div id="section-4-poster" class="poster clear col-sm-12 np" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-4-poster', true) ) : echo get_post_meta($post->ID, 'section-4-poster', true); endif; ?>');"></div>

                </div>

              </div>

            </div>

          </div>

      </div>

    </div>

  </section>

  <section class="anc" id="section-5"></section>
  <section class="panel h100 white" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-5-background-image', true) ) : echo get_post_meta($post->ID, 'section-5-background-image', true); endif; ?>'); background-color: <?php if ( get_post_meta($post->ID, 'section-5-background-colour', true) ) : echo get_post_meta($post->ID, 'section-5-background-colour', true); endif; ?>;">

    <div id="section-5-panel" class="panel-wrapper va-top">

      <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-5-theme', true) ) : echo get_post_meta($post->ID, 'section-5-theme', true); endif; ?>">

            <div class="container-wrapper-100">

              <div id="section-5-description-wrapper typr">

                <h1 id="section-5-intro" class="lead section col-sm-12 np">

                  <?php if ( get_post_meta($post->ID, 'section-5-intro', true) ) : echo get_post_meta($post->ID, 'section-5-intro', true); endif; ?>

                </h1>

                <div class="panel-row border-bottom col-sm-12 np">

                  <div class="col-xs-12 np">

                    <div class="panel-box">

                      <h2 class="lighten b" style="margin-bottom: 0;"><small>Objective 1</small></h2>

                    </div>

                  </div>

                  <div class="col-sm-5 np">

                    <h1 class="d lead b">Campaigning</h1>

                  </div>

                  <div class="panel-box col-sm-6 offset-sm-1 np">

                    <p><?php if ( get_post_meta($post->ID, 'section-5-objective-1', true) ) : echo get_post_meta($post->ID, 'section-5-objective-1', true); endif; ?></p>

                    <h2 class="lighten b" ><small>...</small></h2>

                    <a href="<?php echo get_permalink( get_page_by_path( 'campaign' ) ) ?>" class="btn btn-tertiary btn-sm go forward clear typr" role="button" aria-pressed="true">Campaigns</a>

                  </div>

                </div><!-- end row -->

                <div class="panel-row border-bottom col-sm-12 np">

                  <div class="col-xs-12 np">

                    <div class="panel-box">

                      <h2 class="lighten b" style="margin-bottom: 0;"><small>Objective 2</small></h2>

                    </div>

                  </div>

                  <div class="col-sm-5 np">

                    <h1 class="d lead b">Education / Training &amp; Co-Production</h1>

                  </div>

                  <div class="panel-box col-sm-6 offset-sm-1 np">

                    <p><?php if ( get_post_meta($post->ID, 'section-5-objective-2', true) ) : echo get_post_meta($post->ID, 'section-5-objective-2', true); endif; ?></p>

                    <h2 class="lighten b" ><small>...</small></h2>

                    <a href="<?php echo get_permalink( get_page_by_path( 'resources' ) ) ?>" class="btn btn-tertiary btn-sm go forward clear typr" role="button" aria-pressed="true">Resources</a>

                  </div>

                </div><!-- end row -->

                <div class="panel-row border-bottom col-sm-12 np">

                  <div class="col-xs-12 np">

                    <div class="panel-box">

                      <h2 class="lighten b" style="margin-bottom: 0;"><small>Objective 3</small></h2>

                    </div>

                  </div>

                  <div class="col-sm-5 np">

                    <h1 class="d lead b">Direct Work</h1>

                  </div>

                  <div class="panel-box col-sm-6 offset-sm-1 np">

                    <p><?php if ( get_post_meta($post->ID, 'section-5-objective-3', true) ) : echo get_post_meta($post->ID, 'section-5-objective-3', true); endif; ?></p>

                    <h2 class="lighten b" ><small>...</small></h2>

                    <a href="<?php echo get_permalink( get_page_by_path( 'direct-work' ) ) ?>" class="btn btn-tertiary btn-sm go forward clear typr" role="button" aria-pressed="true">Direct Work</a>

                  </div>

                </div><!-- end row -->

                <div class="panel-row border-bottom col-sm-12 np">

                  <div class="col-xs-12 np">

                    <div class="panel-box">

                      <h2 class="lighten b" style="margin-bottom: 0;"><small>Objective 4</small></h2>

                    </div>

                  </div>

                  <div class="col-sm-5 np">

                    <h1 class="d lead b">Regional Work</h1>

                  </div>

                  <div class="panel-box col-sm-6 offset-sm-1 np">

                    <p><?php if ( get_post_meta($post->ID, 'section-5-objective-4', true) ) : echo get_post_meta($post->ID, 'section-5-objective-4', true); endif; ?></p>

                  </div>

                </div><!-- end row -->

                <div class="panel-row border-bottom col-sm-12 np">

                  <div class="col-xs-12 np">

                    <div class="panel-box">

                      <h2 class="lighten b" style="margin-bottom: 0;"><small>Objective 5</small></h2>

                    </div>

                  </div>

                  <div class="col-sm-5 np">

                    <h1 class="d lead b">Work Together</h1>

                  </div>

                  <div class="panel-box col-sm-6 offset-sm-1 np">

                    <p><?php if ( get_post_meta($post->ID, 'section-5-objective-5', true) ) : echo get_post_meta($post->ID, 'section-5-objective-5', true); endif; ?></p>

                    <h2 class="lighten b" ><small>...</small></h2>

                    <a href="#section-6" class="btn btn-tertiary btn-sm go bottom clear typr" role="button" aria-pressed="true">Get Involved</a>

                  </div>

                </div><!-- end row -->

              </div>

            </div>

          </div>

      </div>

    </div>

  </section>

  <section class="anc" id="section-6"></section>
  <section class="panel pd-top" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-6-background-image', true) ) : echo get_post_meta($post->ID, 'section-6-background-image', true); endif; ?>'); background-position: bottom center; background-color: <?php if ( get_post_meta($post->ID, 'section-6-background-colour', true) ) : echo get_post_meta($post->ID, 'section-6-background-colour', true); endif; ?>;">

    <div class="section-mob-bg" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-6-background-image', true) ) : echo substr_replace(get_post_meta($post->ID, 'section-6-background-image', true),"_m.png",-4); endif; ?>'); background-position: bottom center;"></div>

    <div id="section-6-panel" class="panel-wrapper va-top">

      <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-6-theme', true) ) : echo get_post_meta($post->ID, 'section-6-theme', true); endif; ?>">

            <div class="container-wrapper-100">

              <div class="col-sm-7 offset-sm-5 np">

                <div class="panel-page br-top col-xs-12 col-sm-12 offset-sm-0">

                  <div id="section-6-description-wrapper" class="typr">

                    <h1 id="section-6-heading" class="lead section col-sm-12 np">

                      <?php if ( get_post_meta($post->ID, 'section-6-intro', true) ) : echo get_post_meta($post->ID, 'section-6-intro', true); endif; ?>

                    </h1>

                  </div>

                  <div class="col-sm-12 np">

                    <p id="section-6-intro" class="typr spaced frame">

                      <?php if ( get_post_meta($post->ID, 'section-6-content', true) ) : echo get_post_meta($post->ID, 'section-6-content', true); endif; ?>

                      <br/><br/>

                      <a href="<?php echo get_permalink( get_page_by_path( 'get-involved' ) ) ?>" class="btn btn-primary btn-lg go forward block typr" role="button" aria-pressed="true">Get Involved</a>

                    </p>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

  </section>

  <section class="anc" id="section-7"></section>
  <section id="section-7" class="panel h100 pd-top-nav white" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-7-background-image', true) ) : echo get_post_meta($post->ID, 'section-7-background-image', true); endif; ?>'); background-position: bottom center; background-color: <?php if ( get_post_meta($post->ID, 'section-7-background-colour', true) ) : echo get_post_meta($post->ID, 'section-7-background-colour', true); endif; ?>;">

    <div class="section-mob-bg" style="background-image: url('<?php if ( get_post_meta($post->ID, 'section-7-background-image', true) ) : echo substr_replace(get_post_meta($post->ID, 'section-7-background-image', true),"_m.png",-4); endif; ?>'); background-position: top center;"></div>

    <div id="section-7-panel" class="panel-wrapper va-middle">

      <div class="panel-inner">

          <div class="container typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-2-theme', true) ) : echo get_post_meta($post->ID, 'section-2-theme', true); endif; ?>">

            <div class="container-wrapper-100">

              <div id="section-2-description-wrapper">

                <p id="section-2-intro" class="box col-xs-10 offset-xs-1 col-sm-8 offset-sm-2" style="background-color: <?php if ( get_post_meta($post->ID, 'section-7-background-colour', true) ) : echo get_post_meta($post->ID, 'section-7-background-colour', true); endif; ?>;">

                  <span id="section-5-intro" class="lead col-sm-12 np">

                    Continue reading

                  </span>

                  <?php if ( get_post_meta($post->ID, 'section-7-intro', true) ) : echo get_post_meta($post->ID, 'section-7-intro', true); endif; ?>

                  <br/><br/>

                  <a href="article/group" class="btn btn-plain go forward np bg btn-xs typr" role="button" aria-pressed="true">Our News Network</a>

                </p>

                <!--<div id="section-2-poster" class="poster clear col-sm-6 offset-sm-6 np" style="height: 300px; background-image: url('<?php if ( get_post_meta($post->ID, 'section-2-poster', true) ) : echo get_post_meta($post->ID, 'section-2-poster', true); endif; ?>');"></div>-->

              </div>

            </div>

          </div>

      </div>

    </div>

  </section>

</div>

<?php get_footer(); ?>
