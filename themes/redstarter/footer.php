<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer">
					<div class="site-info">
						<h4>Contact Info</h4>
						<p><i class="fas fa-envelope"></i> <a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
						<p><i class="fas fa-phone"> </i> <a href="tel:5553434567891">778-456-7891</a></p>
						<p><i class="fab fa-facebook-square"></i>
							  <i class="fab fa-twitter-square"></i>
							  <i class="fab fa-google-plus-square"></i>
						</p>					
					</div><!-- .site-info -->
					<div class ="business-hours">
						<h4>Business Hours</h4>	
						<p><span>Monday-Friday: </span>9am to 5pm</p>
						<p><span>Saturday: </span>10am to 2pm</p>
						<p><span>Sunday: </span>Closed</p>
					</div><!-- .business-hours -->
					<div class="footer-logo">
						<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-text.svg'?>" alt="Inhabitent Logo"></a>
					</div><!-- .footer-logo -->
				</div>
				<p class="copyright">Copyright <i class="far fa-copyright"></i> 2017 Inhabitent</p>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
