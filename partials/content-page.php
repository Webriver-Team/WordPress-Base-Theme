<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Apartment Fit
 * @since 1.0.0
 *
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'aptfit' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'aptfit' ),
					'after'  => '</div>',
				)
			);
		?>
</div>
