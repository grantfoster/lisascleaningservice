<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Oldie
 */

?>

	</div><!-- #content -->
		<div class='container footer'>
			<div class='row green'>
				<div class='col-sm-3'>
					<?php the_field('footer_section_1', 'option'); ?>
				</div>
				<div class='col-sm-3'>
					<?php the_field('footer_section_2', 'option'); ?>
				</div>
				<div class='col-sm-3'>
					<?php the_field('footer_section_3', 'option'); ?>
				</div>
				<div class='col-sm-3'>
					<?php the_field('footer_section_4', 'option'); ?>
				</div>
			</div>
			<div class="row bottom-footer">
				<div class='col-sm-12'>
					<footer id="colophon">
						<div class="site-info center">
							<?php the_field('bottom_footer', 'option'); ?>
						</div><!-- .site-info -->
					</footer><!-- #colophon -->
				</div>
			</div>
			<div class='row'>
				<div class='col-sm-12'>
					<a href='/privacy-policy'><p>Privacy Policy</p></a>
				</div>
			</div>
		</div>		
	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
