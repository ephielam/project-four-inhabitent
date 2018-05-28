<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="product-type-page-header">
				<?php
					$title = get_the_archive_title();
					$stringtitle = (string) $title;
					$stringtitle = explode(" ", $stringtitle); ?>
					<h2><?php echo $stringtitle[1]; ?></h2>
					<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
			</header><!-- .page-header -->
			<div class="product-type-grid">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="single-product-wrapper">
						   	<div class="product-image-wrapper">
						   		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						   </div>
						   <div class="product-text-wrapper">
							   <p><span class="product-title"><?php the_title(); ?> </span><span class="price"><?php echo CFS()->get('price'); ?></span></p>
							</div>
						</div><!-- .single-product-wrapper-->
					</article><!-- #post-## -->
				<?php endwhile; ?>

			</div><!-- .product-type-grid-->
		<?php else : ?>

		<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
