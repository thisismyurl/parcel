<?php
/**
 * Title: Regulars Say
 * Slug: parcel/testimonials
 * Categories: parcel-community
 * Viewport Width: 1280
 * Inserter: true
 * Description: Three customer quotes on a paper-soft band, each in a card with a real name and a specific detail rather than a vague five-star blurb.
 *
 * @package parcel
 */

?>
<!-- wp:group {"className":"parcel-section parcel-band--terracotta-soft","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group parcel-section parcel-band--terracotta-soft" style="padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"600px","justifyContent":"center"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--10)">
		<!-- wp:heading {"level":2,"textAlign":"center"} -->
		<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'What the regulars say', 'parcel' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"parcel-testimonial-grid","layout":{"type":"default"}} -->
	<div class="wp-block-group parcel-testimonial-grid">

		<!-- wp:group {"className":"is-style-parcel-card parcel-testimonial-card","layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-parcel-card parcel-testimonial-card">
			<!-- wp:quote -->
			<blockquote class="wp-block-quote"><!-- wp:paragraph -->
			<p><?php esc_html_e( 'I stopped in for a coffee on my way to work three years ago and I’ve been ordering the same pour-over every Tuesday since.', 'parcel' ); ?></p>
			<!-- /wp:paragraph --></blockquote>
			<!-- /wp:quote -->
			<!-- wp:paragraph {"fontSize":"sm","style":{"typography":{"fontWeight":"700"}}} -->
			<p class="has-sm-font-size" style="font-weight:700"><?php esc_html_e( 'Marisol T.', 'parcel' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"xs","textColor":"ink-muted"} -->
			<p class="has-ink-muted-color has-text-color has-xs-font-size"><?php esc_html_e( 'Regular since 2023', 'parcel' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"is-style-parcel-card parcel-testimonial-card","layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-parcel-card parcel-testimonial-card">
			<!-- wp:quote -->
			<blockquote class="wp-block-quote"><!-- wp:paragraph -->
			<p><?php esc_html_e( 'The morning bun alone is worth the walk. I order two, one for me and one I always end up giving away.', 'parcel' ); ?></p>
			<!-- /wp:paragraph --></blockquote>
			<!-- /wp:quote -->
			<!-- wp:paragraph {"fontSize":"sm","style":{"typography":{"fontWeight":"700"}}} -->
			<p class="has-sm-font-size" style="font-weight:700"><?php esc_html_e( 'Owen D.', 'parcel' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"xs","textColor":"ink-muted"} -->
			<p class="has-ink-muted-color has-text-color has-xs-font-size"><?php esc_html_e( 'Saturday regular', 'parcel' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"is-style-parcel-card parcel-testimonial-card","layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-parcel-card parcel-testimonial-card">
			<!-- wp:quote -->
			<blockquote class="wp-block-quote"><!-- wp:paragraph -->
			<p><?php esc_html_e( 'They remember my order and my kid’s name. That’s rarer than good coffee, and they have both.', 'parcel' ); ?></p>
			<!-- /wp:paragraph --></blockquote>
			<!-- /wp:quote -->
			<!-- wp:paragraph {"fontSize":"sm","style":{"typography":{"fontWeight":"700"}}} -->
			<p class="has-sm-font-size" style="font-weight:700"><?php esc_html_e( 'Priya K.', 'parcel' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"xs","textColor":"ink-muted"} -->
			<p class="has-ink-muted-color has-text-color has-xs-font-size"><?php esc_html_e( 'Neighbour, five years', 'parcel' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
