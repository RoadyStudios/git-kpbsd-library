<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kpbsdlibrary
 */

namespace WP_Rig\WP_Rig;

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php
	if ( ! kpbsdlibrary()->is_amp() ) {
		?>
		<script>document.documentElement.classList.remove( 'no-js' );</script>
		<?php
	}
	?>

	<?php wp_head(); ?>
	<?php $site_id = get_current_blog_id(); ?>
</head>

<body id="site-id-<?php echo $site_id; ?>" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'kpbsdlibrary' ); ?></a>

	<header id="masthead" class="site-header">
		<?php get_template_part( 'template-parts/header/navigation' ); ?>

		<?php
		if ( is_front_page() ) {
			get_template_part( 'template-parts/header/branding-front-page', get_post_type() );
		} else {
			get_template_part( 'template-parts/header/branding', get_post_type() );
		}
		?>

	</header><!-- #masthead -->
