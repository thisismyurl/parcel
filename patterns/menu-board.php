<?php
/**
 * Title: Menu Board
 * Slug: parcel/menu-board
 * Categories: parcel-menu
 * Viewport Width: 1280
 * Inserter: true
 * Description: THE SIGNATURE FEATURE — a real menu, typeset with the dot-leader convention every printed café menu uses to walk the eye from an item name to its price. Two categories (drinks, food) side by side. No other WP.org theme ships this typographic device.
 *
 * @package parcel
 */
?>
<!-- wp:group {"className":"parcel-section parcel-band--paper-soft","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group parcel-section parcel-band--paper-soft" style="padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"600px","justifyContent":"center"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--10);text-align:center">
		<!-- wp:paragraph {"className":"is-style-parcel-eyebrow","style":{"textAlign":"center"}} -->
		<p class="is-style-parcel-eyebrow has-text-align-center"><?php esc_html_e( 'Today on the board', 'parcel' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"textAlign":"center"} -->
		<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'The menu', 'parcel' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"parcel-menu-board","layout":{"type":"default"}} -->
	<div class="wp-block-group parcel-menu-board">

		<!-- Drinks column -->
		<!-- wp:group {"className":"parcel-menu-category","layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
		<div class="wp-block-group parcel-menu-category">

			<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"italic"}}} -->
			<h3 class="wp-block-heading"><?php esc_html_e( 'Drinks', 'parcel' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:group {"className":"parcel-menu-row","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group parcel-menu-row">
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Drip coffee', 'parcel' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:spacer {"className":"is-style-parcel-menu-leader","height":"1px"} -->
				<div style="height:1px" aria-hidden="true" class="wp-block-spacer is-style-parcel-menu-leader"></div>
				<!-- /wp:spacer -->
				<!-- wp:paragraph {"className":"is-style-parcel-menu-price"} -->
				<p class="is-style-parcel-menu-price"><?php esc_html_e( '$3.25', 'parcel' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"parcel-menu-row","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group parcel-menu-row">
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Single-origin pour-over', 'parcel' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:spacer {"className":"is-style-parcel-menu-leader","height":"1px"} -->
				<div style="height:1px" aria-hidden="true" class="wp-block-spacer is-style-parcel-menu-leader"></div>
				<!-- /wp:spacer -->
				<!-- wp:paragraph {"className":"is-style-parcel-menu-price"} -->
				<p class="is-style-parcel-menu-price"><?php esc_html_e( '$5.50', 'parcel' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"parcel-menu-row","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group parcel-menu-row">
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Barrel-aged cold brew', 'parcel' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:spacer {"className":"is-style-parcel-menu-leader","height":"1px"} -->
				<div style="height:1px" aria-hidden="true" class="wp-block-spacer is-style-parcel-menu-leader"></div>
				<!-- /wp:spacer -->
				<!-- wp:paragraph {"className":"is-style-parcel-menu-price"} -->
				<p class="is-style-parcel-menu-price"><?php esc_html_e( '$5.75', 'parcel' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"parcel-menu-row","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group parcel-menu-row">
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Cardamom oat latte', 'parcel' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:spacer {"className":"is-style-parcel-menu-leader","height":"1px"} -->
				<div style="height:1px" aria-hidden="true" class="wp-block-spacer is-style-parcel-menu-leader"></div>
				<!-- /wp:spacer -->
				<!-- wp:paragraph {"className":"is-style-parcel-menu-price"} -->
				<p class="is-style-parcel-menu-price"><?php esc_html_e( '$5.95', 'parcel' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

		<!-- Food column -->
		<!-- wp:group {"className":"parcel-menu-category","layout":{"type":"default"},"style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
		<div class="wp-block-group parcel-menu-category">

			<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"italic"}}} -->
			<h3 class="wp-block-heading"><?php esc_html_e( 'From the oven', 'parcel' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:group {"className":"parcel-menu-row","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group parcel-menu-row">
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Sourdough loaf, whole', 'parcel' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:spacer {"className":"is-style-parcel-menu-leader","height":"1px"} -->
				<div style="height:1px" aria-hidden="true" class="wp-block-spacer is-style-parcel-menu-leader"></div>
				<!-- /wp:spacer -->
				<!-- wp:paragraph {"className":"is-style-parcel-menu-price"} -->
				<p class="is-style-parcel-menu-price"><?php esc_html_e( '$8.00', 'parcel' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"parcel-menu-row","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group parcel-menu-row">
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Almond croissant', 'parcel' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:spacer {"className":"is-style-parcel-menu-leader","height":"1px"} -->
				<div style="height:1px" aria-hidden="true" class="wp-block-spacer is-style-parcel-menu-leader"></div>
				<!-- /wp:spacer -->
				<!-- wp:paragraph {"className":"is-style-parcel-menu-price"} -->
				<p class="is-style-parcel-menu-price"><?php esc_html_e( '$4.75', 'parcel' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"parcel-menu-row","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group parcel-menu-row">
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Morning bun, brown butter', 'parcel' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:spacer {"className":"is-style-parcel-menu-leader","height":"1px"} -->
				<div style="height:1px" aria-hidden="true" class="wp-block-spacer is-style-parcel-menu-leader"></div>
				<!-- /wp:spacer -->
				<!-- wp:paragraph {"className":"is-style-parcel-menu-price"} -->
				<p class="is-style-parcel-menu-price"><?php esc_html_e( '$4.25', 'parcel' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"parcel-menu-row","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group parcel-menu-row">
				<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Egg and cheddar biscuit', 'parcel' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:spacer {"className":"is-style-parcel-menu-leader","height":"1px"} -->
				<div style="height:1px" aria-hidden="true" class="wp-block-spacer is-style-parcel-menu-leader"></div>
				<!-- /wp:spacer -->
				<!-- wp:paragraph {"className":"is-style-parcel-menu-price"} -->
				<p class="is-style-parcel-menu-price"><?php esc_html_e( '$6.25', 'parcel' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"className":"is-style-parcel-annotation","align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|8"}}},"textAlign":"center"} -->
	<p class="is-style-parcel-annotation has-text-align-center" style="margin-top:var(--wp--preset--spacing--8)"><?php esc_html_e( 'Full menu, seasonal specials, and dietary notes are posted at the counter and updated weekly.', 'parcel' ); ?></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
