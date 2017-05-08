<?php
/**
 * @package understrap
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header typr panel-row border-bottom">

		<?php the_title( sprintf( '<h1 class="entry-title lead"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">

				<span class="feature-meta category"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php the_category(' '); ?></span>

				<span class="feature-meta"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?php the_author_posts_link(); ?></span>

			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

		<div class="entry-content typr">

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
					'after'  => '</div>',
				) );
			?>

		</div><!-- .entry-content -->

	<footer class="entry-footer">

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
