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
 * @package _s
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class='container skinny space'>
			<div class="row">
				<div class='col-12'>
					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'page' );

					endwhile; // End of the loop.
					?>
				</div>
			</div>	
		</div>
		<?php if ( get_field('form_on') ): ?>
			<div class='silk space'>
				<div class='container skinny'>
					<h3>Submit your request</h3>
						<?php
						$id = get_field('wp_forms_id');
						wpforms_display($id, false, false); 
						?>
				</div>
			</div>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
