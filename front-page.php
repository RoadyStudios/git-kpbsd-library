<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package kpbsdlibrary
 */

namespace WP_Rig\WP_Rig;

get_header();

// Use grid layout if blog index is displayed.
if ( is_home() ) {
	kpbsdlibrary()->print_styles( 'kpbsdlibrary-content', 'kpbsdlibrary-front-page' );
} else {
	kpbsdlibrary()->print_styles( 'kpbsdlibrary-content' );
}

?>
	<main id="primary" class="site-home">
		<?php

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content/entry', get_post_type() );
		}

		get_template_part( 'template-parts/content/pagination' );
		?>
	</main><!-- #primary -->
<?php
get_footer();
