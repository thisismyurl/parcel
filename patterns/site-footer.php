<?php
/**
 * Title: Site Footer
 * Slug: parcel/site-footer
 * Categories: parcel-footers
 * Viewport Width: 1280
 * Inserter: true
 *
 * Pattern: Site Footer
 *
 * Three-column footer on carbon. Logo and tagline left, navigation links
 * centre, contact details right, with social links and a copyright line
 * across the foot. Text runs in pearl for contrast against the dark ground.
 *
 * @package parcel
 */
?>
<!-- wp:group {"className":"parcel-pattern-site-footer parcel-site-footer","metadata":{"categories":["parcel-footers"],"name":"Site Footer"},"style":{"color":{"background":"var:preset|color|parcel-carbon","text":"var:preset|color|parcel-pearl"},"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group parcel-pattern-site-footer parcel-site-footer" style="background-color:var(--wp--preset--color--parcel-carbon);color:var(--wp--preset--color--parcel-pearl);padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--10)">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|10"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"800","lineHeight":"1.0","letterSpacing":"-0.02em"},"color":{"text":"var:preset|color|parcel-pearl"},"spacing":{"margin":{"bottom":"var:preset|spacing|4"}}}} -->
			<h2 style="color:var(--wp--preset--color--parcel-pearl)">Parcel</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|outfit","fontSize":"var:preset|font-size|base","lineHeight":"1.65"},"color":{"text":"var:preset|color|parcel-mist"},"spacing":{"margin":{"bottom":"var:preset|spacing|6"}}}} -->
			<p style="color:var(--wp--preset--color--parcel-mist)">Same-day couriers and tracked shipping for businesses that treat every delivery like a promise.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"parcel-site-footer__social","style":{"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"600","letterSpacing":"0.04em","fontSize":"var:preset|font-size|sm"},"color":{"text":"var:preset|color|parcel-orange"}}} -->
			<p class="parcel-site-footer__social" style="color:var(--wp--preset--color--parcel-orange)"><a href="#">Instagram</a> &nbsp;&middot;&nbsp; <a href="#">LinkedIn</a> &nbsp;&middot;&nbsp; <a href="#">X</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"700","fontSize":"var:preset|font-size|sm","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"var:preset|color|parcel-stone"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
			<h3 style="color:var(--wp--preset--color--parcel-stone);text-transform:uppercase">Company</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|outfit","fontSize":"var:preset|font-size|base","lineHeight":"2.0"},"color":{"text":"var:preset|color|parcel-pearl"}}} -->
			<p style="color:var(--wp--preset--color--parcel-pearl)"><a href="#">Services</a><br><a href="#">Track a parcel</a><br><a href="#">Coverage map</a><br><a href="#">Pricing</a><br><a href="#">Careers</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|syne","fontWeight":"700","fontSize":"var:preset|font-size|sm","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"var:preset|color|parcel-stone"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
			<h3 style="color:var(--wp--preset--color--parcel-stone);text-transform:uppercase">Get in touch</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|outfit","fontSize":"var:preset|font-size|base","lineHeight":"1.9"},"color":{"text":"var:preset|color|parcel-pearl"}}} -->
			<p style="color:var(--wp--preset--color--parcel-pearl)">Dispatch desk: 1-800-555-0142<br>hello@parcel.example<br>Unit 9, Dock Road<br>Fort Erie, ON</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"var:preset|color|parcel-charcoal"},"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|6"}}}} -->
	<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--parcel-charcoal);color:var(--wp--preset--color--parcel-charcoal)"/>
	<!-- /wp:separator -->

	<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|outfit","fontSize":"var:preset|font-size|xs"},"color":{"text":"var:preset|color|parcel-mist"}}} -->
	<p style="color:var(--wp--preset--color--parcel-mist)">&copy; 2026 Parcel Logistics. All rights reserved. &nbsp;&middot;&nbsp; <a href="#">Privacy</a> &nbsp;&middot;&nbsp; <a href="#">Terms</a></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
