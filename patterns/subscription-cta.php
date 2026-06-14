<?php
/**
 * Title: Subscription CTA Band
 * Slug: parcel/subscription-cta
 * Categories: parcel-cta
 * Viewport Width: 1280
 * Inserter: true
 *
 * Full-width orange band — the single high-colour zone. Cream-on-orange headline,
 * price callout, two-button CTA. This earns its intensity by being isolated.
 *
 * @package parcel
 */
?>
<!-- wp:group {"className":"parcel-pattern-subscription-cta parcel-subscription-cta","metadata":{"categories":["parcel-cta"],"name":"Subscription CTA Band"},"style":{"color":{"background":"var:preset|color|parcel-orange"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-group parcel-pattern-subscription-cta parcel-subscription-cta" style="background-color:var(--wp--preset--color--parcel-orange)">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|16"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"55%"} -->
		<div class="wp-block-column" style="flex-basis:55%">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"800","lineHeight":"1.0","letterSpacing":"-0.03em"},"color":{"text":"var:preset|color|parcel-cream"}}} -->
			<h2 style="color:var(--wp--preset--color--parcel-cream)">Your first box ships in 48 hours.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|outfit","fontSize":"var:preset|font-size|lg"},"color":{"text":"var:preset|color|parcel-ink"},"spacing":{"margin":{"top":"var:preset|spacing|6"}}}} -->
			<p style="color:var(--wp--preset--color--parcel-ink)">Curated, shipped, and guaranteed to be the most anticipated package you receive this month.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%">
			<!-- wp:heading {"level":3,"className":"is-style-parcel-price-display","style":{"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"800","lineHeight":"1.0","letterSpacing":"-0.03em","fontSize":"var:preset|font-size|display"},"color":{"text":"var:preset|color|parcel-cream"}}} -->
			<h3 class="is-style-parcel-price-display" style="color:var(--wp--preset--color--parcel-cream)">$39</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|outfit","fontSize":"var:preset|font-size|sm"},"color":{"text":"var:preset|color|parcel-ink"},"spacing":{"margin":{"bottom":"var:preset|spacing|8"}}}} -->
			<p style="color:var(--wp--preset--color--parcel-ink)">/month &nbsp;&middot;&nbsp; Free shipping &nbsp;&middot;&nbsp; Cancel anytime</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"color":{"background":"var:preset|color|parcel-cream","text":"var:preset|color|parcel-rust"},"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"700","letterSpacing":"0.04em"},"border":{"radius":"0"}}} -->
				<div class="wp-block-button">
					<a class="wp-block-button__link wp-element-button" href="/subscribe" style="background-color:var(--wp--preset--color--parcel-cream);color:var(--wp--preset--color--parcel-rust)">Subscribe now</a>
				</div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"var:preset|color|parcel-ink","background":"transparent"},"border":{"color":"var:preset|color|parcel-ink","style":"solid","width":"1px","radius":"0"},"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"600"}}} -->
				<div class="wp-block-button is-style-outline">
					<a class="wp-block-button__link wp-element-button" href="/gift" style="color:var(--wp--preset--color--parcel-ink);border:1px solid var(--wp--preset--color--parcel-ink)">Gift a subscription</a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
