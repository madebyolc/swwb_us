<?php
/**
 * @package understrap
 */
?>

<?php $archive_year  = get_the_time('Y'); ?>
<?php $archive_month = get_the_time('m'); ?>

<div class="wrapper top" id="wrapper-page">

	<section class="panel mg-top <?php if ( !get_the_post_thumbnail_url( $post->ID, 'large', true) ) : echo 'h50'; else : echo 'h75'; endif; ?>" style="background-size: cover; background-image: url('<?php echo get_the_post_thumbnail_url( $post->ID, 'large' ); ?>'); background-color: <?php if ( get_post_meta($post->ID, 'page-background', true) ) : echo get_post_meta($post->ID, 'page-background', true); endif; ?>">

		<div class="panel-wrapper va-bottom">

				<div class="panel-inner">

					<div class="content-single container pd-top-small typr theme <?php if ( is_singular() && get_post_meta($post->ID, 'section-1-theme', true) ) : echo get_post_meta($post->ID, 'section-1-theme', true); endif; ?>">

						<div class="container-wrapper-100 panel-page frame-thin br-top">

							<div id="typed-strings">

								<p><?php the_title(); ?></p>

							</div>

							<h1 class="page-title section lead d b">

								<span id="typed"></span>

							</h1>

						</div>

					</div>

				</div>

		</div>

	</section>

</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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
