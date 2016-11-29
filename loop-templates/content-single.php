<?php
/**
 * @package understrap
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="hero push-top feature" style="background-color: <?php if ( get_post_meta($post->ID, 'feature_background', true) ) : echo get_post_meta($post->ID, 'feature_background', true); endif; ?>;">

		<div class="feature-background" style="background-image: url('<?php echo get_the_post_thumbnail_url( $post->ID, 'large' ); ?>');"></div>

		<div class="feature-wrap">

			<div class="feature-inner container">

				<div id="typed-strings">

					<p><a href="#read"><?php the_title(); ?></a></p>

				</div>

				<h1 class="entry-title">

					<span id="typed"></span>

				</h1>

			</div>

			<div class="feature-buttons">

				<div class="entry-meta">

					<span class="feature-meta continue"><a href="#read" class="btn btn-secondary btn-lg negative-wire">Continue to Article</a></span>

					<span class="feature-meta category"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php the_category(' '); ?></span>

					<span class="feature-meta date"><i class="fa fa-calendar-o" aria-hidden="true"></i> <a href="<?php echo get_month_link('', ''); ?>"><?php the_date() ?></a></span>

					<span class="feature-meta author"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?php the_author_posts_link(); ?></span>

				</div><!-- .entry-meta -->

			</div>

		</div>

	</div>

	<header id="read" class="entry-header">

		<div class="entry-meta">

			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
