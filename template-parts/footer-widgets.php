<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordCamp_Base_2017
 */

?>

<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) || is_active_sidebar( 'footer-5' ) ) : ?>
	<aside class="widget-area footer-widgets" role="complementary">
		<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
			<div class="widget-column footer-widgets-blockfooter-widget-1">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</div>
		<?php endif; ?>
		<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
			<div class="widget-column footer-widgets-blockfooter-widget-2">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</div>
		<?php endif; ?>
		<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
			<div class="widget-column footer-widgets-blockfooter-widget-3">
				<?php dynamic_sidebar( 'footer-3' ); ?>
			</div>
		<?php endif; ?>
		<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
			<div class="widget-column footer-widgets-blockfooter-widget-4">
				<?php dynamic_sidebar( 'footer-4' ); ?>
			</div>
		<?php endif; ?>
		<?php if ( is_active_sidebar( 'footer-5' ) ) : ?>
			<div class="widget-column footer-widgets-blockfooter-widget-5">
				<?php dynamic_sidebar( 'footer-5' ); ?>
			</div>
		<?php endif; ?>
	</aside><!-- .widget-area.footer-widgets -->
<?php endif; ?>
