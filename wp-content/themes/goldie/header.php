<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<header id="masthead" class="site-header" style="background-image: linear-gradient(rgba(55,55,55, .55), rgba(55,55,55, .55)), url(<?php the_field('header-image'); ?>);">
		<nav id="site-navigation" class="main-navigation">
			<div class="container skinny">
				<div class="row">
					<div class='col-12'>
						<?php the_custom_logo(); ?>
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars"></i></button>
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
					</div>
				</div>
			</div>
		</nav><!-- #site-navigation -->
		<div class='container skinny'>
			<div class="row">
				<div class="col-12">
					<h1><?php the_field('header_text'); ?></h1>
				</div>
			</div>
		</div>
		<?php if ( is_front_page() ) : ?>
			<div class='charcoal--transparent header-links'>
				<div class='container skinny'>
					<div class='row'>
						<div class='col-sm-6 zoom'>
							<div style='text-align: left;'>
							<h4>For Clients</h4>
							<p><a href='/clients'><?php the_field('clients_button_text'); ?> &rarr;</a></p>
							</div>
						</div>
						<div class='col-sm-6 zoom'>
								<h4>For Candidates</h4>
								<p><a href='/candidates'><?php the_field('candidates_button_text'); ?> &rarr;</a></p>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
		
	
	</header><!-- #masthead -->

	<div id="content" class="site-content">
