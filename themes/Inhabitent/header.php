<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package demoTheme
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'demotheme' ); ?></a>

	<header id="masthead" class="site-header reverse-header" role="banner">
		<div class="container">
		<div class="site-branding">
			
			<div class="logo">
				<a href="http://localhost/project4-inhabitent-new/wordpress/" rel="home">
					<h1 class="site-title">Inhabitent</h1>
				</a>
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
			<div class="header-search">
				<form role="search" method="get" class="search-form" action="http://localhost/project4-inhabitent-new/wordpress/">
					<fieldset>
						<a href="#" class="search-toggle" aria-hidden="true">
							<i class="fa fa-search"></i>
						</a>

						<?php 
					 		get_search_form();
						?>
					</fieldset>
				</form>
			</div>
			<!-- <div class="header-search">

				</div> -->

		</nav><!-- #site-navigation -->
		</div>			
	</header><!-- #masthead -->

	<div id="content" class="site-content">



