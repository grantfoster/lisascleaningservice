
<?php
/**
 * The template for displaying the 'One Time Cleaning' page
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
						<?php
								while ( have_posts() ) :
									the_post();
									get_template_part( 'template-parts/content', 'page' );
								endwhile; // End of the loop.
							?>
                    </div>
					<div class='col-sm-4'>
						<?php the_field('right_column'); ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->

<?php
get_footer();
