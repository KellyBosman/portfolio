<?php
/**
 * The template for displaying projects
 *
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>

<div id="primary" class="site-content sidebar">
	<div id="main-content" role="main">
			
	<?php while ( have_posts() ) : the_post();
		$link = get_field('site_link');
		$image_1 = get_field('image_1');
		$image_2 = get_field('image_2');
		$image_3 = get_field('image_3'); 
		$size = "full"; ?>

<article class="project">
	<aside class="project-sidebar">
		<h2><?php the_title(); ?></h2>

		<?php the_content(); ?>

		<p class="read-more-link"><strong><a href="<?php echo $link; ?>">Visit Live Site></a></strong></p>

	</aside>

	<div class="project-images">
		<?php if ($image_1) {
			echo wp_get_attachment_image( $image_1, $size );
		} ?>
		
		<?php if ($image_2) {
			echo wp_get_attachment_image( $image_2, $size );
		} ?>	

		<?php if ($image_3) {
			echo wp_get_attachment_image( $image_3, $size );
		} ?>	
	</div>

</article>

	<?php endwhile; // end of the loop. ?>

	</div><!-- #main-content -->

</div><!-- #primary -->

<nav id="navigation" class="container">
	
		<div class="left"><a href="<?php echo site_url('/projects/') ?>">&larr; <span>Back to Projects</span></a></div>
	</nav>

<?php get_footer(); ?>
