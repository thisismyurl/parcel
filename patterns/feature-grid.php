<?php
/**
 * Title: What We're Known For
 * Slug: parcel/feature-grid
 * Categories: parcel-storefront
 * Viewport Width: 1280
 * Inserter: true
 * Description: A centred section header above a four-column circular-photo grid — the craft specifics (single-origin pour-over, barrel-aged cold brew, wood-fired pastry, local sourcing) instead of a generic "features" list.
 *
 * @package parcel
 */
?>
<!-- wp:group {"className":"parcel-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group parcel-section" style="padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"600px","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"},"margin":{"bottom":"var:preset|spacing|10"}}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--10);text-align:center">
		<!-- wp:paragraph {"className":"is-style-parcel-eyebrow","style":{"textAlign":"center"}} -->
		<p class="is-style-parcel-eyebrow has-text-align-center"><?php esc_html_e( 'Why regulars keep coming back', 'parcel' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"textAlign":"center"} -->
		<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'What we’re known for', 'parcel' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"parcel-feature-grid","layout":{"type":"default"}} -->
	<div class="wp-block-group parcel-feature-grid">

		<!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
		<div class="wp-block-group" style="text-align:center">
			<!-- wp:image {"sizeSlug":"parcel-feature","className":"is-style-parcel-feature-circle","align":"center"} -->
			<figure class="wp-block-image aligncenter size-parcel-feature is-style-parcel-feature-circle"><img src="" alt="<?php esc_attr_e( 'A slow pour-over dripping through a paper filter', 'parcel' ); ?>" /></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":4,"textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} -->
			<h4 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--3)"><?php esc_html_e( 'Single-origin pour-over', 'parcel' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","fontSize":"sm","style":{"color":{"text":"var:preset|color|ink-muted"}},"textAlign":"center"} -->
			<p class="has-text-align-center has-ink-muted-color has-text-color has-sm-font-size"><?php esc_html_e( 'Brewed to order, one cup at a time, from beans roasted within the week.', 'parcel' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
		<div class="wp-block-group" style="text-align:center">
			<!-- wp:image {"sizeSlug":"parcel-feature","className":"is-style-parcel-feature-circle","align":"center"} -->
			<figure class="wp-block-image aligncenter size-parcel-feature is-style-parcel-feature-circle"><img src="" alt="<?php esc_attr_e( 'A glass of cold brew coffee over ice on a wooden bar', 'parcel' ); ?>" /></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":4,"textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} -->
			<h4 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--3)"><?php esc_html_e( 'Barrel-aged cold brew', 'parcel' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","fontSize":"sm","style":{"color":{"text":"var:preset|color|ink-muted"}},"textAlign":"center"} -->
			<p class="has-text-align-center has-ink-muted-color has-text-color has-sm-font-size"><?php esc_html_e( 'Steeped eighteen hours, finished in a whiskey barrel for three days.', 'parcel' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
		<div class="wp-block-group" style="text-align:center">
			<!-- wp:image {"sizeSlug":"parcel-feature","className":"is-style-parcel-feature-circle","align":"center"} -->
			<figure class="wp-block-image aligncenter size-parcel-feature is-style-parcel-feature-circle"><img src="" alt="<?php esc_attr_e( 'A loaf of sourdough bread cooling on a rack', 'parcel' ); ?>" /></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":4,"textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} -->
			<h4 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--3)"><?php esc_html_e( 'Wood-fired pastry', 'parcel' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","fontSize":"sm","style":{"color":{"text":"var:preset|color|ink-muted"}},"textAlign":"center"} -->
			<p class="has-text-align-center has-ink-muted-color has-text-color has-sm-font-size"><?php esc_html_e( 'Laminated dough, hearth-baked before the doors open at seven.', 'parcel' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|3"}}} -->
		<div class="wp-block-group" style="text-align:center">
			<!-- wp:image {"sizeSlug":"parcel-feature","className":"is-style-parcel-feature-circle","align":"center"} -->
			<figure class="wp-block-image aligncenter size-parcel-feature is-style-parcel-feature-circle"><img src="" alt="<?php esc_attr_e( 'Burlap sacks of green coffee beans stacked in a storeroom', 'parcel' ); ?>" /></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":4,"textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} -->
			<h4 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--3)"><?php esc_html_e( 'Sourced within 60 miles', 'parcel' ); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","fontSize":"sm","style":{"color":{"text":"var:preset|color|ink-muted"}},"textAlign":"center"} -->
			<p class="has-text-align-center has-ink-muted-color has-text-color has-sm-font-size"><?php esc_html_e( 'Flour, eggs, and dairy from farms we can drive to before opening.', 'parcel' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
