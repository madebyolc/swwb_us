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
<?php wp_head(); ?>
</head

<body <?php body_class( "pushmenu-push" ); ?>>

<swwbwrap class="pushmenu-push">

  <nav class="pushmenu pushmenu-left"><!-- remove .pushmenu-open -->

    <div class="wrap-pushmenu">

      <nav class="navbar site-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">

        <div class="container">

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

            <div class="input-group typr">

              <input type="text" class="field form-control" name="s" id="s" placeholder="Search …">

              <span class="input-group-btn">

                <input type="submit" class="submit btn btn-search" name="submit" id="searchsubmit" value="Search">

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
              <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 385 95">
                <path class="swwb_logo" d="M139.12,37.27l1.41-.83a3.42,3.42,0,0,0,3.35,2.23c1.62,0,2.91-.87,2.91-2.43,0-3.61-7.08-2.45-7.08-7.13a3.79,3.79,0,0,1,4-3.83,5,5,0,0,1,3.88,1.82l-1.21,1a3.09,3.09,0,0,0-2.62-1.28c-1.36,0-2.55.7-2.55,2.16,0,3.47,7.08,2.25,7.08,7.2,0,2.55-2,4-4.49,4A5,5,0,0,1,139.12,37.27Z"/>
                <path class="swwb_logo" d="M154.1,32.76a7.47,7.47,0,1,1,7.47,7.47A7.47,7.47,0,0,1,154.1,32.76Zm13.38,0a5.92,5.92,0,1,0-5.92,5.92A5.88,5.88,0,0,0,167.48,32.76Z"/><path class="swwb_logo" d="M175.31,32.76a7.47,7.47,0,0,1,14-3.69l-1.33.75a5.92,5.92,0,1,0,0,5.87l1.33.75a7.47,7.47,0,0,1-14-3.68Z"/>
                <path class="swwb_logo" d="M195.84,25.48h1.55V40h-1.55Z"/>
                <path class="swwb_logo" d="M212.5,36.64H206L204.83,40h-1.7l5.26-14.55h1.72L215.38,40h-1.7ZM212,35.16l-2.72-7.83-2.74,7.83Z"/>
                <path class="swwb_logo" d="M228,38.48V40h-7V25.48h1.55v13Z"/>
                <path class="swwb_logo" d="M261.56,25.48,257,40H255.4l-3.81-12.9L247.86,40h-1.65l-4.56-14.55h1.65L247,37.41l3.49-11.93h2.18l3.54,12,3.73-12Z"/>
                <path class="swwb_logo" d="M266.48,32.76a7.47,7.47,0,1,1,7.47,7.47A7.47,7.47,0,0,1,266.48,32.76Zm13.38,0a5.92,5.92,0,1,0-5.92,5.92A5.88,5.88,0,0,0,279.86,32.76Z"/>
                <path class="swwb_logo" d="M298.45,40h-1.77l-4.12-6.57h-2.74V40h-1.55V25.48h5.21a4,4,0,0,1,4,4.07,3.87,3.87,0,0,1-3.37,3.83ZM293.39,32A2.44,2.44,0,0,0,296,29.51,2.47,2.47,0,0,0,293.39,27h-3.57V32Z"/>
                <path class="swwb_logo" d="M306.91,32.9h-1V40h-1.55V25.48h1.55v6h1l5.84-6h2.16l-6.64,6.72L315.16,40H313Z"/>
                <path class="swwb_logo" d="M322.3,27v5h5.58v1.5H322.3v5h6.4V40h-8V25.48h8V27Z"/>
                <path class="swwb_logo" d="M346,40h-1.77l-4.12-6.57h-2.74V40h-1.55V25.48H341a4,4,0,0,1,4,4.07,3.87,3.87,0,0,1-3.37,3.83ZM340.92,32a2.44,2.44,0,0,0,2.59-2.47A2.47,2.47,0,0,0,340.92,27h-3.57V32Z"/>
                <path class="swwb_logo" d="M350.79,37.27l1.41-.83a3.42,3.42,0,0,0,3.35,2.23c1.62,0,2.91-.87,2.91-2.43,0-3.61-7.08-2.45-7.08-7.13a3.79,3.79,0,0,1,4-3.83,5,5,0,0,1,3.88,1.82l-1.21,1a3.09,3.09,0,0,0-2.62-1.28c-1.36,0-2.55.7-2.55,2.16,0,3.47,7.08,2.25,7.08,7.2,0,2.55-2,4-4.48,4A5,5,0,0,1,350.79,37.27Z"/>
                <path class="swwb_logo" d="M132.7,54.76l-3.81,14.55h-4.34L122.27,60,120,69.31h-4.34l-3.78-14.55h3.93L118,64.34l2.57-9.58h3.37l2.57,9.58,2.25-9.58Z"/>
                <path class="swwb_logo" d="M137.61,54.76h3.71V69.31h-3.71Z"/>
                <path class="swwb_logo" d="M157.23,58h-3.56V69.31H150V58h-3.56V54.76h10.81Z"/>
                <path class="swwb_logo" d="M174.88,54.76V69.31h-3.71V63.63h-5.24v5.67h-3.71V54.76h3.71v5.65h5.24V54.76Z"/>
                <path class="swwb_logo" d="M180.93,62a7.47,7.47,0,1,1,7.47,7.47A7.46,7.46,0,0,1,180.93,62Zm11.3,0a3.84,3.84,0,1,0-3.83,3.83A3.74,3.74,0,0,0,192.23,62Z"/>
                <path class="swwb_logo" d="M201.8,64.67V54.76h3.71V64a2.53,2.53,0,0,0,5,0V54.76h3.71v9.92c0,2.72-2.74,4.83-6.23,4.83S201.8,67.39,201.8,64.67Z"/>
                <path class="swwb_logo" d="M230,58h-3.57V69.31h-3.68V58h-3.56V54.76H230Z"/>
                <path class="swwb_logo" d="M256.11,65.28c0,2.67-1.94,4-4.41,4h-7V54.76h6.45c2.5,0,4.49,1.45,4.49,4.1A3.2,3.2,0,0,1,254,61.91,3.4,3.4,0,0,1,256.11,65.28ZM250.67,58h-2.28v2.57h2.28a1.3,1.3,0,0,0,1.24-1.29A1.28,1.28,0,0,0,250.67,58Zm1.72,6.81a1.29,1.29,0,0,0-1.26-1.29h-2.74v2.57h2.74A1.27,1.27,0,0,0,252.4,64.8Z"/>
                <path class="swwb_logo" d="M261.36,62a7.47,7.47,0,1,1,7.47,7.47A7.46,7.46,0,0,1,261.36,62Zm11.3,0a3.84,3.84,0,1,0-3.83,3.83A3.74,3.74,0,0,0,272.66,62Z"/>
                <path class="swwb_logo" d="M294.43,69.31h-4.17L286.87,64H286v5.33h-3.71V54.76h6.47a4.45,4.45,0,0,1,4.46,4.58,4.34,4.34,0,0,1-2.84,4.2Zm-4.75-9.82a1.45,1.45,0,0,0-1.5-1.5H286v3h2.16A1.45,1.45,0,0,0,289.68,59.49Z"/>
                <path class="swwb_logo" d="M299.42,54.76h5a7.27,7.27,0,1,1,0,14.55h-5Zm5,11.32a4.08,4.08,0,0,0,0-8.1h-1.33v8.1Z"/>
                <path class="swwb_logo" d="M321.6,58v2.45h4.49v3.2H321.6v2.45h5.31v3.22h-9V54.76h9V58Z"/>
                <path class="swwb_logo" d="M345.07,69.31H340.9L337.5,64h-.85v5.33h-3.71V54.76h6.47a4.45,4.45,0,0,1,4.46,4.58,4.34,4.34,0,0,1-2.84,4.2Zm-4.75-9.82a1.45,1.45,0,0,0-1.5-1.5h-2.16v3h2.16A1.45,1.45,0,0,0,340.32,59.49Z"/>
                <path class="swwb_logo" d="M349,66.15l3-1.89A3,3,0,0,0,354.86,66c.94,0,1.43-.41,1.43-1,0-2.21-6.62-1-6.62-6,0-3.1,2.55-4.44,4.85-4.44a6.2,6.2,0,0,1,4.68,2.16l-2.42,2.35a3.37,3.37,0,0,0-2.3-1.26c-.58,0-1.07.29-1.07.92,0,2.21,6.6.82,6.6,6.35,0,2.79-2.4,4.41-5.19,4.41A6.5,6.5,0,0,1,349,66.15Z"/>
                <path class="swwb_logo" d="M88.9,20.91a6,6,0,0,1,6,5.93h3.6a9.55,9.55,0,0,0-9.6-9.48h0v3.56Z"/>
                <path class="swwb_logo" d="M94.9,74.24a6,6,0,0,1-6,5.93h-48a6,6,0,0,1-6-5.93h-3.6a9.55,9.55,0,0,0,9.6,9.48h48a9.55,9.55,0,0,0,9.6-9.48V38.68H94.9Z"/>
                <path class="swwb_logo" d="M76.9,20.91V17.35h-36a9.55,9.55,0,0,0-9.6,9.48V62.39h3.6V26.83a6,6,0,0,1,6-5.93"/>
                <path class="swwb_logo" d="M48.11,58.92V42.16a8.79,8.79,0,0,1-2.4,0V58.92a8.79,8.79,0,0,1,2.4,0Z"/>
                <path class="swwb_logo" d="M37.31,68.32a9.37,9.37,0,0,1,.08-1.19H16.88a5.93,5.93,0,1,0,0,2.37H37.39A9.37,9.37,0,0,1,37.31,68.32Z"/>
                <path class="swwb_logo" d="M82.9,50.54A6,6,0,0,0,77,55.28H67.91a4.18,4.18,0,0,0-4.2,4.15V61.2h0v4.15a1.79,1.79,0,0,1-1.8,1.78H56.42a8.47,8.47,0,0,1,0,2.37H61.9a4.18,4.18,0,0,0,4.2-4.15V63.57h0V59.43a1.79,1.79,0,0,1,1.8-1.78H77a6,6,0,1,0,5.88-7.11Z"/>
                <ellipse class="swwb_logo cls-1" cx="46.91" cy="32.76" rx="6" ry="5.93"/>
                <ellipse class="swwb_logo cls-2" cx="46.91" cy="68.32" rx="6" ry="5.93"/>
                <ellipse class="swwb_logo cls-3" cx="58.91" cy="44.61" rx="6" ry="5.93"/>
                <path class="swwb_logo" d="M119,26.83a6,6,0,0,0-5.88,4.74H85.9a4.19,4.19,0,0,0-1.8.42V15.45a5.84,5.84,0,1,0-2.4,0V41.65a1.79,1.79,0,0,1-1.8,1.78H68.42a8.47,8.47,0,0,1,0,2.37H79.9a4.18,4.18,0,0,0,4.2-4.15V35.72a1.79,1.79,0,0,1,1.8-1.78h27.21A6,6,0,1,0,119,26.83Z"/>
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
