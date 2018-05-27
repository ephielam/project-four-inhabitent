<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="single-post-wrapper">
		<div class="image-wrapper">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>

			<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

			<h3 class="subheading">
				<?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>
			</h3><!-- .subheading -->
		</div><!-- .image-wrapper -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
		<footer class="entry-footer">
			<?php red_starter_entry_footer(); ?>
			<div class=social-buttons>
					<button class="smb"><i class="fab fa-facebook-f"></i> Like</button>
					<button class="smb"><i class="fab fa-twitter"></i> Tweet</button>
					<button class="smb"><i class="fab fa-pinterest"></i> Pin</button>
				</div>	
		</footer><!-- .entry-footer -->
	</div><!-- .single-post-wrapper -->
</article><!-- #post-## -->
