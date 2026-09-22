<?php
/**
 * Title: Hours & Location
 * Slug: parcel/visit-us
 * Categories: parcel-menu
 * Viewport Width: 1280
 * Inserter: true
 * Description: The hours/location/order-ahead band treated as first-class, not an afterthought — a real hours table set with the same dot-leader convention as the menu board, an address, and a map link beside an order-ahead CTA.
 *
 * @package parcel
 */
?>
<!-- wp:group {"className":"parcel-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group parcel-section" style="padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:group {"className":"parcel-visit-band","layout":{"type":"default"}} -->
	<div class="wp-block-group parcel-visit-band">

		<!-- Hours + address -->
		<!-- wp:group {"layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|5"}}} -->
		<div class="wp-block-group">

			<!-- wp:paragraph {"className":"is-style-parcel-eyebrow"} -->
			<p class="is-style-parcel-eyebrow"><?php esc_html_e( 'Visit', 'parcel' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'Hours and location', 'parcel' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:group {"className":"parcel-hours-row","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group parcel-hours-row">
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
				<p style="font-weight:700"><?php esc_html_e( 'Monday – Friday', 'parcel' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:spacer {"className":"is-style-parcel-menu-leader","height":"1px"} -->
				<div style="height:1px" aria-hidden="true" class="wp-block-spacer is-style-parcel-menu-leader"></div>
				<!-- /wp:spacer -->
				<!-- wp:paragraph -->
				<p><?php esc_html_e( '7:00am – 5:00pm', 'parcel' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"parcel-hours-row","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group parcel-hours-row">
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
				<p style="font-weight:700"><?php esc_html_e( 'Saturday – Sunday', 'parcel' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:spacer {"className":"is-style-parcel-menu-leader","height":"1px"} -->
				<div style="height:1px" aria-hidden="true" class="wp-block-spacer is-style-parcel-menu-leader"></div>
				<!-- /wp:spacer -->
				<!-- wp:paragraph -->
				<p><?php esc_html_e( '8:00am – 4:00pm', 'parcel' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"parcel-hours-row","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group parcel-hours-row">
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}}} -->
				<p style="font-weight:700"><?php esc_html_e( 'Closed', 'parcel' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:spacer {"className":"is-style-parcel-menu-leader","height":"1px"} -->
				<div style="height:1px" aria-hidden="true" class="wp-block-spacer is-style-parcel-menu-leader"></div>
				<!-- /wp:spacer -->
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Major holidays', 'parcel' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|4"}}}} -->
			<p style="margin-top:var(--wp--preset--spacing--4)"><?php esc_html_e( '214 Mill Street, unit 2 — street parking after 9am.', 'parcel' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->

		<!-- Order-ahead card -->
		<!-- wp:group {"className":"is-style-parcel-card","layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
		<div class="wp-block-group is-style-parcel-card">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"italic"}}} -->
			<h3 class="wp-block-heading"><?php esc_html_e( 'Skip the line', 'parcel' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Order ahead and we’ll have it ready at the counter, no waiting required.', 'parcel' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Order ahead', 'parcel' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
			<!-- wp:paragraph {"fontSize":"sm","style":{"color":{"text":"var:preset|color|ink-muted"}}} -->
			<p class="has-ink-muted-color has-text-color has-sm-font-size"><?php esc_html_e( 'Or call ahead: (555) 019-2244', 'parcel' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
