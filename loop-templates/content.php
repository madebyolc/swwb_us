<?php
/**
 * @package understrap
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header typr">

		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>

		<div class="entry-meta">

			<span class="feature-meta category"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php the_category(' '); ?></span>

			<span class="feature-meta date"><i class="fa fa-calendar-o" aria-hidden="true"></i> <a href="<?php echo get_month_link( $archive_year, $archive_month ); ?>"><?php the_date() ?></a></span>

			<span class="feature-meta"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?php the_author_posts_link(); ?></span>

			<span class="feature-meta continue"><a href="#read" class="btn btn-secondary btn-lg theme <?php if ( get_post_meta($post->ID, 'theme', true) ) : echo get_post_meta($post->ID, 'theme', true); endif; ?>">Continue to Article</a></span>

		</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

		<div class="entry-content typr">

	            <?php
	                the_excerpt();
	            ?>

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
