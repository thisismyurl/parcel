<?php
/**
 * Title: Storefront Hero
 * Slug: parcel/hero
 * Categories: parcel-storefront
 * Viewport Width: 1280
 * Inserter: true
 * Description: Media-text hero — a portrait shop photograph beside the headline, subhead, and two calls to action (order ahead, view the menu). No full-bleed stock photography; the image is a real product shot at equal weight with the words.
 *
 * The media slot ships EMPTY on purpose: the theme bundles no photography, so
 * the editor gets core's media placeholder and uploads the shop's own shot —
 * and writes its alt text, which is the only person who can describe it.
 *
 * @package parcel
 */

?>
<!-- wp:group {"className":"parcel-section","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|12","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group parcel-section" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--12);padding-left:0">

	<!-- wp:media-text {"mediaPosition":"right","mediaWidth":45,"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"className":"parcel-hero"} -->
	<div class="wp-block-media-text parcel-hero has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center" style="grid-template-columns:auto 45%;padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
		<div class="wp-block-media-text__content">

			<!-- wp:paragraph {"className":"is-style-parcel-eyebrow"} -->
			<p class="is-style-parcel-eyebrow"><?php esc_html_e( 'Roasted Tuesdays · Baked daily', 'parcel' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontWeight":"600","fontSize":"var:preset|font-size|4xl","lineHeight":"1.02","letterSpacing":"-0.02em"},"color":{"text":"var:preset|color|ink"},"spacing":{"margin":{"top":"var:preset|spacing|4"}}}} -->
			<h1 class="wp-block-heading has-text-color" style="margin-top:var(--wp--preset--spacing--4);color:var(--wp--preset--color--ink);font-family:var(--wp--preset--font-family--fraunces);font-size:var(--wp--preset--font-size--4xl);font-weight:600;letter-spacing:-0.02em;line-height:1.02"><?php esc_html_e( 'A slower kind of good morning', 'parcel' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"is-style-parcel-lead","style":{"spacing":{"margin":{"top":"var:preset|spacing|5"}}}} -->
			<p class="is-style-parcel-lead" style="margin-top:var(--wp--preset--spacing--5)"><?php esc_html_e( 'We roast in small batches, bake before sunrise, and pour one cup at a time. Stop in, or order ahead and we’ll have it waiting at the counter.', 'parcel' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|3"}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--8)">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Order ahead', 'parcel' ); ?></a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'View the menu', 'parcel' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<figure class="wp-block-media-text__media"></figure>
	</div>
	<!-- /wp:media-text -->

</div>
<!-- /wp:group -->
