<?php
/**
 * The template for the front page.
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
		<h2>Inhabitent Journal</h2>

		<?php
		   $args = array( 
		   		'post_type' => 'post', 
		   		'order' => 'DES',
		   		'posts_per_page' => 3
		   	);
		   $product_posts = get_posts( $args ); // returns an array of posts
		?>
		<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
		   <div class="post-image-wrapper">
		   		<?php the_post_thumbnail(); ?>
		   </div>
		   <div class="post-text-wrapper">
			   <?php the_date(); ?> / 
			   <?php comments_number(); ?>
			   <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			</div>
			<div>
				<button><a href="<?php the_permalink(); ?>">Read Entry</a></button>
			</div>
		<?php endforeach; wp_reset_postdata(); ?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
