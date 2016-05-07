<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Material
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--<div id="page" class="site">-->
<!--	<a class="skip-link screen-reader-text" href="#main"><?php /*esc_html_e( 'Skip to content', 'material' ); */?></a>-->

	<header id="masthead" class="site-header" role="banner">
<!--		<div class="site-branding">
			<?php
/*			if ( is_front_page() && is_home() ) : */?>
				<h1 class="site-title"><a href="<?php /*echo esc_url( home_url( '/' ) ); */?>" rel="home"><?php /*bloginfo( 'name' ); */?></a></h1>
			<?php /*else : */?>
				<p class="site-title"><a href="<?php /*echo esc_url( home_url( '/' ) ); */?>" rel="home"><?php /*bloginfo( 'name' ); */?></a></p>
			<?php
/*			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : */?>
				<p class="site-description"><?php /*echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
/*			endif; */?>
		</div><!-- .site-branding -->

		<div class="m-container nav">
			<div class="navbar-fixed">
				<nav id="site-navigation" class="main-navigation blue-grey darken-2" role="navigation">
					<div class="nav-wrapper">
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu side-nav', 'menu_id' => 'mobile-demo','items_wrap' => '<ul id="%1$s" class="%2$s"><li class="mobile-header"><p>Menu</p></li>%3$s</ul><div class="clear"></div>', ) ); ?>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'right hide-on-med-and-down' ) ); ?>

					</div>
				</nav><!-- #site-navigation -->
				<div class="clear"></div>
			</div>
	</header><!-- #masthead -->

<!--	<div class="container">-->
	<main id="content" class="site-content">
