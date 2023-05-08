<?php
/**
 * This template to displays woocommerce page
 *
 * @package Theme Freesia
 * @subpackage Event
 * @since Event 1.0
 */

get_header();
	$event_settings = event_get_theme_options();
	global $event_content_layout;
	if( $post ) {
		$layout = get_post_meta( get_queried_object_id(), 'event_sidebarlayout', true );
	}
	if( empty( $layout ) || is_archive() || is_search() || is_home() ) {
		$layout = 'default';
	}
	if( 'default' == $layout ) { //Settings from customizer
		if(($event_settings['event_sidebar_layout_options'] != 'nosidebar') && ($event_settings['event_sidebar_layout_options'] != 'fullwidth')){ ?>

<div id="primary">
	<?php }
	}?>
	<main id="main" role="main" class="clearfix">
		<?php woocommerce_content(); ?>
	</main> <!-- #main -->
	<?php 
	if( 'default' == $layout ) { //Settings from customizer
		if(($event_settings['event_sidebar_layout_options'] != 'nosidebar') && ($event_settings['event_sidebar_layout_options'] != 'fullwidth')): ?>
</div> <!-- #primary -->
<?php endif;
}?>
<?php 
if( 'default' == $layout ) { //Settings from customizer
	if(($event_settings['event_sidebar_layout_options'] != 'nosidebar') && ($event_settings['event_sidebar_layout_options'] != 'fullwidth')){ ?>
<aside id="secondary">
	<?php }
} 
	if( 'default' == $layout ) { //Settings from customizer
		if(($event_settings['event_sidebar_layout_options'] != 'nosidebar') && ($event_settings['event_sidebar_layout_options'] != 'fullwidth')): ?>
		<?php dynamic_sidebar( 'event_woocommerce_sidebar' ); ?>
</aside> <!-- #secondary -->
<?php endif;
	}
get_footer();