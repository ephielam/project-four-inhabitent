<?php /* Template Name: Find Us Template */
get_header(); ?>
<div class="find-us-container">
	<div id="primary" class="content-area">
		<main id ="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<section class="find-us-main">
					<h2 class="find-us-title">Find Us</h2>
				
					<h2>We Take Camping Very Seriously.</h2>
					<p>Inhabitent Camping Supply Co. knows what it takes to outfit a camping trip right. From flannel shirts to artisanal axes, we’ve got your covered. Please contact us below with any questions comments or suggestions.</p>
				<section class="form">
					<h2>Send Us Email!</h2>
					<form method="post" class="form-inner">
						<p class="form-name">
							<label for="name">Name<span class="required"> *</span></label>
							<input type="text" id="name" name="name" size="40">
							<span role="alert" class="form-invalid">This field is required.</span>
						</p>
						<p class="form-email">
							<label for="email">Email<span class="required"> *</span></label>
							<input type="email" id="email" name="email" size="40">
							<span role="alert" class="form-invalid">This field is required.</span>
						</p>
						<p class="form-subject">
							<label for="subject">Subject<span class="required"> *</span></label>
							<input type="text" id="subject" name="subject" size="40">
							<span role="alert" class="form-invalid">This field is required.</span>
						</p>
						<p class="form-message">
							<label for="message">Message<span class="required"> *</span><br></label>
							<textarea id="message" name="message" rows="5" cols="40"></textarea>
							<span role="alert" class="form-invalid">This field is required.</span>
						</p>
						<p>
							<input type="submit" value="Submit" class="submit">
						</p>
						<div class="form-error" role="alert">One or more fields have an error. Please check and try again.
						</div>
					</form>


			<?php endwhile; //End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
</div><!-- .find-us-container-->
<?php get_footer(); ?>


