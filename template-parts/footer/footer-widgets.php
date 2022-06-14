<?php
/**
 * Template part for displaying the footer widgetized area.
 *
 * @package kpbsdlibrary
 */

namespace WP_Rig\WP_Rig;

if ( ! kpbsdlibrary()->is_footer_widgets_active() ) {
	return;
}

kpbsdlibrary()->print_styles( 'kpbsdlibrary-footer-widgets', 'kpbsdlibrary-widgets' );

?>
<aside id="footer-widgets" class="footer-widgets-area widget-area">
	<?php kpbsdlibrary()->display_footer_widgets(); ?>
</aside><!-- footer-widgets -->
