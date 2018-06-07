<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Oldie
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'oldie' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class='row'>		
				<a href="<?php echo get_home_url(); ?>">
					<img class='logo' src="<?php echo get_bloginfo('template_url') ?>/images/logo.png"/>
				</a>
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'oldie' ); ?></button>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav><!-- #site-navigation -->
			</div>
			<?php if ( is_front_page() ): ?>
				<div class='row'>
					<img src="<?php echo get_bloginfo('template_url') ?>/images/header.jpg" width="100%" style="width: 100%; height: 100%;"/>
				</div>	
				<div class='row'>
					<div class='col-sm-12 yellow'>
						<p class='small'>[the field 'header-bar']The best maid service in Apex, Cary, northern Fuquay-Varina, Holly Springs, Morrisville and select areas of Raleigh since 2007.</p>
					</div>
				</div>
			<?php endif; ?>
		</div><!-- .container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
