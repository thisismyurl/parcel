<?php
/**
 * Title: Navigation Bar
 * Slug: parcel/navigation-bar
 * Categories: parcel-navigation
 * Viewport Width: 1280
 * Inserter: true
 *
 * Pattern: Navigation Bar
 *
 * Horizontal header on cream. Site title left, inline links and a "Track Order"
 * CTA in orange to the right. Static demo markup — swap the links for a
 * Navigation block when wiring this into a header template part.
 *
 * Heading note: the brand mark is a styled paragraph, not an h1. The page's
 * single h1 belongs to the page content (e.g. the Product Hero pattern on the
 * front page); a navigation bar carries site identity, not the document title,
 * so an h1 here would create a duplicate-h1 WCAG 1.3.1 failure wherever the bar
 * sits above a content heading.
 *
 * @package parcel
 */
?>
<!-- wp:group {"className":"parcel-pattern-navigation-bar parcel-navigation-bar","metadata":{"categories":["parcel-navigation"],"name":"Navigation Bar"},"style":{"color":{"background":"var:preset|color|parcel-cream"},"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|8","right":"var:preset|spacing|8"}},"border":{"bottom":{"color":"var:preset|color|parcel-rule","width":"1px"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group parcel-pattern-navigation-bar parcel-navigation-bar" style="border-bottom-color:var(--wp--preset--color--parcel-rule);border-bottom-width:1px;background-color:var(--wp--preset--color--parcel-cream);padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--8)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group">

		<!-- wp:paragraph {"className":"parcel-navigation-bar__brand","style":{"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"800","fontSize":"var:preset|font-size|xl","lineHeight":"1.0","letterSpacing":"-0.02em"},"color":{"text":"var:preset|color|parcel-carbon"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<p class="parcel-navigation-bar__brand" style="color:var(--wp--preset--color--parcel-carbon);margin-top:0;margin-bottom:0"><a href="/">Parcel</a></p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"className":"parcel-navigation-bar__menu","style":{"spacing":{"blockGap":"var:preset|spacing|7"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group parcel-navigation-bar__menu">

			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"600","fontSize":"var:preset|font-size|base"},"color":{"text":"var:preset|color|parcel-charcoal"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p style="color:var(--wp--preset--color--parcel-charcoal);margin-top:0;margin-bottom:0"><a href="#">Services</a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"600","fontSize":"var:preset|font-size|base"},"color":{"text":"var:preset|color|parcel-charcoal"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p style="color:var(--wp--preset--color--parcel-charcoal);margin-top:0;margin-bottom:0"><a href="#">Coverage</a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"600","fontSize":"var:preset|font-size|base"},"color":{"text":"var:preset|color|parcel-charcoal"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p style="color:var(--wp--preset--color--parcel-charcoal);margin-top:0;margin-bottom:0"><a href="#">Pricing</a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"600","fontSize":"var:preset|font-size|base"},"color":{"text":"var:preset|color|parcel-charcoal"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p style="color:var(--wp--preset--color--parcel-charcoal);margin-top:0;margin-bottom:0"><a href="#">About</a></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"color":{"background":"var:preset|color|parcel-orange","text":"var:preset|color|parcel-ink"},"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"700","letterSpacing":"0.04em"},"border":{"radius":"0"}}} -->
				<div class="wp-block-button">
					<a class="wp-block-button__link wp-element-button" href="/track" style="background-color:var(--wp--preset--color--parcel-orange);color:var(--wp--preset--color--parcel-ink);border-radius:0px">Track Order</a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
