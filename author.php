<?php
/**
 * The template for displaying the author pages.
 *
 * Learn more: https://codex.wordpress.org/Author_Templates
 *
 * @package understrap
 */
get_header(); ?>

<div class="wrapper" id="author-wrapper">

    <div  id="content" class="container author">

        <div class="row">

            <div id="primary" class="content-area">

                <main id="main" class="site-main" role="main">

                    <header class="page-header author-header">

                        <?php
                            $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
                        ?>

                        <?php if ( ! empty( $curauth->ID ) ) : ?>
                            <?php echo get_avatar($curauth->ID); ?>
                        <?php endif; ?>

                        <dl>
                            <?php if ( ! empty( $curauth->user_url ) ) : ?>
                                <dt><?php esc_html_e( 'Website', 'understrap' ); ?></dt>
                                <dd><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
                            <?php endif; ?>

                            <?php if ( ! empty( $curauth->user_description ) ) : ?>
                                <dt><?php esc_html_e( 'Profile', 'understrap' ); ?></dt>
                                <dd><?php echo $curauth->user_description; ?></dd>
                            <?php endif; ?>
                        </dl>

                        <h2><?php esc_html_e( 'Articles by', 'understrap' ); ?> <?php echo $curauth->nickname; ?></h2>

                    </header><!-- .page-header -->

                        <!-- The Loop -->

                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                          <?php
                              /* Include the Post-Format-specific template for the content.
                               * If you want to override this in a child theme, then include a file
                               * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                               */
                              get_template_part( 'loop-templates/content', get_post_format() );
                          ?>

                        <?php endwhile; ?>

                        <div class="pagination">

                          <div class="previous typr"><span class="link"><?php next_posts_link( 'Previous' ); ?></span></div>

                          <div class="next typr"><span class="link"><?php previous_posts_link( 'Next' ); ?></span></div>

                        </div>

                        <?php else : ?>

                            <?php get_template_part( 'loop-templates/content', 'none' ); ?>

                        <?php endif; ?>

                        <!-- End Loop -->

                </main><!-- #main -->

            </div><!-- #primary -->

            <?php get_sidebar(); ?>

        </div> <!-- .row -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
