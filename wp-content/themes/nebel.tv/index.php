<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage nebel.tv
 * @since nebel.tv 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
        <article class="blog">
            <div class="entry-holder content-scroll">
                    <h1 class="entry-title black bold uppercase">Nebel.tv blog</h1>
                <div class="entry-content">
                    <ul class="posts">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <?php nebeltv_entry_date(); ?>
                                <div class="post-preview">
                                    <h2 class="post-title greener"><?php the_title(); ?></h2>
                                    <?php the_content(); ?>
                                    <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                                </div><!-- .entry-content -->
                                <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                                    <div class="entry-thumbnail">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                <?php endif; ?>
                            </li><!-- #post -->
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </article>
    </div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>