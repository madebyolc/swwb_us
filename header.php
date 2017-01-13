<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
<?php wp_head(); ?>
</head

<body <?php body_class( "pushmenu-push" ); ?>>

<swwbwrap class="pushmenu-push">

  <nav class="pushmenu pushmenu-left"><!-- remove .pushmenu-open -->

    <div class="wrap-pushmenu">

      <nav class="navbar site-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">

        <div class="container">

          <div class="wrap-brand">

            <!--<?php if (!has_custom_logo()) { ?>
              <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                <?php bloginfo( 'name' ); ?>
              </a>
            <?php } else { the_custom_logo(); } ?>!--><!-- end custom logo -->

            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
              <!--<img title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" src="<?php echo esc_url( home_url( '/wp-content/uploads/lib/' ) ); ?>logo/exp/swwb_logo_n_square_exp.png"/>
            -->
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 800 800" style="enable-background:new 0 0 800 800;" xml:space="preserve">
              <g>
                <path class="swwb_logo" d="M59.8,326.5c0-8.6,6.6-12.6,14.6-12.6c10,0,20.9,6,31.5,17.3l33.2-32.2c-15.6-18.3-39.2-29.6-64.1-29.6
                  c-31.5,0-66.4,18.3-66.4,60.8c0,69.1,90.7,52.5,90.7,82.7c0,8-6.6,13.6-19.6,13.6c-17.3,0-31.2-9.3-38.2-24.2L0,428.1
                  c13.3,25.2,42.5,45.8,79,45.8c38.2,0,71.1-22.2,71.1-60.4C150.1,337.8,59.8,356.7,59.8,326.5z"/>
                <polygon class="swwb_logo" points="554.6,469.7 523.1,352.3 481.7,352.3 450.2,469.7 422.9,352.3 408.3,352.3 374.7,352.3 360.2,352.3 332.5,469.7
                  301,352.3 259.7,352.3 228.2,469.7 200.8,352.3 152.6,352.3 199,530.7 252.2,530.7 280.5,417.1 308.4,530.7 361.6,530.7
                  391.5,416.7 421.1,530.7 474.3,530.7 502.6,417.1 530.5,530.7 583.7,530.7 630.4,352.3 582.2,352.3 	"/>
                <path class="swwb_logo" d="M770.8,370c13.9-7.6,22.6-20.9,22.6-41.8c0-36.2-27.2-56.1-61.4-56.1h-88.3v199.2h96c33.9,0,60.4-18.6,60.4-55.1
                  C800,392.2,788.4,377.6,770.8,370z M694.4,316.2h31.2c9.3,0,16.9,8.3,16.9,17.6c0,9-7.6,17.6-16.9,17.6h-31.2V316.2z M731.9,427.1
                  h-37.5v-35.2h37.5c10,0,17.3,8.6,17.3,17.6C749.2,418.8,741.9,427.1,731.9,427.1z"/>
              </g>
              </svg>

            </a>

          </div> <!-- .wrap-brand -->

          <div class="push-esc">

            <button class="nav_close navbar-toggler visible-xs-up" type="button" data-toggle="collapse" data-target=".exCollapsingNavbar" aria-controls="exCollapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="sr-only">Close navigation</span>
              <span class="icon-bar one"></span>
              <span class="icon-bar two"></span>
              <span class="icon-bar three"></span>
            </button>

          </div> <!-- .push-esc -->

        </div>

      </nav> <!-- .site-navigation -->

      <div class="push-block-wrapper">

        <div class="push-block">

          <form method="get" id="searchform" class="form lg lines-dark" action="//localhost:3000/swwb/" role="search" _lpchecked="1">

            <label for="s" class="assistive-text sr-only">Search</label>

            <div class="input-group">

              <input type="text" class="field form-control" name="s" id="s" placeholder="Search …">

              <span class="input-group-btn">

                <input type="submit" class="submit btn btn-primary" name="submit" id="searchsubmit" value="Search">

              </span>

            </div>

          </form>

        </div> <!-- .push-block .search -->

        <div class="push-block push-nav">

            <?php	wp_nav_menu( array('theme_location' => 'global-menu', 'container_class' => 'global-menu' ) );?>

        </div> <!-- .push-block -->

        <div class="push-block push-nav">

          <?php	wp_nav_menu( array('theme_location' => 'global-social-menu', 'container_class' => 'global-social-menu' ) );?>

        </div> <!-- .push-block -->

      </div> <!-- .push-block-wrapper -->
    </div>

  </nav>

  <div id="page" class="hfeed site">

    <div class="page-button"></div>

    <header class="ah page-header">

      <div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

        <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'understrap' ); ?></a>

        <div class="sw-notice">

        </div>

        <nav class="navbar site-navigation theme <?php if ( is_singular() && get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?>" data-toggle="sticky-onscroll" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">

          <div class="container">

            <div class="wrap-brand">

              <!--<?php if (!has_custom_logo()) { ?>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                	<?php bloginfo( 'name' ); ?>
                </a>
              <?php } else { the_custom_logo(); } ?>!--><!-- end custom logo -->

              <a class="navbar-brand theme <?php if ( is_singular() && get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
              	<!--<img title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" src="<?php echo esc_url( home_url( '/wp-content/uploads/lib/' ) ); ?>logo/exp/swwb_logo_n_square_exp.png"/>
              -->
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   viewBox="0 0 800 800" style="enable-background:new 0 0 800 800;" xml:space="preserve">
                <g>
                  <path class="swwb_logo" d="M59.8,326.5c0-8.6,6.6-12.6,14.6-12.6c10,0,20.9,6,31.5,17.3l33.2-32.2c-15.6-18.3-39.2-29.6-64.1-29.6
                    c-31.5,0-66.4,18.3-66.4,60.8c0,69.1,90.7,52.5,90.7,82.7c0,8-6.6,13.6-19.6,13.6c-17.3,0-31.2-9.3-38.2-24.2L0,428.1
                    c13.3,25.2,42.5,45.8,79,45.8c38.2,0,71.1-22.2,71.1-60.4C150.1,337.8,59.8,356.7,59.8,326.5z"/>
                  <polygon class="swwb_logo" points="554.6,469.7 523.1,352.3 481.7,352.3 450.2,469.7 422.9,352.3 408.3,352.3 374.7,352.3 360.2,352.3 332.5,469.7
                    301,352.3 259.7,352.3 228.2,469.7 200.8,352.3 152.6,352.3 199,530.7 252.2,530.7 280.5,417.1 308.4,530.7 361.6,530.7
                    391.5,416.7 421.1,530.7 474.3,530.7 502.6,417.1 530.5,530.7 583.7,530.7 630.4,352.3 582.2,352.3 	"/>
                  <path class="swwb_logo" d="M770.8,370c13.9-7.6,22.6-20.9,22.6-41.8c0-36.2-27.2-56.1-61.4-56.1h-88.3v199.2h96c33.9,0,60.4-18.6,60.4-55.1
                    C800,392.2,788.4,377.6,770.8,370z M694.4,316.2h31.2c9.3,0,16.9,8.3,16.9,17.6c0,9-7.6,17.6-16.9,17.6h-31.2V316.2z M731.9,427.1
                    h-37.5v-35.2h37.5c10,0,17.3,8.6,17.3,17.6C749.2,418.8,741.9,427.1,731.9,427.1z"/>
                </g>
                </svg>

              </a>

            </div> <!-- .wrap-brand -->

            <div class="wrap-explore">

              <button class="nav_list navbar-toggler visible-xs-up" type="button" data-toggle="collapse" data-target=".exCollapsingNavbar" aria-controls="exCollapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">
        				<span class="sr-only">Toggle navigation</span>
                <span class="icon-bar one theme <?php if ( is_singular() && get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?>"></span>
                <span class="icon-bar two theme <?php if (is_singular() &&  get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?>"></span>
                <span class="icon-bar three theme <?php if ( is_singular() && get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?>"></span>
              </button>

            </div> <!-- .wrap-explore -->

            <div class="wrap-meta">

              <!--<a class="btn btn-secondary btn-sm" href="<?php if ( get_post_meta($post->ID, 'call_to_action_link', true) ) : echo get_post_meta($post->ID, 'call_to_action_link', true); endif; ?>">
                <?php
                  if ( get_post_meta($post->ID, 'call_to_action', true) ) {
                    echo get_post_meta($post->ID, 'call_to_action', true);
                  }
                  else {
                    echo 'Contextual Button';
                  }
                ?>
              </a>-->

            </div> <!-- .wrap-meta -->

          </div> <!-- .container -->

        </nav><!-- .site-navigation -->

    </div><!-- .wrapper-navbar end -->

  </header><!-- header end -->
