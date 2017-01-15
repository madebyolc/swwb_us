<?php
/**
 * @package understrap
 */
?>

<?php $archive_year  = get_the_time('Y'); ?>
<?php $archive_month = get_the_time('m'); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="hero push-top feature theme <?php if ( get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?>" style="background-color: <?php if ( get_post_meta($post->ID, 'feature_background', true) ) : echo get_post_meta($post->ID, 'feature_background', true); endif; ?>;">

		<div class="feature-background" style="background-image: url('<?php echo get_the_post_thumbnail_url( $post->ID, 'large' ); ?>');"></div>

		<div class="feature-wrap center">

			<div class="feature-inner container">

				<div id="typed-strings">

					<p><a href="#read"><small>Article</small></a></p>
					<p><a href="#read"><?php the_title(); ?></a></p>

				</div>

				<h1 class="entry-title <?php if ( get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?>">

					<span id="typed"></span>

				</h1>

			</div>

			<div class="feature-buttons container">

				<div class="entry-meta">

					<span class="feature-meta  <?php if ( get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?> category"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php the_category(' '); ?></span>

					<span class="feature-meta  <?php if ( get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?> date"><i class="fa fa-calendar-o" aria-hidden="true"></i> <a href="<?php echo get_month_link( $archive_year, $archive_month ); ?>"><?php the_date() ?></a></span>

					<span class="feature-meta  <?php if ( get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?> author"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?php the_author_posts_link(); ?></span>

					<span class="feature-meta continue"><a href="#read" class="btn btn-secondary btn-lg theme <?php if ( get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?>">Continue to Article</a></span>

				</div><!-- .entry-meta -->

			</div>

			<!--<div class="article-pseudo-header"></div>-->

		</div>

	</div>

	<header id="read" class="entry-header">

		<div class="article header container">

			<div class="entry-meta">


			</div><!-- .entry-meta -->

		</div>

	</header><!-- .entry-header -->

	<div id="article-content" class="entry-content">

		<div class="article entry container">

			<div class="article-content typr">

				<?php the_content(); ?>

			</div>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
					'after'  => '</div>',
				) );
			?>

		</div>

		<div class="article-nav container">

			<div class="inner">

				<?php	wp_nav_menu( array('theme_location' => 'social-menu', 'container_class' => 'social-menu' ) );?>

			</div>

		</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<div class="article footer container">

			<div class="entry-meta typr">

				<span class="feature-meta category"><i class="fa fa-map-marker" aria-hidden="true"></i> View more articles listed in <?php the_category(' '); ?></span>

				<span class="feature-meta date"><i class="fa fa-calendar-o" aria-hidden="true"></i> Article archive for <a href="<?php echo get_month_link( $archive_year, $archive_month ); ?>"><?php echo get_the_date() ?></a></span>

				<span class="feature-meta author"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Written by <?php the_author_posts_link(); ?></span>

			</div><!-- .entry-meta -->

		</div>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
