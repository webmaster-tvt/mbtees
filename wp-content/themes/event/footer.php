<?php
/**
 * The template for displaying the footer.
 *
 * @package Theme Freesia
 * @subpackage Event
 * @since Event 1.0
 */
$event_settings = event_get_theme_options();
if(is_page_template('upcoming-event-template.php') || is_page_template('program-schedule-template.php') ){
 	// Code is poetry
}elseif(!is_page_template('page-templates/event-corporate.php') ){ ?>
	</div> <!-- end .container -->
<?php } ?>
</div> <!-- end #content -->
<!-- Footer Start ============================================= -->
<footer id="colophon"  role="contentinfo" class="site-footer clearfix">
<?php
$footer_column = $event_settings['event_footer_column_section'];
	if( is_active_sidebar( 'event_footer_1' ) || is_active_sidebar( 'event_footer_2' ) || is_active_sidebar( 'event_footer_3' ) || is_active_sidebar( 'event_footer_4' )) { ?>
	<div class="widget-wrap">
		<div class="container">
			<div class="widget-area clearfix">
			<?php
				if($footer_column == '1' || $footer_column == '2' ||  $footer_column == '3' || $footer_column == '4'){
				echo '<div class="column-'.absint($footer_column).'">';
					if ( is_active_sidebar( 'event_footer_1' ) ) :
						dynamic_sidebar( 'event_footer_1' );
					endif;
				echo '</div><!-- end .column'.absint($footer_column). '  -->';
				}
				if($footer_column == '2' ||  $footer_column == '3' || $footer_column == '4'){
				echo '<div class="column-'.absint($footer_column).'">';
					if ( is_active_sidebar( 'event_footer_2' ) ) :
						dynamic_sidebar( 'event_footer_2' );
					endif;
				echo '</div><!--end .column'.absint($footer_column).'  -->';
				}
				if($footer_column == '3' || $footer_column == '4'){
				echo '<div class="column-'.absint($footer_column).'">';
					if ( is_active_sidebar( 'event_footer_3' ) ) :
						dynamic_sidebar( 'event_footer_3' );
					endif;
				echo '</div><!--end .column'.absint($footer_column).'  -->';
				}
				if($footer_column == '4'){
				echo '<div class="column-'.absint($footer_column).'">';
					if ( is_active_sidebar( 'event_footer_4' ) ) :
						dynamic_sidebar( 'event_footer_4' );
					endif;
				echo '</div><!--end .column'.absint($footer_column).  '-->';
				}
				?>
			</div> <!-- end .widget-area -->
		</div> <!-- end .container -->
	</div> <!-- end .widget-wrap -->
	<?php }
		if(class_exists('Event_Plus_Features')){
			if(is_page_template('page-templates/event-corporate.php') ){
				do_action('event_client_box');
			}
		} ?>
<div class="site-info" <?php if($event_settings['event-img-upload-footer-image'] !=''){?>style="background-image:url('<?php echo esc_url($event_settings['event-img-upload-footer-image']); ?>');" <?php } ?>>
	<div class="container">
	<?php
		if($event_settings['event_buttom_social_icons'] == 0):
			do_action('event_social_links');
		endif;
		if(class_exists('Event_Plus_Features')){
			do_action('event_footer_menu');
		}
		
		if ( is_active_sidebar( 'event_footer_options' ) ) :
		dynamic_sidebar( 'event_footer_options' );
		else:
			echo '<div class="copyright">';?>
					<?php  echo '&copy; ' . date_i18n(__('Y','event')) ; ?>
			<a title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo( 'name', 'display' ); ?></a> | 
						<?php esc_html_e('Designed by:','event'); ?> <a title="<?php echo esc_attr__( 'Theme Freesia', 'event' ); ?>" target="_blank" href="<?php echo esc_url( 'https://themefreesia.com' ); ?>"><?php esc_html_e('Theme Freesia','event');?></a> | 
						<?php esc_html_e('Powered by:','event'); ?> <a title="<?php echo esc_attr__( 'WordPress', 'event' );?>" target="_blank" href="<?php echo esc_url( 'https://wordpress.org' );?>"><?php esc_html_e('WordPress','event'); ?></a>
					</div>
		<?php endif;?>
			<div style="clear:both;"></div>
		</div> <!-- end .container -->
	</div> <!-- end .site-info -->
	<?php
		$disable_scroll = $event_settings['event_scroll'];
		if($disable_scroll == 0):?>
	<button class="go-to-top" type="button">
		<span class="icon-bg"></span>
		<span class="back-to-top-text"><?php echo esc_html($event_settings['event_back_to_top']);?></span>
		<i class="fa fa-angle-up back-to-top-icon"></i>
	</button>
	<?php endif; ?>
</footer> <!-- end #colophon -->
</div><!-- end #page -->
<?php wp_footer(); ?>
</body>
</html>