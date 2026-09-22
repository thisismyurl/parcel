<?php
/**
 * Title: Our Story
 * Slug: parcel/our-story
 * Categories: parcel-community
 * Viewport Width: 1280
 * Inserter: true
 * Description: Media-text pattern for the roaster or baker's background — a portrait photo beside a founding story, for the About page. Image and word at equal weight, no full-bleed photography.
 *
 * The media slot ships EMPTY on purpose — same reason as patterns/hero.php:
 * the theme bundles no photography, so the editor supplies the portrait and
 * its alt text.
 *
 * @package parcel
 */

?>
<!-- wp:group {"className":"parcel-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group parcel-section" style="padding-top:var(--wp--preset--spacing--12);padding-right:0;padding-bottom:var(--wp--preset--spacing--12);padding-left:0">

	<!-- wp:media-text {"mediaPosition":"left","mediaWidth":42,"verticalAlignment":"center","className":"parcel-our-story"} -->
	<div class="wp-block-media-text parcel-our-story has-media-on-the-left is-stacked-on-mobile is-vertically-aligned-center" style="grid-template-columns:42% auto">
		<figure class="wp-block-media-text__media"></figure>
		<div class="wp-block-media-text__content">

			<!-- wp:paragraph {"className":"is-style-parcel-eyebrow"} -->
			<p class="is-style-parcel-eyebrow"><?php esc_html_e( 'Our story', 'parcel' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} -->
			<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--3)"><?php esc_html_e( 'Started in a garage, still stubborn about it', 'parcel' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"is-style-parcel-lead","style":{"spacing":{"margin":{"top":"var:preset|spacing|5"}}}} -->
			<p class="is-style-parcel-lead" style="margin-top:var(--wp--preset--spacing--5)"><?php esc_html_e( 'We started roasting a pound at a time on a converted popcorn machine because the coffee we could buy nearby wasn’t worth the walk. Nine years later the machine is bigger, but the batches are still small on purpose.', 'parcel' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|4"}}}} -->
			<p style="margin-top:var(--wp--preset--spacing--4)"><?php esc_html_e( 'Every bean is cupped before it’s bought, every loaf is shaped by hand, and every regular gets remembered. That’s the whole plan.', 'parcel' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
	</div>
	<!-- /wp:media-text -->

</div>
<!-- /wp:group -->
