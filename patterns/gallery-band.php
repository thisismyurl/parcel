<?php
/**
 * Title: Counter Gallery
 * Slug: parcel/gallery-band
 * Categories: parcel-community
 * Viewport Width: 1280
 * Inserter: true
 * Description: An Instagram-style four-across photo grid — the counter, the roast, the crowd, the bake — for showing the shop's daily texture rather than staged product shots.
 *
 * @package parcel
 */

?>
<!-- wp:group {"className":"parcel-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group parcel-section" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:paragraph {"align":"center","className":"is-style-parcel-eyebrow","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
	<p class="is-style-parcel-eyebrow has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--5)"><?php esc_html_e( 'From the counter', 'parcel' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"className":"parcel-gallery-grid","layout":{"type":"default"}} -->
	<div class="wp-block-group parcel-gallery-grid">
		<!-- wp:image {"sizeSlug":"parcel-gallery","style":{"border":{"radius":"0.5rem"}}} -->
		<figure class="wp-block-image size-parcel-gallery has-custom-border"><img src="" alt="<?php esc_attr_e( 'Steam rising off a fresh espresso shot', 'parcel' ); ?>" style="border-radius:0.5rem" /></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"parcel-gallery","style":{"border":{"radius":"0.5rem"}}} -->
		<figure class="wp-block-image size-parcel-gallery has-custom-border"><img src="" alt="<?php esc_attr_e( 'Trays of proofed dough waiting for the oven', 'parcel' ); ?>" style="border-radius:0.5rem" /></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"parcel-gallery","style":{"border":{"radius":"0.5rem"}}} -->
		<figure class="wp-block-image size-parcel-gallery has-custom-border"><img src="" alt="<?php esc_attr_e( 'A full counter at Saturday morning rush', 'parcel' ); ?>" style="border-radius:0.5rem" /></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"parcel-gallery","style":{"border":{"radius":"0.5rem"}}} -->
		<figure class="wp-block-image size-parcel-gallery has-custom-border"><img src="" alt="<?php esc_attr_e( 'Fresh-roasted beans cooling in the tray', 'parcel' ); ?>" style="border-radius:0.5rem" /></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
