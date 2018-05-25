<?php
/**
 * The template for displaying all single product posts.
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="single-product-container">
			<?php while ( have_posts() ) : the_post(); ?>
			<div class ="product-image-wrapper"><?php the_post_thumbnail(); ?></div>
			<div class ="product-text-wrapper">
				<h2><?php the_title(); ?></h2>
				<h3><?php echo CFS()->get('price'); ?></h3>
				<?php the_content(); ?>
				<div class=social-buttons>
					<button class="smb"><i class="fab fa-facebook-f"></i> Like</button>
					<button class="smb"><i class="fab fa-twitter"></i> Tweet</button>
					<button class="smb"><i class="fab fa-pinterest"></i> Pin</button>
				</div>
			</div>
		</div>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
