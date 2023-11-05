<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ping-Font
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1>Type de bois</h1>
				<p>Nous possédons tous types de bois pour répondre à vos besoins !</p>
			</header><!-- .page-header -->
			<section class="bois-wrapper">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				?>
			
				<div class="bois-card">
					<?php the_post_thumbnail(); ?>
					<div class="bois-card_content">
						<h2><?php the_title(); ?></h2>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink();?>">En savoir plus</a>
					</div>
				</div>
			<?php endwhile;?>
			</section>
			<?php else :

			get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
	</main><!-- #main -->