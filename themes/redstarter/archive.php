<?php
/**
 * Template Name: Archives.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="journal-container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="blog-posts">
				<?php if ( have_posts() ) : 
				   $args = array( 
				   		'post_type' => 'post', 
				   		'order' => 'DESC',
				   	);
				   $posts = get_posts( $args ); // returns an array of posts
				?>
				<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
				   <div class="single-post-wrapper">
					  <?php the_post_thumbnail(); ?>
					  <h2><a href="<?php the_permalink(); ?>"><?php	the_title(); ?></a></h2>
					  <h3 class="subheading"><?php the_date(); ?> / <?php comments_number(); ?> / By <?php the_author(); ?></h3>
					  <p><?php the_excerpt(); ?></p>
					  <p><a href="<?php the_permalink(); ?>" class="read-more">Read More <i class="fas fa-arrow-right"></i></a></p>
					</div><!-- .single-post-wraper-->
				<?php endforeach; wp_reset_postdata();
					the_posts_navigation();

				else : 

				endif; ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
