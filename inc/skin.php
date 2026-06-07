<?php
/**
 * [SKIN] Parcel — menus, image crops, font preloads, block styles, pattern categories.
 *
 * This is the one PHP file the colophon CLI never overwrites. All Parcel-specific
 * hooks live here, not in functions.php.
 *
 * @package parcel
 */

namespace Parcel;

defined( 'ABSPATH' ) || exit;
// Opt this theme into GitHub-release self-updates (see inc/github-updater.php).
add_filter( 'parcel/github_updater_repo', static function (): string {{
	return 'thisismyurl/parcel';
}} );

// =========================================================================
// SETUP — additional menus
// =========================================================================

/**
 * Register Parcel-specific navigation menus.
 */
function skin_setup(): void {
	register_nav_menus(
		array(
			'social' => esc_html__( 'Social Links', 'parcel' ),
		)
	);
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\skin_setup' );

// =========================================================================
// IMAGE SIZES
// =========================================================================

/**
 * Register Parcel image sizes for the block editor and REST API.
 */
function skin_image_sizes(): void {
	add_image_size( 'parcel-hero', 1440, 720, true );  // 2:1 hero section.
	add_image_size( 'parcel-product', 600, 450, true );  // 4:3 product image.
	add_image_size( 'parcel-feature', 780, 520, true );  // 3:2 feature image.
	add_image_size( 'parcel-thumb', 400, 300, true );  // 4:3 thumbnail grid.
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\skin_image_sizes' );

/**
 * Expose Parcel image sizes in the block-editor media library.
 *
 * @param array<string, string> $sizes Existing size labels.
 * @return array<string, string>
 */
function skin_image_size_names( array $sizes ): array {
	return array_merge(
		$sizes,
		array(
			'parcel-hero'    => esc_html__( 'Parcel Hero (1440×720)', 'parcel' ),
			'parcel-product' => esc_html__( 'Parcel Product (600×450)', 'parcel' ),
			'parcel-feature' => esc_html__( 'Parcel Feature (780×520)', 'parcel' ),
			'parcel-thumb'   => esc_html__( 'Parcel Thumb (400×300)', 'parcel' ),
		)
	);
}
add_filter( 'image_size_names_choose', __NAMESPACE__ . '\\skin_image_size_names' );

// =========================================================================
// FONT PRELOADS
// =========================================================================

add_filter(
	'parcel/preload_fonts',
	static function ( array $fonts ): array {
		$fonts[] = 'assets/fonts/syne/syne-variable.woff2';
		return $fonts;
	}
);

// =========================================================================
// BLOCK STYLES
// =========================================================================

/**
 * Register Parcel-specific block style variations.
 */
function skin_block_styles(): void {

	// Group: product card — white card, subtle shadow, hover lift.
	register_block_style(
		'core/group',
		array(
			'name'  => 'parcel-product-card',
			'label' => __( 'Product Card', 'parcel' ),
		)
	);

	// Group: feature strip — horizontal bar, brand-orange left border.
	register_block_style(
		'core/group',
		array(
			'name'  => 'parcel-feature-strip',
			'label' => __( 'Feature Strip', 'parcel' ),
		)
	);

	// Group: pricing tier card — outlined card with bold price display.
	register_block_style(
		'core/group',
		array(
			'name'  => 'parcel-tier',
			'label' => __( 'Pricing Tier', 'parcel' ),
		)
	);

	// Group: review card — customer quote with star rating space.
	register_block_style(
		'core/group',
		array(
			'name'  => 'parcel-review-card',
			'label' => __( 'Review Card', 'parcel' ),
		)
	);

	// Paragraph: badge/label — Syne, uppercase, brand-orange background pill.
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'parcel-badge',
			'label' => __( 'Badge', 'parcel' ),
		)
	);

	// Buttons: primary CTA style — brand-orange, Syne bold, full-width mobile.
	register_block_style(
		'core/buttons',
		array(
			'name'  => 'parcel-cta-primary',
			'label' => __( 'Primary CTA', 'parcel' ),
		)
	);

	// Image: unboxing frame — slight border + caption treatment.
	register_block_style(
		'core/image',
		array(
			'name'  => 'parcel-unboxing',
			'label' => __( 'Unboxing', 'parcel' ),
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\\skin_block_styles' );

// =========================================================================
// PATTERN CATEGORIES
// =========================================================================

/**
 * Register Parcel block pattern categories.
 */
function skin_pattern_categories(): void {
	$categories = array(
		'parcel-hero'         => array(
			'label'       => __( 'Parcel: Hero', 'parcel' ),
			'description' => __( 'Product hero sections and unboxing reveals.', 'parcel' ),
		),
		'parcel-features'     => array(
			'label'       => __( 'Parcel: Features', 'parcel' ),
			'description' => __( 'Product feature highlights and benefit strips.', 'parcel' ),
		),
		'parcel-pricing'      => array(
			'label'       => __( 'Parcel: Pricing', 'parcel' ),
			'description' => __( 'Pricing tiers, subscription plans, and offer blocks.', 'parcel' ),
		),
		'parcel-social-proof' => array(
			'label'       => __( 'Parcel: Social Proof', 'parcel' ),
			'description' => __( 'Customer reviews, testimonials, and trust badges.', 'parcel' ),
		),
		'parcel-cta'          => array(
			'label'       => __( 'Parcel: Calls to Action', 'parcel' ),
			'description' => __( 'Conversion CTA and subscription sign-up patterns.', 'parcel' ),
		),
	);
	foreach ( $categories as $cat_slug => $args ) {
		register_block_pattern_category( $cat_slug, $args );
	}
}
add_action( 'init', __NAMESPACE__ . '\\skin_pattern_categories' );
