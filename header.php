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

          <form method="get" id="searchform" class="form lg lines-dark" action="/" role="search" _lpchecked="1">

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
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 35"><defs><style>.cls-1{fill:none;}.cls-2{fill:#b3b3b3;}</style></defs><title>logo-icon_left</title><path class="cls-1" d="M187.58,4.32a2,2,0,0,0-2.08-2h-2.92v4h2.92A2,2,0,0,0,187.58,4.32Z"/><path class="cls-1" d="M109.72,24.16a3.67,3.67,0,1,0,3.67,3.67A3.59,3.59,0,0,0,109.72,24.16Z"/><path class="cls-1" d="M188.69,24h-2.07v2.88h2.07a1.44,1.44,0,0,0,0-2.88Z"/><path class="cls-1" d="M201.53,24h-1.28v7.77h1.28A3.64,3.64,0,0,0,205,27.84,3.64,3.64,0,0,0,201.53,24Z"/><path class="cls-1" d="M159.48,25.19A1.23,1.23,0,0,0,158.3,24h-2.19v2.46h2.19A1.25,1.25,0,0,0,159.48,25.19Z"/><path class="cls-1" d="M172.92,24.16a3.67,3.67,0,1,0,3.67,3.67A3.59,3.59,0,0,0,172.92,24.16Z"/><polygon class="cls-1" points="108.39 9.22 112.78 9.22 110.59 2.69 108.39 9.22"/><path class="cls-1" d="M68.16,2.27a4.87,4.87,0,0,0-4.93,4.93,4.93,4.93,0,1,0,9.85,0A4.86,4.86,0,0,0,68.16,2.27Z"/><path class="cls-1" d="M168.13,12.12a4.86,4.86,0,0,0,4.93-4.93,4.93,4.93,0,0,0-9.85,0A4.87,4.87,0,0,0,168.13,12.12Z"/><path class="cls-1" d="M230.71,4.32a2,2,0,0,0-2.08-2h-2.92v4h2.92A2,2,0,0,0,230.71,4.32Z"/><path class="cls-1" d="M228.9,24h-2.07v2.88h2.07a1.44,1.44,0,0,0,0-2.88Z"/><path class="cls-1" d="M158.74,29.26h-2.63v2.46h2.63a1.22,1.22,0,0,0,1.21-1.23A1.24,1.24,0,0,0,158.74,29.26Z"/><path d="M52.39,12.19a3.13,3.13,0,0,1-3-2l-2,1.19a5.36,5.36,0,0,0,4.93,3c2.52,0,4.58-1.49,4.58-4,0-5-6.63-3.76-6.63-6.63,0-1.1.86-1.61,1.89-1.61a3,3,0,0,1,2.41,1.21l1.61-1.47a5.2,5.2,0,0,0-4-1.87A3.89,3.89,0,0,0,48,3.9c0,4.65,6.63,3.5,6.63,6.47C54.66,11.51,53.7,12.19,52.39,12.19Z"/><path d="M68.16,0a7.19,7.19,0,1,0,7.19,7.19A7.2,7.2,0,0,0,68.16,0Zm0,12.12a4.87,4.87,0,0,1-4.93-4.93,4.93,4.93,0,1,1,9.85,0A4.86,4.86,0,0,1,68.16,12.12Z"/><path d="M93.28,10.63l-2-1.05a4.95,4.95,0,0,1-9.27-2.38,4.95,4.95,0,0,1,9.27-2.38l2-1.05A7.19,7.19,0,1,0,87,14.39,7.15,7.15,0,0,0,93.28,10.63Z"/><rect x="98.05" y="0.19" width="2.29" height="14.01"/><path d="M109.3.19l-5.07,14h2.48l1-3h5.72l1,3h2.48l-5.07-14Zm-.91,9,2.2-6.54,2.2,6.54Z"/><polygon points="127.94 12.07 123.01 12.07 123.01 0.19 120.72 0.19 120.72 14.2 127.94 14.2 127.94 12.07"/><polygon points="157.76 0.19 155.38 0.19 152.32 10.79 149.31 0.19 146.72 0.19 143.72 10.74 140.69 0.19 138.26 0.19 142.39 14.2 144.94 14.2 148 2.99 151.1 14.2 153.67 14.2 157.76 0.19"/><path d="M168.13,14.39a7.19,7.19,0,1,0-7.19-7.19A7.2,7.2,0,0,0,168.13,14.39Zm0-12.12a4.86,4.86,0,0,1,4.93,4.93,4.93,4.93,0,0,1-9.85,0A4.87,4.87,0,0,1,168.13,2.27Z"/><path d="M188.24,14.2h2.57l-4-6.1a3.85,3.85,0,0,0,3-3.81,4,4,0,0,0-4-4.11H180.3v14h2.29V8.31h1.94ZM182.58,2.31h2.92a2,2,0,0,1,2.08,2,2,2,0,0,1-2.08,2h-2.92Z"/><polygon points="197.11 7.59 197.86 7.59 203.37 14.2 206.47 14.2 199.79 6.54 206.01 0.19 202.99 0.19 197.9 5.54 197.11 5.54 197.11 0.19 194.82 0.19 194.82 14.2 197.11 14.2 197.11 7.59"/><polygon points="218.27 12.12 212.52 12.12 212.52 8.24 217.5 8.24 217.5 6.14 212.52 6.14 212.52 2.27 218.27 2.27 218.27 0.19 210.23 0.19 210.23 14.2 218.27 14.2 218.27 12.12"/><path d="M225.72,8.31h1.94l3.71,5.88h2.57l-4-6.1a3.85,3.85,0,0,0,3-3.81,4,4,0,0,0-4-4.11h-5.49v14h2.29Zm0-6h2.92a2,2,0,0,1,2.08,2,2,2,0,0,1-2.08,2h-2.92Z"/><path d="M241.88,12.19a3.13,3.13,0,0,1-3-2l-2,1.19a5.36,5.36,0,0,0,4.93,3c2.52,0,4.58-1.49,4.58-4,0-5-6.63-3.76-6.63-6.63,0-1.1.86-1.61,1.89-1.61a3,3,0,0,1,2.41,1.21l1.61-1.47a5.2,5.2,0,0,0-4-1.87,3.89,3.89,0,0,0-4.18,3.9c0,4.65,6.63,3.5,6.63,6.47C244.14,11.51,243.18,12.19,241.88,12.19Z"/><polygon points="61.51 30.05 59.05 20.86 55.81 20.86 53.35 30.05 51.21 20.86 47.44 20.86 51.07 34.81 55.23 34.81 57.44 25.93 59.63 34.81 63.79 34.81 67.44 20.86 63.67 20.86 61.51 30.05"/><rect x="69.37" y="20.86" width="3.56" height="13.95"/><polygon points="75.02 23.95 78.44 23.95 78.44 34.81 81.97 34.81 81.97 23.95 85.39 23.95 85.39 20.86 75.02 20.86 75.02 23.95"/><polygon points="95.97 26.28 90.95 26.28 90.95 20.86 87.39 20.86 87.39 34.81 90.95 34.81 90.95 29.37 95.97 29.37 95.97 34.81 99.53 34.81 99.53 20.86 95.97 20.86 95.97 26.28"/><path d="M109.72,20.68a7.16,7.16,0,1,0,7.16,7.16A7.15,7.15,0,0,0,109.72,20.68Zm0,10.84a3.67,3.67,0,1,1,3.67-3.67A3.59,3.59,0,0,1,109.72,31.51Z"/><path d="M128.18,29.7a2.43,2.43,0,0,1-4.84,0V20.86h-3.56v9.51c0,2.6,2.63,4.63,6,4.63s6-2,6-4.63V20.86h-3.56Z"/><polygon points="133.67 23.95 137.09 23.95 137.09 34.81 140.62 34.81 140.62 23.95 144.04 23.95 144.04 20.86 133.67 20.86 133.67 23.95"/><path d="M161.46,27.72A3.07,3.07,0,0,0,163,24.79c0-2.53-1.91-3.93-4.3-3.93h-6.19v14h6.72c2.37,0,4.23-1.3,4.23-3.86A3.26,3.26,0,0,0,161.46,27.72ZM156.11,24h2.19a1.23,1.23,0,0,1,1.19,1.23,1.25,1.25,0,0,1-1.19,1.23h-2.19Zm2.63,7.77h-2.63V29.26h2.63a1.24,1.24,0,0,1,1.21,1.23A1.22,1.22,0,0,1,158.74,31.72Z"/><path d="M172.92,20.68a7.16,7.16,0,1,0,7.16,7.16A7.15,7.15,0,0,0,172.92,20.68Zm0,10.84a3.67,3.67,0,1,1,3.67-3.67A3.59,3.59,0,0,1,172.92,31.51Z"/><path d="M193.55,25.26a4.27,4.27,0,0,0-4.28-4.4h-6.21v14h3.56V29.7h.81l3.26,5.12h4l-3.86-5.53A4.16,4.16,0,0,0,193.55,25.26Zm-4.86,1.58h-2.07V24h2.07a1.44,1.44,0,0,1,0,2.88Z"/><path d="M201.53,20.86h-4.84v14h4.84a7,7,0,1,0,0-14Zm0,10.86h-1.28V24h1.28A3.64,3.64,0,0,1,205,27.84,3.64,3.64,0,0,1,201.53,31.72Z"/><polygon points="211.62 34.81 220.27 34.81 220.27 31.72 215.18 31.72 215.18 29.37 219.48 29.37 219.48 26.3 215.18 26.3 215.18 23.95 220.27 23.95 220.27 20.86 211.62 20.86 211.62 34.81"/><path d="M233.76,25.26a4.27,4.27,0,0,0-4.28-4.4h-6.21v14h3.56V29.7h.81l3.26,5.12h4L231,29.28A4.16,4.16,0,0,0,233.76,25.26Zm-4.86,1.58h-2.07V24h2.07a1.44,1.44,0,0,1,0,2.88Z"/><path d="M240.1,24.67c0-.6.47-.88,1-.88A3.23,3.23,0,0,1,243.34,25l2.33-2.26a6,6,0,0,0-4.49-2.07c-2.21,0-4.65,1.28-4.65,4.26,0,4.84,6.35,3.67,6.35,5.79,0,.56-.47,1-1.37,1a2.87,2.87,0,0,1-2.67-1.7l-2.91,1.81A6.24,6.24,0,0,0,241.45,35c2.67,0,5-1.56,5-4.23C246.43,25.47,240.1,26.79,240.1,24.67Z"/><rect class="cls-1" x="8.43" y="8.66" width="17.48" height="17.48"/><polygon points="8.43 26.14 0 26.14 0 34.57 34.33 34.57 34.33 26.14 25.91 26.14 8.43 26.14"/><polygon points="0 8.66 8.43 8.66 25.91 8.66 34.33 8.66 34.33 0.23 0 0.23 0 8.66"/><rect class="cls-2" x="25.91" y="8.66" width="8.43" height="17.48"/><rect class="cls-2" y="8.66" width="8.43" height="17.48"/></svg>

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
