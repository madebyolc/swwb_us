<?php
/**
 * @package understrap
 */
?>

<?php $archive_year  = get_the_time('Y'); ?>
<?php $archive_month = get_the_time('m'); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="hero push-top feature theme <?php if ( get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?>" style="background-color: <?php if ( get_post_meta($post->ID, 'feature_background', true) ) : echo get_post_meta($post->ID, 'feature_background', true); endif; ?>;">

		<div class="feature-background" style="background-image: url('<?php if ( !get_post_meta($post->ID, 'feature_background', false) ) :echo get_the_post_thumbnail_url( $post->ID, 'large' ); endif; ?>');"></div>

		<div class="feature-wrap">

			<div class="feature-inner container">

				<div id="typed-strings">
					
					<p><a href="#read" role="button"><?php the_title(); ?></a></p>

				</div>

				<span class="">

					<h1 class="entry-title typr d <?php if ( get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?>">

						<span id="typed"></span>

					</h1>

				</span>

			</div>

			<div class="feature-buttons container">

				<div class="entry-meta">

					<span class="feature-meta  <?php if ( get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?> category"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php the_category(' '); ?></span>

					<span class="feature-meta  <?php if ( get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?> date"><i class="fa fa-calendar-o" aria-hidden="true"></i> <a href="<?php echo get_month_link( $archive_year, $archive_month ); ?>"><?php the_date() ?></a></span>

					<span class="feature-meta  <?php if ( get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?> author"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?php the_author_posts_link(); ?></span>

					<span class="feature-meta continue"><a href="#read" role="button" class="btn btn-primary btn-lg go bottom typr theme <?php if ( get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?>">Continue to Article</a></span>

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

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<div class="article footer container">

			<div class="entry-meta typr">
				<span class="feature-meta share"><h3 class="typr">Support us by sharing this article</h3><?php	wp_nav_menu( array('theme_location' => 'social-menu', 'container_class' => 'feature-meta-share' ) );?></span><h3 class="explore">Explore our news network</h3><span class="feature-meta category"><i class="fa fa-map-marker" aria-hidden="true"></i> View articles also listed in <?php the_category(' '); ?></span><span class="feature-meta date"><i class="fa fa-calendar-o" aria-hidden="true"></i> Article archive for <a href="<?php echo get_month_link( $archive_year, $archive_month ); ?>"><?php echo get_the_date() ?></a></span><span class="feature-meta author"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Written by <?php the_author_posts_link(); ?></span>
			</div><!-- .entry-meta -->

			<div class="pagination">
				<div class="previous typr">
					<?php  $prevPost = get_previous_post(true);
						if($prevPost) {?>
						<h3>Previous Article</h3>
						<span class="link"><?php previous_post_link( '%link' ); ?></span>
					<?php } else { ?>
					<?php } ?>
				</div>
				<div class="next typr">
					<?php  $nextPost = get_next_post(true);
	    			if($nextPost) {?>
						<h3>Next Article</h3>
						<span class="link"><?php next_post_link( '%link' ); ?></span>
					<?php } else { ?>
					<?php } ?>
				</div>
			</div>

		</div>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
