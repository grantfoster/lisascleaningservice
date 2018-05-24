<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="container">
			<nav id="site-navigation" class="footer-navigation">
					<div class="container">
						<div class='col-12'>
						<p><?php
							wp_nav_menu( array(
								'theme_location' => 'menu-2',
								'menu_id'        => 'secondary-menu',
							) );
							?></p>
							
						</div>
					</div>
				</nav><!-- #site-navigation -->
				<p class='small'><i class="fa fa-mobile-alt"></i> 919-249-6730</p>
				<p class="small">Copyright The H.M Stanley Group 2018</p>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
