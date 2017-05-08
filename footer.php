<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
 $the_theme = wp_get_theme();
?>

      <?php get_sidebar('footerfull'); ?>

        <div class="wrapper" id="wrapper-footer">

          <div class="container">

              <div class="footer-main">

                <div class="footer-nav">

                  <div class="footer-nav-block typr">

                    <p class="footer-nav-heading">
                      <?php $nav_menu = wp_get_nav_menu_object(7); echo $nav_menu->name; ?>
                    </p>

                    <?php	wp_nav_menu( array('theme_location' => 'footer-about-menu', 'container_class' => 'footer-about-menu typr' ) );?>

                  </div>

                  <div class="footer-nav-block typr">

                    <p class="footer-nav-heading">
                      <?php $nav_menu = wp_get_nav_menu_object(8); echo $nav_menu->name; ?>
                    </p>

                    <?php	wp_nav_menu( array('theme_location' => 'footer-news-menu', 'container_class' => 'footer-news-menu typr' ) );?>

                  </div>

                  <div class="footer-nav-block typr">

                    <p class="footer-nav-heading">
                      <?php $nav_menu = wp_get_nav_menu_object(9); echo $nav_menu->name; ?>
                    </p>

                    <?php	wp_nav_menu( array('theme_location' => 'footer-involve-menu', 'container_class' => 'footer-involve-menu typr' ) );?>

                  </div>

                  <div class="footer-nav-block typr">

                    <p class="footer-nav-heading">
                      <?php $nav_menu = wp_get_nav_menu_object(10); echo $nav_menu->name; ?>
                    </p>

                    <?php	wp_nav_menu( array('theme_location' => 'footer-misc-menu', 'container_class' => 'footer-misc-menu typr' ) );?>

                  </div>

                </div>

                &copy; Social Workers Without Borders

              </div>

          </div><!-- container end -->

        </div><!-- wrapper end -->

        <?php wp_footer(); ?>

      </div><!-- #page -->

  </swwbwrap>

  <div class="page-button"></div>

</body>

</html>
