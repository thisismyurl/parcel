<?php
/**
 * Title: Early Pour Promo Band
 * Slug: parcel/promo-band
 * Categories: parcel-storefront
 * Viewport Width: 1280
 * Inserter: true
 * Description: Full-width roast-dark banner for a limited-time offer — a weekday early-hours discount with a price badge and a CTA, in Parcel's own voice rather than a generic "Happy Hour" template line.
 *
 * @package parcel
 */
?>
<!-- wp:group {"className":"parcel-band--roast","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group parcel-band--roast" style="padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|8"}}} -->
	<div class="wp-block-group">

		<!-- wp:group {"layout":{"type":"constrained","contentSize":"520px"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|dm-sans","fontSize":"var:preset|font-size|xs","fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|terracotta-soft"}}} -->
			<p style="color:var(--wp--preset--color--terracotta-soft);font-family:var(--wp--preset--font-family--dm-sans);font-size:var(--wp--preset--font-size--xs);font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Weekdays, 7–8am', 'parcel' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"color":{"text":"var:preset|color|roast-fg"}}} -->
			<h2 class="wp-block-heading has-text-color" style="color:var(--wp--preset--color--roast-fg)"><?php esc_html_e( 'The Early Pour', 'parcel' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|roast-fg"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--roast-fg)"><?php esc_html_e( 'Any drip coffee and a morning bun for one flat price, before eight o’clock only. Come as you are.', 'parcel' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"is-style-parcel-price-tag","style":{"spacing":{"margin":{"top":"var:preset|spacing|4"}}}} -->
			<p class="is-style-parcel-price-tag" style="margin-top:var(--wp--preset--spacing--4)"><?php esc_html_e( '$5 flat', 'parcel' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'See today’s hours', 'parcel' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
