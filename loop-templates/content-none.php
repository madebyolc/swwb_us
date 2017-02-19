<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

?>

<article id="post-0" class="post no-results not-found" style="border-bottom: 0px;">

	<header class="page-header typr">

		<h1 class="page-title"><?php _e( 'Nothing Found', 'understrap' ); ?></h1>

	</header><!-- .page-header -->

	<div class="page-content">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'understrap' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<header class="page-header typr">

					<p class="page-title"><?php _e( 'Sorry, nothing matched your search. Please try again or browse from the main menu.', 'understrap' ); ?></p>

			</header><!-- .page-header -->

			<div class="search search-lg typr">

				<?php get_search_form(); ?>

			</div>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'understrap' ); ?></p>

			<?php get_search_form(); ?>

		<?php endif; ?>

	</div><!-- .page-content -->

</article><!-- .no-results -->
