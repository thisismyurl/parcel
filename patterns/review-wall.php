<?php
/**
 * Title: Review Wall
 * Slug: parcel/review-wall
 * Categories: parcel-social-proof
 * Viewport Width: 1280
 * Inserter: true
 *
 * Pattern: Review Wall
 *
 * Three-column testimonial grid. Each card has a 4px orange left border,
 * linen background, customer quote, customer name, subscriber tenure.
 *
 * @package parcel
 */
?>
<!-- wp:group {"className":"parcel-pattern-review-wall parcel-review-wall","metadata":{"categories":["parcel-social"],"name":"Review Wall"},"style":{"color":{"background":"var:preset|color|parcel-cream"},"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group parcel-pattern-review-wall parcel-review-wall" style="background-color:var(--wp--preset--color--parcel-cream)">

	<!-- wp:heading {"level":2,"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"700","lineHeight":"1.1","letterSpacing":"-0.02em"},"spacing":{"margin":{"bottom":"var:preset|spacing|12"}}}} -->
	<h2 class="has-text-align-center">What our subscribers say.</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|6"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"parcel-review-card","style":{"color":{"background":"var:preset|color|parcel-linen"},"border":{"left":{"color":"var:preset|color|parcel-orange","style":"solid","width":"4px"}},"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group parcel-review-card" style="background-color:var(--wp--preset--color--parcel-linen);border-left:4px solid var(--wp--preset--color--parcel-orange)">
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|outfit","fontStyle":"italic","fontSize":"var:preset|font-size|base","lineHeight":"1.65"},"color":{"text":"var:preset|color|parcel-charcoal"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
				<p style="color:var(--wp--preset--color--parcel-charcoal)">&#8220;I&#8217;ve been a subscriber for eight months and every box genuinely surprises me. That&#8217;s harder to do than it sounds.&#8221;</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|outfit","fontWeight":"700","fontSize":"var:preset|font-size|sm"},"color":{"text":"var:preset|color|parcel-carbon"}}} -->
				<p style="color:var(--wp--preset--color--parcel-carbon)">Sarah K.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|outfit","fontSize":"0.6875rem"},"color":{"text":"var:preset|color|parcel-mist"}}} -->
				<p style="color:var(--wp--preset--color--parcel-mist)">Subscriber since October 2023</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"parcel-review-card","style":{"color":{"background":"var:preset|color|parcel-linen"},"border":{"left":{"color":"var:preset|color|parcel-orange","style":"solid","width":"4px"}},"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group parcel-review-card" style="background-color:var(--wp--preset--color--parcel-linen);border-left:4px solid var(--wp--preset--color--parcel-orange)">
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|outfit","fontStyle":"italic","fontSize":"var:preset|font-size|base","lineHeight":"1.65"},"color":{"text":"var:preset|color|parcel-charcoal"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
				<p style="color:var(--wp--preset--color--parcel-charcoal)">&#8220;The coffee in the March box alone was worth the price. The rest was a bonus. Still thinking about it.&#8221;</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|outfit","fontWeight":"700","fontSize":"var:preset|font-size|sm"},"color":{"text":"var:preset|color|parcel-carbon"}}} -->
				<p style="color:var(--wp--preset--color--parcel-carbon)">Marcus L.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|outfit","fontSize":"0.6875rem"},"color":{"text":"var:preset|color|parcel-mist"}}} -->
				<p style="color:var(--wp--preset--color--parcel-mist)">Subscriber since January 2024</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"parcel-review-card","style":{"color":{"background":"var:preset|color|parcel-linen"},"border":{"left":{"color":"var:preset|color|parcel-orange","style":"solid","width":"4px"}},"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group parcel-review-card" style="background-color:var(--wp--preset--color--parcel-linen);border-left:4px solid var(--wp--preset--color--parcel-orange)">
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|outfit","fontStyle":"italic","fontSize":"var:preset|font-size|base","lineHeight":"1.65"},"color":{"text":"var:preset|color|parcel-charcoal"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
				<p style="color:var(--wp--preset--color--parcel-charcoal)">&#8220;I paused for two months and immediately reactivated. You don&#8217;t notice what you have until you pause it.&#8221;</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|outfit","fontWeight":"700","fontSize":"var:preset|font-size|sm"},"color":{"text":"var:preset|color|parcel-carbon"}}} -->
				<p style="color:var(--wp--preset--color--parcel-carbon)">Priya M.</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|outfit","fontSize":"0.6875rem"},"color":{"text":"var:preset|color|parcel-mist"}}} -->
				<p style="color:var(--wp--preset--color--parcel-mist)">Subscriber since June 2023</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
