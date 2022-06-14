<?php
/**
 * Template part for displaying the header branding
 *
 * @package kpbsdlibrary
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-branding">
	<?php the_custom_logo(); ?>

	<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>

	<?php
	$kpbsdlibrary_description = get_bloginfo( 'description', 'display' );
	if ( $kpbsdlibrary_description || is_customize_preview() ) {
		?>
		<p class="site-description">
			<?php echo $kpbsdlibrary_description; /* phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */ ?>
		</p>
		<?php
	}
	?>
</div><!-- .site-branding -->
<div class="breadcrumb-wrapper">
	<?php echo do_shortcode( '[flexy_breadcrumb]' ); ?>
</div>
