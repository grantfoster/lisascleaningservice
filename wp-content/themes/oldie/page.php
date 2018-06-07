<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Oldie
 */

get_header();
?>

		<main id="main" class="site-main">
			<div class='container content-area' id="primary">
				<div class='row'>
					<div class='col-sm-8'>
						<?php
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', 'page' );
						endwhile; // End of the loop.
						?>
					</div>
					<div class='col-sm-4' style="display:flex;justify-content:center;align-items:flex-end;">
						<img style="margin: 30px;" src='<?php echo get_bloginfo("template_url") ?>/images/request-quote.png'>
					</div>
				</div>
				<div class="row space">
					<div class='col-sm-6 right'>
						<img class='space' src='<?php echo get_bloginfo("template_url") ?>/images/regular-cleaning.png' />
					</div>
					<div class='col-sm-6 left'>
						<img class='space' src='<?php echo get_bloginfo("template_url") ?>/images/move-in-move-out.png' />
					</div>
				</div>
				<div class='row'>
					<div class='col-sm-4'>
						<?php the_field('section_1'); ?>
					</div>
					<div class='col-sm-4'>
						<?php the_field('section_2'); ?>
					</div>
					<div class='col-sm-4'>
						<?php the_field('section_3'); ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->

<?php
get_footer();
