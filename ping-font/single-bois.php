<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ping-Font
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			?>
		
			<div class="single-bois-card">
				<?php the_post_thumbnail(); ?>
				<div class="single-bois-card_content">
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt(); ?>
				</div>
			</div>
			
		<?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
