<?php
/**
 * Template part for displaying a post's footer
 *
 * @package kpbsdlibrary
 */

namespace WP_Rig\WP_Rig;

?>
<footer class="entry-footer">
	<?php get_template_part( 'template-parts/content/entry_actions', get_post_type() ); ?>

	<?php
	if ( ! is_front_page() && ! is_page() && ! is_page_template() ) {
		get_template_part( 'template-parts/content/entry_meta', get_post_type() );
	}
	?>
</footer><!-- .entry-footer -->
