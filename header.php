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
              	<polygon class="swwb_logo" points="761.7,762.5 37.2,762.5 37.2,542.2 0,542.2 0,799.6 798.8,799.6 798.8,542.2 761.7,542.2 	"/>
              	<polygon class="swwb_logo" points="0.7,0 0.7,257.4 37.8,257.4 37.8,37.2 762.3,37.2 762.3,257.4 799.5,257.4 799.5,0 	"/>
              </g>
              <g>
              	<path class="swwb_logo" d="M156,277.7l34.6-8.8c2.5,22.8,19.6,33.5,40.2,33.5c20.2,0,31.4-10.4,31.4-25c0-42.2-93.2-25.9-93.2-88.2
              		c0-34.3,27.8-53.5,60.3-53.5c24,0,45.8,10.4,59.1,34l-28.9,17.7c-6.9-13.2-18.2-20.7-31-20.7c-13.4,0-24.1,8.4-24.1,20.4
              		c0,35.4,93.2,23.3,93.2,88.4c0,37.2-30.3,59-67.3,59C195.9,334.6,162.2,315.8,156,277.7z"/>
              	<path class="swwb_logo" d="M376.1,138.6h36.2l41.3,142.6l43.1-131.4h26.9l43.1,131.4l41.3-142.6H644l-58.1,193.7h-33.7L510,204.9l-42.1,127.5h-33.7
              		L376.1,138.6z"/>
              	<path class="swwb_logo" d="M156,470.5h36.2l41.3,142.6l43.1-131.4h26.9l43.1,131.4l41.3-142.6h36.2l-58.1,193.7h-33.7L290,536.7l-42.1,127.5h-33.7
              		L156,470.5z"/>
              	<path class="swwb_logo" d="M505.4,470.5h67c29.5,0,62.1,13.4,62.1,52.2c0,17.7-10.7,31.9-21.7,37.8c17.7,7,31.1,28.1,31.1,47.4
              		c0,36.1-30.3,56.2-63.1,56.2h-75.5V470.5z M575.9,548.5c13.4,0,26.6-4.8,26.6-23.9c0-15.1-12.9-22.8-29.5-22.8h-32.8v46.6H575.9z
              		 M581.5,631.1c18,0,28.2-8.6,28.2-26.9c0-13.8-11.5-25.6-29.8-25.6h-39.8v52.5H581.5z"/>
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
              	<polygon class="swwb_logo" points="761.7,762.5 37.2,762.5 37.2,542.2 0,542.2 0,799.6 798.8,799.6 798.8,542.2 761.7,542.2 	"/>
              	<polygon class="swwb_logo" points="0.7,0 0.7,257.4 37.8,257.4 37.8,37.2 762.3,37.2 762.3,257.4 799.5,257.4 799.5,0 	"/>
              </g>
              <g>
              	<path class="swwb_logo" d="M156,277.7l34.6-8.8c2.5,22.8,19.6,33.5,40.2,33.5c20.2,0,31.4-10.4,31.4-25c0-42.2-93.2-25.9-93.2-88.2
              		c0-34.3,27.8-53.5,60.3-53.5c24,0,45.8,10.4,59.1,34l-28.9,17.7c-6.9-13.2-18.2-20.7-31-20.7c-13.4,0-24.1,8.4-24.1,20.4
              		c0,35.4,93.2,23.3,93.2,88.4c0,37.2-30.3,59-67.3,59C195.9,334.6,162.2,315.8,156,277.7z"/>
              	<path class="swwb_logo" d="M376.1,138.6h36.2l41.3,142.6l43.1-131.4h26.9l43.1,131.4l41.3-142.6H644l-58.1,193.7h-33.7L510,204.9l-42.1,127.5h-33.7
              		L376.1,138.6z"/>
              	<path class="swwb_logo" d="M156,470.5h36.2l41.3,142.6l43.1-131.4h26.9l43.1,131.4l41.3-142.6h36.2l-58.1,193.7h-33.7L290,536.7l-42.1,127.5h-33.7
              		L156,470.5z"/>
              	<path class="swwb_logo" d="M505.4,470.5h67c29.5,0,62.1,13.4,62.1,52.2c0,17.7-10.7,31.9-21.7,37.8c17.7,7,31.1,28.1,31.1,47.4
              		c0,36.1-30.3,56.2-63.1,56.2h-75.5V470.5z M575.9,548.5c13.4,0,26.6-4.8,26.6-23.9c0-15.1-12.9-22.8-29.5-22.8h-32.8v46.6H575.9z
              		 M581.5,631.1c18,0,28.2-8.6,28.2-26.9c0-13.8-11.5-25.6-29.8-25.6h-39.8v52.5H581.5z"/>
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
