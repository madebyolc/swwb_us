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

    <div class="wrap-pushmenu container">

      <nav class="navbar site-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">

        <div class="push-esc">

          <button class="nav_close navbar-toggler visible-xs-up" type="button" data-toggle="collapse" data-target=".exCollapsingNavbar" aria-controls="exCollapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Close navigation</span>
            <span class="icon-bar one"></span>
            <span class="icon-bar two"></span>
            <span class="icon-bar three"></span>
          </button>

        </div> <!-- .push-esc -->



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

          <span class="title">Share:</span>
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

        <nav class="navbar site-navigation" data-toggle="sticky-onscroll" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">

          <div class="container">

            <div class="wrap-explore">

              <button class="nav_list navbar-toggler visible-xs-up" type="button" data-toggle="collapse" data-target=".exCollapsingNavbar" aria-controls="exCollapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">
        				<span class="sr-only">Toggle navigation</span>
                <span class="icon-bar one"></span>
                <span class="icon-bar two"></span>
                <span class="icon-bar three"></span>
              </button>

            </div> <!-- .wrap-explore -->

            <div class="wrap-brand">

              <?php if (!has_custom_logo()) { ?>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                	<?php bloginfo( 'name' ); ?>
                </a>
              <?php } else { the_custom_logo(); } ?><!-- end custom logo -->

            </div> <!-- .wrap-brand -->

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
