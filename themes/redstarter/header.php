<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-tent.png'?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header-<?php the_title(); ?>" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<div class="inhabitent-home">
						<!-- if on home page or 'about-us' page use white tent icon -->
						<?php if ( is_front_page() || is_page_template( 'about-us.php' )) {	?>
						<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-tent-white.svg'?>" alt="Inhabitent Home"></a>
						<?php } else { ?>
						<!-- else use blue tent icon -->
						<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-tent.svg'?>" alt="Inhabitent Home"></a>
						<?php } ?>
					</div>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<div class="header-search">
						<?php get_search_form(); ?>
					</div><!-- .header-search -->
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
