<?php
/*
Template Name: Simple page
 *
 * @package WordPress
 * @subpackage nebel.tv
 * @since nebel.tv 1.0
 */


get_header(); ?>

    <div id="primary" class="content-area static_page">
        <div id="content" class="site-content" role="main">
            <article class="page">
                <div class="entry-holder content-scroll">
                    <h1 class="greener bold"><?php the_title(); ?></h1>
                    <div class="entry-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <?php the_content(); ?>
                        <div class="left"></div>
                        <div class="left"></div>
                        <div class="left"></div>
                        <div class="left"></div>
                        <div class="left"></div>
                    </div>
                </div>
            </article>
        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>