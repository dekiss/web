<?php
/**
Template Name: Blog
 *
 * @package WordPress
 * @subpackage nebel.tv
 * @since nebel.tv 1.0
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <article class="blog">
                <div class="entry-holder">
                    <header class="entry-header">
                        <h1 class="entry-title black bold uppercase">Nebel.tv blog</h1>
                    </header>
                    <div class="entry-content">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <ul class="posts">
                                <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <header class="entry-header">
                                        <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                                            <div class="entry-thumbnail">
                                                <?php the_post_thumbnail(); ?>
                                            </div>
                                        <?php endif; ?>

                                        <h1 class="entry-title"><?php the_title(); ?></h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content">
                                        <?php the_content(); ?>
                                        <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                                    </div><!-- .entry-content -->
                                </li><!-- #post -->
                            </ul>
                        <?php endwhile; ?>
                    </div>
                </div>
            </article>
        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>