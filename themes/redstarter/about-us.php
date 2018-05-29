<?php /* Template Name: About Us Template */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id ="main" class="site-main" role="main">
		<section class="about-banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
			<h1><?php the_title(); ?></h1>
		</section><!-- about-banner-->
		<section class="about-us">
			<?php while ( have_posts() ) : the_post(); ?>
				<h2>Our Story</h2>
				<p><?php echo CFS()->get('our-story'); ?></p>
				<h2>Our Team</h2>
				<p><?php echo CFS()->get('our-team'); ?></p>
			<?php endwhile; //End of the loop. ?>
		</section><!-- .about-us-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>


