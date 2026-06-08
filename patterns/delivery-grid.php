<?php
/**
 * Title: Delivery Grid
 * Slug: parcel/delivery-grid
 * Categories: parcel-features
 * Viewport Width: 1280
 * Inserter: true
 *
 * Pattern: Delivery Grid
 *
 * Three-column delivery-options grid on a linen background. Each card sits on
 * cream with an orange icon placeholder, the service name in Syne, a price and
 * timing line, and a short description in Outfit.
 *
 * @package parcel
 */
?>
<!-- wp:group {"className":"parcel-pattern-delivery-grid parcel-delivery-grid","metadata":{"categories":["parcel-features"],"name":"Delivery Grid"},"style":{"color":{"background":"var:preset|color|parcel-linen"},"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group parcel-pattern-delivery-grid parcel-delivery-grid" style="background-color:var(--wp--preset--color--parcel-linen)">

	<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"800","lineHeight":"1.05","letterSpacing":"-0.02em"},"spacing":{"margin":{"bottom":"var:preset|spacing|3"}}}} -->
	<h2>Pick the pace that fits.</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|outfit","fontSize":"var:preset|font-size|lg","lineHeight":"1.6"},"color":{"text":"var:preset|color|parcel-slate"},"spacing":{"margin":{"bottom":"var:preset|spacing|12"}}}} -->
	<p style="color:var(--wp--preset--color--parcel-slate)">Every parcel is tracked door to door. Choose the speed that matches the promise you made.</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|8"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"style":{"color":{"background":"var:preset|color|parcel-cream"},"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|8","right":"var:preset|spacing|8"}},"border":{"color":"var:preset|color|parcel-rule","width":"1px"}}} -->
		<div class="wp-block-column has-border-color" style="border-color:var(--wp--preset--color--parcel-rule);border-width:1px;background-color:var(--wp--preset--color--parcel-cream);padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--8)">
			<!-- wp:group {"className":"parcel-delivery-grid__icon","style":{"color":{"background":"var:preset|color|parcel-orange"},"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"},"margin":{"bottom":"var:preset|spacing|6"}}},"layout":{"type":"constrained","contentSize":"56px"}} -->
			<div class="wp-block-group parcel-delivery-grid__icon" style="background-color:var(--wp--preset--color--parcel-orange);margin-bottom:var(--wp--preset--spacing--6);padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"></div>
			<!-- /wp:group -->
			<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"700","lineHeight":"1.15"},"spacing":{"margin":{"bottom":"var:preset|spacing|3"}}}} -->
			<h3>Standard</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"700","fontSize":"var:preset|font-size|xl"},"color":{"text":"var:preset|color|parcel-orange"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
			<p style="color:var(--wp--preset--color--parcel-orange)">$6 &middot; 3&#8211;5 days</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|outfit","fontSize":"var:preset|font-size|base","lineHeight":"1.65"},"color":{"text":"var:preset|color|parcel-charcoal"}}} -->
			<p style="color:var(--wp--preset--color--parcel-charcoal)">Reliable ground delivery for parcels that aren&#8217;t in a hurry. Tracking and proof of delivery included.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"color":{"background":"var:preset|color|parcel-cream"},"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|8","right":"var:preset|spacing|8"}},"border":{"color":"var:preset|color|parcel-rule","width":"1px"}}} -->
		<div class="wp-block-column has-border-color" style="border-color:var(--wp--preset--color--parcel-rule);border-width:1px;background-color:var(--wp--preset--color--parcel-cream);padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--8)">
			<!-- wp:group {"className":"parcel-delivery-grid__icon","style":{"color":{"background":"var:preset|color|parcel-orange"},"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"},"margin":{"bottom":"var:preset|spacing|6"}}},"layout":{"type":"constrained","contentSize":"56px"}} -->
			<div class="wp-block-group parcel-delivery-grid__icon" style="background-color:var(--wp--preset--color--parcel-orange);margin-bottom:var(--wp--preset--spacing--6);padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"></div>
			<!-- /wp:group -->
			<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"700","lineHeight":"1.15"},"spacing":{"margin":{"bottom":"var:preset|spacing|3"}}}} -->
			<h3>Express</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"700","fontSize":"var:preset|font-size|xl"},"color":{"text":"var:preset|color|parcel-orange"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
			<p style="color:var(--wp--preset--color--parcel-orange)">$14 &middot; Next day</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|outfit","fontSize":"var:preset|font-size|base","lineHeight":"1.65"},"color":{"text":"var:preset|color|parcel-charcoal"}}} -->
			<p style="color:var(--wp--preset--color--parcel-charcoal)">Order before 6pm and it lands the next business morning. Priority handling end to end.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"color":{"background":"var:preset|color|parcel-cream"},"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|8","right":"var:preset|spacing|8"}},"border":{"color":"var:preset|color|parcel-rule","width":"1px"}}} -->
		<div class="wp-block-column has-border-color" style="border-color:var(--wp--preset--color--parcel-rule);border-width:1px;background-color:var(--wp--preset--color--parcel-cream);padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--8)">
			<!-- wp:group {"className":"parcel-delivery-grid__icon","style":{"color":{"background":"var:preset|color|parcel-orange"},"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"},"margin":{"bottom":"var:preset|spacing|6"}}},"layout":{"type":"constrained","contentSize":"56px"}} -->
			<div class="wp-block-group parcel-delivery-grid__icon" style="background-color:var(--wp--preset--color--parcel-orange);margin-bottom:var(--wp--preset--spacing--6);padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"></div>
			<!-- /wp:group -->
			<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"700","lineHeight":"1.15"},"spacing":{"margin":{"bottom":"var:preset|spacing|3"}}}} -->
			<h3>Same-Day</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"700","fontSize":"var:preset|font-size|xl"},"color":{"text":"var:preset|color|parcel-orange"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
			<p style="color:var(--wp--preset--color--parcel-orange)">$29 &middot; Today</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|outfit","fontSize":"var:preset|font-size|base","lineHeight":"1.65"},"color":{"text":"var:preset|color|parcel-charcoal"}}} -->
			<p style="color:var(--wp--preset--color--parcel-charcoal)">A dedicated courier collects within the hour and delivers across the city before the day is out.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
