<?php
/**
 * Template part for displaying the header branding
 *
 * @package kpbsdlibrary
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-branding front-page-header">
	<?php the_custom_logo(); ?>

	<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>

	<p class="site-description">
		<?php echo $kpbsdlibrary_description; /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */ ?>
	</p>
</div><!-- .site-branding -->
