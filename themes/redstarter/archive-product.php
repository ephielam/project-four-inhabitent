<?php
/**
 * The template for displaying the product archive page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="shop-page-header">
				<h2>Shop Stuff</h2>
				<ul class ="product-type-list">
					<?php 
					 $terms = get_terms( array(
                          'taxonomy' => 'product-type',
                          'hide_empty' => false,  ) );

					 foreach($terms as $term){
 					   echo '<li><a href="../product-type/' . strtolower($term->name) . '">' . $term->name . '</a></li>';
  					}
					?>
				</ul>
				<?php ?>
			</header><!-- .shop-page-header -->
			<div class="product-grid">
				<?php
				   $args = array( 
				   		'post_type' => 'product', 
				   		'order' => 'ASC',
				   		'posts_per_page' => 16   
				   	);
				   $product_posts = get_posts( $args ); // returns an array of posts
				?>
				<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
				   <div class="single-product-wrapper">
					   	<div class="product-image-wrapper">
					   		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					   </div>
					   <div class="product-text-wrapper">
						   <p><?php the_title(); ?> <span><?php echo CFS()->get('price'); ?></span></p>
						</div>
					</div><!-- .single-product-wrapper-->
				<?php endforeach; wp_reset_postdata(); ?>
					<?php /*the_posts_navigation(); */?>

				<?php else : ?>

				<?php endif; ?>
			</div><!-- product-grid-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php/* get_sidebar(); */?>
<?php get_footer(); ?>
