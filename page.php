<?php
/**
 * The template for displaying all pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kpbsdlibrary
 */

namespace WP_Rig\WP_Rig;

get_header();

kpbsdlibrary()->print_styles( 'kpbsdlibrary-content' );

?>
	<main id="primary" class="site-main">
		<?php

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content/entry', 'page' );
		}
		?>
	</main><!-- #primary -->
<?php
get_template_part( 'template-parts/content/pages-sidebar' );
get_footer();
