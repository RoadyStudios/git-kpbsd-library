<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kpbsdlibrary
 */

namespace WP_Rig\WP_Rig;

if ( ! kpbsdlibrary()->is_primary_sidebar_active() ) {
	return;
}

kpbsdlibrary()->print_styles( 'kpbsdlibrary-sidebar', 'kpbsdlibrary-widgets' );

?>
<aside id="secondary" class="primary-sidebar widget-area" aria-label="Sidebar">
	<?php kpbsdlibrary()->display_primary_sidebar(); ?>
</aside><!-- #secondary -->
