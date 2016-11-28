<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordCamp_Base_2017
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wordcamporg' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wordcamporg' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<?php // After Header Widget Areas for homepage and all other pages. ?>
	<?php if ( is_front_page() ) : ?>
		<aside id="after-header-widgets" class="widget-area front-page" role="complementary">
			<?php dynamic_sidebar( 'after-header-homepage' ); ?>
		</aside><!-- #after-header-widgets .widget-area .front-page -->
	<?php else : ?>
		<aside id="after-header-widgets" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'after-header' ); ?>
		</aside><!-- #after-header-widgets .widget-area -->
	<?php endif; ?>

	<div id="content" class="site-content">

		<?php // Before Content Widget Areas for homepage and all other pages. ?>
		<?php if ( is_front_page() ) : ?>
			<aside id="before-content-widgets" class="widget-area front-page" role="complementary">
				<?php dynamic_sidebar( 'before-content-homepage' ); ?>
			</aside><!-- #before-content-widgets .widget-area .front-page -->
		<?php else : ?>
			<aside id="before-content-widgets" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'before-content' ); ?>
			</aside><!-- #before-content-widgets .widget-area -->
		<?php endif; ?>
