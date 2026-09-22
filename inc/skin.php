<?php
/**
 * [SKIN] The skin layer — the one PHP file `colophon sync` never overwrites.
 *
 * Parcel's PHP-side personality: image crops for the hero, the circular
 * feature grid, the gallery band and the "our story" portrait; the LCP font
 * preload (Fraunces 600, the headline weight used on every front page and
 * post title); the block styles the patterns depend on — including the
 * dot-leader menu row, this theme's signature feature (see the note on
 * parcel_skin_block_styles() below); and the pattern category registrations.
 *
 * The [CORE] inc/ files stay portable because none of Parcel's specifics
 * leak into them. That separation is the whole point of the CORE/SKIN split.
 *
 * @package parcel
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register Parcel's image crop sizes.
 *
 * Four hard crops, one per pattern that shows a photograph:
 *
 * parcel-hero: 4:5 — the portrait crop used by the hero's media-text image
 * (a latte, a loaf, a bag of beans — the shop's own photography, not stock).
 * parcel-feature: 1:1 — square crop, CSS-masked to a circle in the
 * "what we're known for" feature grid.
 * parcel-gallery: 1:1 — square crop for the Instagram-style photo band.
 * parcel-story: 3:4 — portrait crop for the "our story" media-text pattern.
 */
function parcel_skin_image_sizes(): void {
	add_image_size( 'parcel-hero', 900, 1125, true );   // 4:5 hero portrait crop.
	add_image_size( 'parcel-feature', 480, 480, true ); // 1:1, masked to a circle.
	add_image_size( 'parcel-gallery', 500, 500, true ); // 1:1 gallery grid.
	add_image_size( 'parcel-story', 700, 933, true );   // 3:4 our-story portrait.

	/**
	 * Fires after the theme registers its image crop sizes.
	 *
	 * @since 1.0.0
	 */
	do_action( PARCEL_SLUG . '/register_image_sizes' );
}
add_action( 'after_setup_theme', 'parcel_skin_image_sizes' );

/**
 * Preload Fraunces 600 — the LCP-critical font on every Parcel page.
 *
 * Fraunces 600 (upright) sets the hero h1 and every post/page title — the
 * largest-paint candidate on the front page and on every single template.
 * Only that one static weight is preloaded; the other cuts (400/500/700 and
 * the italics) load lazily as the browser discovers they're needed.
 *
 * Pillar 8 (Kodawari): preloading the exact file that paints, not the whole family.
 *
 * @param string[] $fonts Theme-root-relative WOFF2 paths.
 * @return string[] The list with Parcel's LCP font appended.
 */
function parcel_skin_preload_fonts( array $fonts ): array {
	$fonts[] = 'assets/fonts/fraunces/fraunces-600.woff2';
	return $fonts;
}
add_filter( PARCEL_SLUG . '/preload_fonts', 'parcel_skin_preload_fonts' );

// WooCommerce: parcel_woocommerce_support() in inc/setup.php already declares
// the baseline every theme in the line ships. Parcel adds nothing beyond it
// today; when it needs to (product-archive columns, cart-count styling), this
// file is where that goes — not the CORE function.

/**
 * Register Parcel's block styles.
 *
 * Block styles are the is-style-{name} vocabulary patterns and editors apply.
 * CSS treatments live in assets/css/skin.css @layer components.
 *
 * THE SIGNATURE FEATURE — the dot-leader menu row: `is-style-parcel-menu-leader`
 * (applied to core/spacer) plus the `parcel-menu-row` group layout it sits
 * inside (see patterns/menu-board.php) reproduce the dot-leader convention
 * every printed café and restaurant menu uses to walk the eye from an item
 * name to its price — a typographic device that has never shipped in a WP.org
 * theme before. A barista or baker looking at a Parcel menu recognises it
 * immediately as "someone who has actually typeset a menu." No other pattern
 * in the WP.org directory reaches for this convention; every competitor uses
 * a generic pricing-table or list block.
 *
 * WCAG NOTE on the accent. terracotta (#B75C32) is 4.25:1 against paper and
 * 3.80:1 against paper-soft — a SURFACE and large-display colour, never small
 * text. White-on-terracotta is 4.57:1, so parcel-price-tag and every button
 * label are safe at any size. Small text that needs the accent takes
 * terracotta-deep (#9C4E2A, same hue at 85% value): 5.52:1 on paper, 4.94:1
 * on paper-soft, 4.51:1 on terracotta-soft. That is what parcel-eyebrow and
 * core/post-terms use; assets/css/skin.css carries the full ratio table.
 *
 * Pillar 7 (High Agency): editors can build a full menu page without a developer.
 */
function parcel_skin_block_styles(): void {

	// [SKIN] Spacer as a dot-leader rule — the THEME'S SIGNATURE FEATURE. Sits
	// between an item name and its price inside a parcel-menu-row group,
	// producing the dotted leader line every printed café menu uses.
	register_block_style(
		'core/spacer',
		array(
			'name'  => 'parcel-menu-leader',
			'label' => __( 'Menu dot leader', 'parcel' ),
		)
	);

	// [SKIN] Paragraph as a menu item price — DM Sans 700, ink, set with
	// tabular numerals so a stacked column of prices aligns on the decimal.
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'parcel-menu-price',
			'label' => __( 'Menu price', 'parcel' ),
		)
	);

	// [SKIN] Paragraph as an eyebrow label — small, DM Sans 700, tracked,
	// uppercase, in terracotta-deep (small text, so it needs the 4.5:1 cut of
	// the accent). The label above the hero, a section header, a footer column.
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'parcel-eyebrow',
			'label' => __( 'Eyebrow label', 'parcel' ),
		)
	);

	// [SKIN] Paragraph as a lead — Fraunces italic, larger size, used as the
	// hero subhead and the intro line of the our-story pattern.
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'parcel-lead',
			'label' => __( 'Lead paragraph', 'parcel' ),
		)
	);

	// [SKIN] Group as a card — paper-soft background, soft radius, used for
	// testimonial cards and the feature-grid captions.
	register_block_style(
		'core/group',
		array(
			'name'  => 'parcel-card',
			'label' => __( 'Card', 'parcel' ),
		)
	);

	// [SKIN] Paragraph as a price tag / badge — terracotta background, white
	// text (4.57:1, safe at any size), pill radius. Used in the promo band.
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'parcel-price-tag',
			'label' => __( 'Price tag badge', 'parcel' ),
		)
	);

	// [SKIN] Image as a feature circle — square crop, CSS border-radius:50%,
	// used in the "what we're known for" grid.
	register_block_style(
		'core/image',
		array(
			'name'  => 'parcel-feature-circle',
			'label' => __( 'Feature circle', 'parcel' ),
		)
	);

	// [SKIN] Paragraph as a quiet annotation — small DM Sans, ink-muted. The
	// orienting note in empty archive/search/404 states.
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'parcel-annotation',
			'label' => __( 'Annotation note', 'parcel' ),
		)
	);

	/**
	 * Fires after the theme registers its block styles.
	 *
	 * @since 1.0.0
	 */
	do_action( PARCEL_SLUG . '/register_block_styles' );
}
add_action( 'init', 'parcel_skin_block_styles' );

/**
 * Register Parcel's block pattern categories.
 *
 * Patterns auto-register from patterns/ (WordPress 6.0+). These categories
 * give them a clear home under "Parcel: …" in the pattern library.
 */
function parcel_skin_pattern_categories(): void {

	register_block_pattern_category(
		PARCEL_SLUG . '-storefront',
		array(
			'label'       => __( 'Parcel: Storefront', 'parcel' ),
			'description' => __( 'Hero, feature grid, and promo-band patterns for the homepage.', 'parcel' ),
		)
	);

	register_block_pattern_category(
		PARCEL_SLUG . '-menu',
		array(
			'label'       => __( 'Parcel: Menu & visit', 'parcel' ),
			'description' => __( 'The menu board, hours-and-location band, and order-ahead patterns.', 'parcel' ),
		)
	);

	register_block_pattern_category(
		PARCEL_SLUG . '-community',
		array(
			'label'       => __( 'Parcel: Community', 'parcel' ),
			'description' => __( 'Testimonials, our-story, and gallery patterns.', 'parcel' ),
		)
	);

	/**
	 * Fires after the theme registers its pattern categories.
	 *
	 * @since 1.0.0
	 */
	do_action( PARCEL_SLUG . '/register_pattern_categories' );
}
add_action( 'init', 'parcel_skin_pattern_categories' );
