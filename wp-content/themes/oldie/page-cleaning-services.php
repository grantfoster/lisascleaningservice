<?php
/**
 * The template for displaying the 'Cleaning Services' page
 *
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
						<img style="margin-top: 30px;" src='<?php echo get_bloginfo("template_url") ?>/images/House-Cleaning-Services.png'>
						<?php
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/content', 'page' );
							endwhile; // End of the loop.
						?>
						<div class='center'>
						<a href="regular-maid-service"><img style="margin-top: 30px; margin-bottom: 30px;" src='<?php echo get_bloginfo("template_url") ?>/images/regular-cleaning.png' /></a>
						<a href="one-time-service"><img style="margin-left: 40px; margin-top: 30px; margin-bottom: 30px;" src='<?php echo get_bloginfo("template_url") ?>/images/move-in-move-out.png' /></a>
						</div>
                    </div>
					<div class='col-sm-4'>
						<a href="contact-us"><img style="margin-top: 30px;" src='<?php echo get_bloginfo("template_url") ?>/images/request-quote.png'></a>
						<h4 class="column-title">Service Areas</h4>
						<?php the_field('right_column'); ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->

<?php
get_footer();
