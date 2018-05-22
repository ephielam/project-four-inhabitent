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

			<header class="page-header">
				<h1>Shop Stuff</h1>
				<ul></ul>
				<?php ?>
			</header><!-- .page-header -->

		<?php
		   $args = array( 
		   		'post_type' => 'product', 
		   		'order' => 'DESC',
		   		'posts_per_page' => 16
		   	);
		   $product_posts = get_posts( $args ); // returns an array of posts
		?>
		<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
		   <div class="product-image-wrapper">
		   		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?><a>
		   </div>
		   <div class="product-text-wrapper">
			   <p><?php the_title(); ?> <span><?php echo CFS()->get('price'); ?></span></p>
			</div>
		<?php endforeach; wp_reset_postdata(); ?>
			<?php the_posts_navigation(); ?>

		<?php else : ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
