<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ping-Font
 */

$dataRevetement = get_fields();
get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			
			?>
		
			<div class="single-revetement-card">
				<?php the_post_thumbnail(); ?>
				<div class="single-revetement-card_content">
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt(); ?>
					<section> 
						<h3>Informations caractéristiques</h3>
						
						<p>Rapidité : <?= $dataRevetement['rapidite']?></p>
						<p>Contrôle : <?= $dataRevetement['controle']?></p>
						<p>Adhérence : <?= $dataRevetement['adherence']?></p>
						<p>Epaisseur : <?= $dataRevetement['epaisseur']?></p>
					</section>
				</div>
			</div>

		<?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

