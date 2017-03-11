<?php
/**
 * @package understrap
 */
?>

<section class="anc" id="<?php echo sanitize_title_with_dashes( get_the_title()); ?>"></section>

<div id="child-<?php the_ID(); ?>" class="panel-row row nm panel-page br-full">

	<div class="panel-box heading grey row nm col-sm-12 np">

		<div class="col-sm-8 np">

			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><h1 class="d b"><?php the_title(); ?></h1></a>

		</div>

		<div class="col-sm-4 np typr right mob-left">

			<h2 class="lighten b" >

				<small>

					<span class="hidden-sm-down">Posted</span> <?php echo get_the_date('M Y'); ?>

				</small>

			</h2>

			<script>
				var btns = document.querySelectorAll('button');
				var clipboard = new Clipboard(btns);
				clipboard.on('success', function(e) {
						console.log(e);
				});
				clipboard.on('error', function(e) {
						console.log(e);
				});
			</script>

		</div>

	</div>

	<?php if ( has_post_thumbnail() ) { ?>

		<div class="panel-box col-sm-6 np">

			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?></a>

		</div>

		<div class="panel-box panel-excerpt col-sm-6 np pad-left typr">

			<?php echo the_excerpt(); ?>

				<span class="small lighten b">

					<span class="feature-meta category"><i class="fa fa-map-marker" aria-hidden="true"></i> Posted in <?php the_category(' '); ?></span>

					<span class="feature-meta author"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Written by <?php the_author_posts_link(); ?></span>

				</span>

				<div class="panel-box">

					<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>" class="btn btn-plain btn-md block go forward typr" role="button" aria-pressed="true">Read</a>

				</div>

			</div>

	<?php }	else { ?>

		<div class="panel-box panel-excerpt col-sm-6 np">

			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?></a>

			<?php echo the_excerpt(); ?>

		</div>

		<div class="panel-box panel-excerpt col-sm-6 np pad-left typr">

				<span class="small lighten b">

					<span class="feature-meta category"><i class="fa fa-map-marker" aria-hidden="true"></i> Posted in <?php the_category(' '); ?></span>

					<span class="feature-meta author"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Written by <?php the_author_posts_link(); ?></span>

				</span>

				<div class="panel-box">

					<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>" class="btn btn-plain btn-md block go forward typr" role="button" aria-pressed="true">Read</a>

				</div>

			</div>

	<?php	}	?>

</div><!-- end row -->
