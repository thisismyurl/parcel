<?php
/**
 * Title: Unboxing Reveal
 * Slug: parcel/unboxing-reveal
 * Categories: parcel-hero
 * Viewport Width: 1280
 * Inserter: true
 *
 * Two-column layout: left = stacked box photos (closed + open), right = order
 * manifest list + price callout + subscribe CTA. The manifest list uses the
 * is-style-parcel-manifest block style to render as a packing slip.
 *
 * Editors update the manifest list items each month.
 *
 * @package parcel
 */
?>
<!-- wp:group {"id":"unboxing","className":"parcel-pattern-unboxing","metadata":{"categories":["parcel-product"],"name":"Unboxing Reveal"},"style":{"color":{"background":"var:preset|color|parcel-cream"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-group parcel-pattern-unboxing" id="unboxing" style="background-color:var(--wp--preset--color--parcel-cream)">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|16"}}}} -->
	<div class="wp-block-columns">

		<!-- LEFT: box photos -->
		<!-- wp:column {"width":"48%"} -->
		<div class="wp-block-column" style="flex-basis:48%">

			<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"parcel-box","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
			<figure class="wp-block-image size-parcel-box" style="aspect-ratio:1"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/parcel-box-closed.jpg" alt="Closed subscription box tied with natural jute twine" style="aspect-ratio:1;object-fit:cover" /></figure>
			<!-- /wp:image -->

			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"parcel-unbox"} -->
			<figure class="wp-block-image size-parcel-unbox" style="aspect-ratio:4/3"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/parcel-box-open.jpg" alt="Open subscription box revealing artisan contents" style="aspect-ratio:4/3;object-fit:cover" /></figure>
			<!-- /wp:image -->

		</div>
		<!-- /wp:column -->

		<!-- RIGHT: manifest + pricing -->
		<!-- wp:column {"width":"52%","style":{"spacing":{"padding":{"top":"var:preset|spacing|8"}}}} -->
		<div class="wp-block-column" style="flex-basis:52%">

			<!-- wp:paragraph {"className":"is-style-parcel-eyebrow","style":{"typography":{"fontFamily":"var:preset|font-family|outfit","fontSize":"0.6875rem","fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|parcel-rust"},"spacing":{"margin":{"bottom":"var:preset|spacing|2"}}}} -->
			<p class="is-style-parcel-eyebrow" style="color:var(--wp--preset--color--parcel-rust)">This Month&rsquo;s Box</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"700","lineHeight":"1.18"},"spacing":{"margin":{"bottom":"var:preset|spacing|6"}}}} -->
			<h3>The Spring Edition</h3>
			<!-- /wp:heading -->

			<!-- wp:list {"className":"is-style-parcel-manifest","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|6"}}}} -->
			<ul class="is-style-parcel-manifest">
				<!-- wp:list-item --><li>×1 &nbsp; Handmade Oat Milk Soap &mdash; Full Size (100g)</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>×1 &nbsp; Cold-Pressed Argan Oil Serum &mdash; 30ml</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>×2 &nbsp; Hand-Rolled Beeswax Candles &mdash; 8 hr burn</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>×1 &nbsp; Specialty Single-Origin Coffee &mdash; 150g, whole bean</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>×1 &nbsp; Linen Tea Towel &mdash; Block Print Edition</li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:separator {"style":{"color":{"background":"var:preset|color|parcel-rule"}}} -->
			<hr class="wp-block-separator" style="background-color:var(--wp--preset--color--parcel-rule)" />
			<!-- /wp:separator -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3,"className":"is-style-parcel-price-display","style":{"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"800","lineHeight":"1.0","letterSpacing":"-0.03em","fontSize":"var:preset|font-size|display"},"color":{"text":"var:preset|color|parcel-orange"}}} -->
				<h3 class="is-style-parcel-price-display" style="color:var(--wp--preset--color--parcel-orange)">$39</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|outfit","fontSize":"var:preset|font-size|sm"},"color":{"text":"var:preset|color|parcel-slate"}}} -->
				<p style="color:var(--wp--preset--color--parcel-slate)">/month &nbsp;&middot;&nbsp; Free shipping &nbsp;&middot;&nbsp; Cancel anytime</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"color":{"background":"var:preset|color|parcel-orange","text":"var:preset|color|parcel-ink"},"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"700","letterSpacing":"0.04em"},"border":{"radius":"0"},"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|8","right":"var:preset|spacing|8"}}}} -->
				<div class="wp-block-button">
					<a class="wp-block-button__link wp-element-button" href="/subscribe" style="background-color:var(--wp--preset--color--parcel-orange);color:var(--wp--preset--color--parcel-ink)">Subscribe now</a>
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
