<?php
/**
 * The template for displaying posts in the Gallery post format.
 */

$post_modifier = '';

if (!is_single()) {
    $post_modifier = 'post--list-view';
}

?>

<article id="post-<?php the_ID(); ?>" class="<?php spackler_post_class($post_modifier, true); ?>" >
	<header class="post__header">
		<?php if ( is_single() ) : ?>
		<h1 class="post__title"><?php the_title(); ?></h1>
		<?php else : ?>
		<h1 class="post__title">
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'spackler' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<?php endif; // is_single() ?>
	</header><!-- .entry-header -->

	<div class="post__content">
		<?php if ( is_single() ) : ?>
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'spackler' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'spackler' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
		<?php else : ?>
			<?php spackler_featured_gallery(); ?>
		<?php endif; // is_single() ?>
	</div><!-- .post__content -->

	<footer class="post__meta">
		<?php spackler_entry_meta(); ?>

		<?php if ( comments_open() ) : ?>
		<span class="comments-link">
			<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'spackler' ) . '</span>', __( 'One comment so far', 'spackler' ), __( 'View all % comments', 'spackler' ) ); ?>
		</span><!-- .comments-link -->
		<?php endif; // comments_open() ?>
		<?php //edit_post_link( __( 'Edit', 'spackler' ), '<span class="edit-link">', '</span>' ); ?>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->
