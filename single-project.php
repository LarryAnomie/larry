<?php
/**
 * The Template for displaying projects
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <div class="main-content columns small-12 large-10 large-centered">
            <!--project template -->
            <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', get_post_format() ); ?>
                <?php //twentythirteen_post_nav(); ?>
                <?php //comments_template(); ?>

            <?php endwhile; ?>

        </div><!-- .main-content -->
    </div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>