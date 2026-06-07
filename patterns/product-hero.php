<?php
/**
 * Title: Product Hero
 * Slug: parcel/product-hero
 * Categories: parcel-hero
 * Viewport Width: 1280
 *
 * Two-column hero: content on the left (55%), product photography on the right (45%).
 * Minimum height 90dvh. No overlay — the product is never obscured.
 *
 * @package parcel
 */
?>
<!-- wp:group {"className":"parcel-pattern-product-hero parcel-hero","metadata":{"categories":["parcel-hero"],"name":"Product Hero"},"style":{"color":{"background":"var:preset|color|parcel-cream"},"dimensions":{"minHeight":"90dvh"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group parcel-pattern-product-hero parcel-hero" style="background-color:var(--wp--preset--color--parcel-cream);min-height:90dvh">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
	<div class="wp-block-columns" style="gap:0;padding:0">

		<!-- CONTENT COLUMN -->
		<!-- wp:column {"width":"55%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|12","right":"var:preset|spacing|10"}}}} -->
		<div class="wp-block-column" style="flex-basis:55%">

			<!-- wp:paragraph {"className":"is-style-parcel-eyebrow","style":{"typography":{"fontFamily":"var:preset|font-family|outfit","fontSize":"0.6875rem","fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|parcel-orange"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
			<p class="is-style-parcel-eyebrow" style="color:var(--wp--preset--color--parcel-orange)">Curated Monthly</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"800","lineHeight":"1.0","letterSpacing":"-0.03em","textWrap":"balance"},"color":{"text":"var:preset|color|parcel-carbon"},"spacing":{"margin":{"bottom":"var:preset|spacing|6"}}}} -->
			<h1 style="color:var(--wp--preset--color--parcel-carbon)">A box worth opening every single month.</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|outfit","fontSize":"var:preset|font-size|lg","lineHeight":"1.6"},"color":{"text":"var:preset|color|parcel-charcoal"},"spacing":{"margin":{"bottom":"var:preset|spacing|8"}}}} -->
			<p style="color:var(--wp--preset--color--parcel-charcoal)">Every month we choose five exceptional products — things we use ourselves and genuinely recommend. No fillers. No throwaways. Free shipping. Cancel whenever.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"color":{"background":"var:preset|color|parcel-orange","text":"var:preset|color|parcel-cream"},"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"700","letterSpacing":"0.04em"},"border":{"radius":"0"},"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|8","right":"var:preset|spacing|8"}}}} -->
				<div class="wp-block-button">
					<a class="wp-block-button__link wp-element-button" href="/subscribe" style="background-color:var(--wp--preset--color--parcel-orange);color:var(--wp--preset--color--parcel-cream)">Start your subscription</a>
				</div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"var:preset|color|parcel-carbon","background":"transparent"},"border":{"color":"var:preset|color|parcel-carbon","style":"solid","width":"1px","radius":"0"},"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"600"}}} -->
				<div class="wp-block-button is-style-outline">
					<a class="wp-block-button__link wp-element-button" href="#unboxing" style="color:var(--wp--preset--color--parcel-carbon);border:1px solid var(--wp--preset--color--parcel-carbon)">See what&rsquo;s inside</a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

		<!-- IMAGE COLUMN -->
		<!-- wp:column {"width":"45%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
		<div class="wp-block-column" style="flex-basis:45%;padding:0">
			<!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"parcel-product","style":{"dimensions":{"minHeight":"90dvh"}}} -->
			<figure class="wp-block-image size-parcel-product" style="aspect-ratio:4/5"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/parcel-hero.jpg" alt="Artisan subscription box products arranged on cream linen" style="aspect-ratio:4/5;object-fit:cover;min-height:90dvh" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
