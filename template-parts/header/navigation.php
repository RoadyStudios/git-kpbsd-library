<?php
/**
 * Template part for displaying the header navigation menu
 *
 * @package kpbsdlibrary
 */

namespace WP_Rig\WP_Rig;

if ( ! kpbsdlibrary()->is_primary_nav_menu_active() ) {
	return;
}

?>

<nav id="<?php echo apply_filters( 'kpbsdlibrary_site_navigation_id', 'site-navigation' ); /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */ ?>" class="<?php echo apply_filters( 'kpbsdlibrary_site_navigation_classes', 'main-navigation nav--toggle-sub nav--toggle-small' ); /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */ ?>" aria-label="<?php esc_attr_e( 'Main menu', 'kpbsdlibrary' ); ?>"
	<?php
	if ( kpbsdlibrary()->is_amp() ) {
		?>
		[class]=" siteNavigationMenu.expanded ? 'main-navigation nav--toggle-sub nav--toggle-small nav--toggled-on' : 'main-navigation nav--toggle-sub nav--toggle-small' "
		<?php
	}
	?>
>
	<?php
	if ( kpbsdlibrary()->is_amp() ) {
		?>
		<amp-state id="siteNavigationMenu">
			<script type="application/json">
				{
					"expanded": false
				}
			</script>
		</amp-state>
		<?php
	}
	?>

	<?php
	$menu_toggle_button = '<button class="menu-toggle" aria-label="' . esc_html__( 'Open menu', 'kpbsdlibrary' ) . '" aria-controls="primary-menu" aria-expanded="false">
					' . esc_html__( 'Menu', 'kpbsdlibrary' ) . '
					</button>';
	$menu_toggle_button = apply_filters( 'kpbsdlibrary_menu_toggle_button', $menu_toggle_button );
	?>

	<?php echo $menu_toggle_button; /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */ ?>

	<div class="primary-menu-container">
		<?php kpbsdlibrary()->display_primary_nav_menu( array( 'menu_id' => 'primary-menu' ) ); ?>
	</div>
</nav><!-- #site-navigation -->
