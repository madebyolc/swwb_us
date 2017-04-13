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

          <form method="get" id="searchform" class="form lg lines-dark" action="/swwb/" role="search" _lpchecked="1">

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
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg">
                  <defs><style>.cls-1{fill:none;}.cls-2{fill:#b3b3b3;}</style></defs>
                  <title>Social Workers Without Borders</title>
                  <path class="cls-1" d="M187.58,36.82a2,2,0,0,0-2.08-2h-2.92v4h2.92A2,2,0,0,0,187.58,36.82Z"/><path class="cls-1" d="M109.72,56.66a3.67,3.67,0,1,0,3.67,3.67A3.59,3.59,0,0,0,109.72,56.66Z"/><path class="cls-1" d="M188.69,56.45h-2.07v2.88h2.07a1.44,1.44,0,0,0,0-2.88Z"/><path class="cls-1" d="M201.53,56.45h-1.28v7.77h1.28a3.91,3.91,0,0,0,0-7.77Z"/><path class="cls-1" d="M159.48,57.69a1.23,1.23,0,0,0-1.19-1.23h-2.19v2.46h2.19A1.25,1.25,0,0,0,159.48,57.69Z"/><path class="cls-1" d="M172.92,56.66a3.67,3.67,0,1,0,3.67,3.67A3.59,3.59,0,0,0,172.92,56.66Z"/><polygon class="cls-1" points="108.39 41.72 112.78 41.72 110.59 35.19 108.39 41.72"/><path class="cls-1" d="M68.16,34.77a4.93,4.93,0,1,0,4.93,4.93A4.87,4.87,0,0,0,68.16,34.77Z"/><path class="cls-1" d="M168.13,44.62a4.93,4.93,0,1,0-4.93-4.93A4.86,4.86,0,0,0,168.13,44.62Z"/><path class="cls-1" d="M230.71,36.82a2,2,0,0,0-2.08-2h-2.92v4h2.92A2,2,0,0,0,230.71,36.82Z"/><path class="cls-1" d="M228.9,56.45h-2.07v2.88h2.07a1.44,1.44,0,0,0,0-2.88Z"/><path class="cls-1" d="M158.74,61.76h-2.63v2.46h2.63A1.22,1.22,0,0,0,159.95,63,1.24,1.24,0,0,0,158.74,61.76Z"/><path d="M52.39,44.69a3.13,3.13,0,0,1-3-2l-2,1.19a5.36,5.36,0,0,0,4.93,3c2.52,0,4.58-1.49,4.58-4,0-5-6.63-3.76-6.63-6.63,0-1.1.86-1.61,1.89-1.61a3,3,0,0,1,2.41,1.21l1.61-1.47a5.2,5.2,0,0,0-4-1.87A3.89,3.89,0,0,0,48,36.4c0,4.65,6.63,3.5,6.63,6.47C54.66,44,53.7,44.69,52.39,44.69Z"/><path d="M68.16,32.5a7.19,7.19,0,1,0,7.19,7.19A7.2,7.2,0,0,0,68.16,32.5Zm0,12.12a4.93,4.93,0,1,1,4.93-4.93A4.87,4.87,0,0,1,68.16,44.62Z"/><path d="M93.28,43.13l-2-1.05a4.93,4.93,0,1,1,0-4.76l2-1.05a7.19,7.19,0,1,0,0,6.87Z"/><rect x="98.05" y="32.69" width="2.29" height="14.01"/><path d="M109.3,32.69l-5.07,14h2.48l1-3h5.72l1,3h2.48l-5.07-14Zm-.91,9,2.2-6.54,2.2,6.54Z"/><polygon points="127.94 44.57 123.01 44.57 123.01 32.69 120.72 32.69 120.72 46.7 127.94 46.7 127.94 44.57"/><polygon points="157.76 32.69 155.38 32.69 152.32 43.29 149.31 32.69 146.72 32.69 143.72 43.24 140.69 32.69 138.26 32.69 142.39 46.7 144.94 46.7 148 35.49 151.1 46.7 153.67 46.7 157.76 32.69"/><path d="M168.13,46.89a7.19,7.19,0,1,0-7.19-7.19A7.2,7.2,0,0,0,168.13,46.89Zm0-12.12a4.93,4.93,0,1,1-4.93,4.93A4.86,4.86,0,0,1,168.13,34.77Z"/><path d="M188.24,46.7h2.57l-4-6.1a3.85,3.85,0,0,0,3-3.81,4,4,0,0,0-4-4.11H180.3v14h2.29V40.81h1.94Zm-5.65-11.89h2.92a2,2,0,1,1,0,4h-2.92Z"/><polygon points="197.11 40.09 197.86 40.09 203.37 46.7 206.47 46.7 199.79 39.04 206.01 32.69 202.99 32.69 197.9 38.03 197.11 38.03 197.11 32.69 194.82 32.69 194.82 46.7 197.11 46.7 197.11 40.09"/><polygon points="218.27 44.62 212.52 44.62 212.52 40.74 217.5 40.74 217.5 38.64 212.52 38.64 212.52 34.77 218.27 34.77 218.27 32.69 210.23 32.69 210.23 46.7 218.27 46.7 218.27 44.62"/><path d="M225.72,40.81h1.94l3.71,5.88h2.57l-4-6.1a3.85,3.85,0,0,0,3-3.81,4,4,0,0,0-4-4.11h-5.49v14h2.29Zm0-6h2.92a2,2,0,1,1,0,4h-2.92Z"/><path d="M241.88,44.69a3.13,3.13,0,0,1-3-2l-2,1.19a5.36,5.36,0,0,0,4.93,3c2.52,0,4.58-1.49,4.58-4,0-5-6.63-3.76-6.63-6.63,0-1.1.86-1.61,1.89-1.61a3,3,0,0,1,2.41,1.21l1.61-1.47a5.2,5.2,0,0,0-4-1.87,3.89,3.89,0,0,0-4.18,3.9c0,4.65,6.63,3.5,6.63,6.47C244.14,44,243.18,44.69,241.88,44.69Z"/><polygon points="61.51 62.55 59.05 53.36 55.81 53.36 53.35 62.55 51.21 53.36 47.44 53.36 51.07 67.31 55.23 67.31 57.44 58.43 59.63 67.31 63.79 67.31 67.44 53.36 63.67 53.36 61.51 62.55"/><rect x="69.37" y="53.36" width="3.56" height="13.95"/><polygon points="75.02 56.45 78.44 56.45 78.44 67.31 81.97 67.31 81.97 56.45 85.39 56.45 85.39 53.36 75.02 53.36 75.02 56.45"/><polygon points="95.97 58.78 90.95 58.78 90.95 53.36 87.39 53.36 87.39 67.31 90.95 67.31 90.95 61.87 95.97 61.87 95.97 67.31 99.53 67.31 99.53 53.36 95.97 53.36 95.97 58.78"/><path d="M109.72,53.18a7.16,7.16,0,1,0,7.16,7.16A7.15,7.15,0,0,0,109.72,53.18Zm0,10.84a3.67,3.67,0,1,1,3.67-3.67A3.59,3.59,0,0,1,109.72,64Z"/><path d="M128.18,62.2a2.43,2.43,0,0,1-4.84,0V53.36h-3.56v9.51c0,2.6,2.63,4.63,6,4.63s6-2,6-4.63V53.36h-3.56Z"/><polygon points="133.67 56.45 137.09 56.45 137.09 67.31 140.62 67.31 140.62 56.45 144.04 56.45 144.04 53.36 133.67 53.36 133.67 56.45"/><path d="M161.46,60.22A3.07,3.07,0,0,0,163,57.29c0-2.53-1.91-3.93-4.3-3.93h-6.19v14h6.72c2.37,0,4.23-1.3,4.23-3.86A3.26,3.26,0,0,0,161.46,60.22Zm-5.35-3.77h2.19a1.23,1.23,0,0,1,1.19,1.23,1.25,1.25,0,0,1-1.19,1.23h-2.19Zm2.63,7.77h-2.63V61.76h2.63A1.24,1.24,0,0,1,159.95,63,1.22,1.22,0,0,1,158.74,64.22Z"/><path d="M172.92,53.18a7.16,7.16,0,1,0,7.16,7.16A7.15,7.15,0,0,0,172.92,53.18Zm0,10.84a3.67,3.67,0,1,1,3.67-3.67A3.59,3.59,0,0,1,172.92,64Z"/><path d="M193.55,57.76a4.27,4.27,0,0,0-4.28-4.4h-6.21v14h3.56V62.2h.81l3.26,5.12h4l-3.86-5.53A4.16,4.16,0,0,0,193.55,57.76Zm-4.86,1.58h-2.07V56.45h2.07a1.44,1.44,0,0,1,0,2.88Z"/><path d="M201.53,53.36h-4.84v14h4.84a7,7,0,1,0,0-14Zm0,10.86h-1.28V56.45h1.28a3.91,3.91,0,0,1,0,7.77Z"/><polygon points="211.62 67.31 220.27 67.31 220.27 64.22 215.18 64.22 215.18 61.87 219.48 61.87 219.48 58.8 215.18 58.8 215.18 56.45 220.27 56.45 220.27 53.36 211.62 53.36 211.62 67.31"/><path d="M233.76,57.76a4.27,4.27,0,0,0-4.28-4.4h-6.21v14h3.56V62.2h.81l3.26,5.12h4L231,61.78A4.16,4.16,0,0,0,233.76,57.76Zm-4.86,1.58h-2.07V56.45h2.07a1.44,1.44,0,0,1,0,2.88Z"/><path d="M240.1,57.17c0-.6.47-.88,1-.88a3.23,3.23,0,0,1,2.21,1.21l2.33-2.26a6,6,0,0,0-4.49-2.07c-2.21,0-4.65,1.28-4.65,4.26,0,4.84,6.35,3.67,6.35,5.79,0,.56-.47,1-1.37,1a2.87,2.87,0,0,1-2.67-1.7l-2.91,1.81a6.24,6.24,0,0,0,5.53,3.21c2.67,0,5-1.56,5-4.23C246.43,58,240.1,59.29,240.1,57.17Z"/><rect class="cls-1" x="8.43" y="41.16" width="17.48" height="17.48"/><polygon points="8.43 58.64 0 58.64 0 67.07 34.33 67.07 34.33 58.64 25.91 58.64 8.43 58.64"/><polygon points="0 41.16 8.43 41.16 25.91 41.16 34.33 41.16 34.33 32.73 0 32.73 0 41.16"/><rect class="cls-2" x="25.91" y="41.16" width="8.43" height="17.48"/><rect class="cls-2" y="41.16" width="8.43" height="17.48"/></svg>

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
