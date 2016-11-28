<?php
/**
 * The sidebar containing the main and secondary widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordCamp_Base_2017
 */
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary-sidebar" class="sidebar sidebar-1">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div id="secondary-sidebar" class="sidebar sidebar-2">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div>
	<?php endif; ?>
</aside><!-- #secondary -->


