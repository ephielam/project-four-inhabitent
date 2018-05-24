<?php /* Template Name: Find Us Template */
get_header(); ?>
<div class="find-us-container">
	<div id="primary" class="content-area">
		<main id ="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<h2 class="find-us-title">Find Us</h2>
				
				<h2>We Take Camping Very Seriously.</h2>
				<p>Inhabitent Camping Supply Co. knows what it takes to outfit a camping trip right. From flannel shirts to artisanal axes, we’ve got your covered. Please contact us below with any questions comments or suggestions.</p>
				<h2>Send Us Email!</h2>
			<?php endwhile; //End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
</div><!-- .find-us-container-->
<?php get_footer(); ?>


