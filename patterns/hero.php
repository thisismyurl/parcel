<?php
/**
 * Title: Storefront Hero
 * Slug: parcel/hero
 * Categories: parcel-storefront
 * Viewport Width: 1280
 * Inserter: true
 * Description: Media-text hero — a portrait shop photograph beside the headline, subhead, and two calls to action (order ahead, view the menu). No full-bleed stock photography; the image is a real product shot at equal weight with the words.
 *
 * @package parcel
 */
?>
<!-- wp:group {"className":"parcel-section","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|12","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group parcel-section" style="padding:0 0 var(--wp--preset--spacing--12) 0">

	<!-- wp:media-text {"mediaPosition":"right","mediaWidth":45,"verticalAlignment":"center","imageFill":true,"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"className":"parcel-hero"} -->
	<div class="wp-block-media-text parcel-hero has-media-on-the-right is-stacked-on-mobile" style="grid-template-columns:auto 45%;padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
		<div class="wp-block-media-text__content" style="padding:var(--wp--preset--spacing--10) var(--wp--preset--spacing--10)">

			<!-- wp:paragraph {"className":"is-style-parcel-eyebrow"} -->
			<p class="is-style-parcel-eyebrow"><?php esc_html_e( 'Roasted Tuesdays · Baked daily', 'parcel' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|fraunces","fontWeight":"600","fontSize":"var:preset|font-size|4xl","lineHeight":"1.02","letterSpacing":"-0.02em"},"color":{"text":"var:preset|color|ink"}},"spacing":{"margin":{"top":"var:preset|spacing|4"}}} -->
			<h1 style="margin-top:var(--wp--preset--spacing--4);font-family:var(--wp--preset--font-family--fraunces);font-weight:600;font-size:var(--wp--preset--font-size--4xl);line-height:1.02;letter-spacing:-0.02em;color:var(--wp--preset--color--ink)"><?php esc_html_e( 'A slower kind of good morning', 'parcel' ); ?></h1>
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
		<figure class="wp-block-media-text__media">
			<img src="" alt="<?php esc_attr_e( 'A latte in a ceramic cup, foam art just poured, on a wooden counter', 'parcel' ); ?>" class="wp-image-placeholder" style="object-fit:cover" />
		</figure>
	</div>
	<!-- /wp:media-text -->

</div>
<!-- /wp:group -->
