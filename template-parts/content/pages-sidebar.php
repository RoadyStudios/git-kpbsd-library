<?php
/**
 * Template part for displaying the pages sidebar widgetized area.
 *
 * @package kpbsdlibrary
 */

namespace WP_Rig\WP_Rig;

if ( ! kpbsdlibrary()->is_pages_sidebar_active() ) {
	return;
}

kpbsdlibrary()->print_styles( 'kpbsdlibrary-pages-widgets', 'kpbsdlibrary-pages-widgets' );

?>
<aside id="pages-sidebar" class="pages-sidebar widget-area" aria-label="Pages Sidebar">
	<?php kpbsdlibrary()->display_pages_sidebar(); ?>
</aside><!-- pages-sidebar -->
