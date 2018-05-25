<?php
/**
 * The template for the front page.
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<section class="home-banner">
			<img src="wp-content/themes/redstarter/images/inhabitent-logo-full.svg" class="home-logo">
		</section><!-- home-banner-->
		<section class="shop-section">
			<h2>Shop Stuff</h2>
			<div class="shop-categories-wrapper">
				<?php 
					$terms = get_terms( 
						array(
                        'taxonomy' => 'product-type',
                        'hide_empty' => false
                    	) 
					);

					foreach($terms as $term) {
 					   echo '<div><img src="wp-content/themes/redstarter/images/' . strtolower($term->name) . '.svg" alt="' . $term->name . '"><p>' . $term->description . '</p><a href="product-type/' . strtolower($term->name) . '" class="shop-category-button">' . $term->name . ' Stuff</a></div>';
  					}
					?>		
			</div><!-- shop-categories-wrapper -->
		</section>
		<section class="journal-section">
			<h2>Inhabitent Journal</h2>
			<ul class="journal-posts-wrapper">
				<?php
				   $args = array( 
				   		'post_type' => 'post', 
				   		'order' => 'DES',
				   		'posts_per_page' => 3
				   	);
				   $product_posts = get_posts( $args ); // returns an array of posts
				?>
				<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
			   <li class="individual-post-wrapper">
				   	<div class="post-image-wrapper">
				   		<?php the_post_thumbnail(); ?>
				   </div>
				   <div class="post-text-wrapper">
				   		<p>
						   <?php the_date(); ?> / 
						   <?php comments_number(); ?>
					  	</p>
					   	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<button><a href="<?php the_permalink(); ?>">Read Entry</a></button>
					</div>
				</li><!-- journal-posts-wrapper -->
			<?php endforeach; wp_reset_postdata(); ?>
			</ul>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
