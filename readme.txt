=== Parcel ===
Contributors: thisismyurl
Requires at least: 7.0
Tested up to: 7.1
Requires PHP: 8.1
Stable tag: 1.6162.1430
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Tags: blog, e-commerce, one-column, two-columns, full-site-editing, block-patterns, editor-style, custom-colors, custom-logo, custom-menu, featured-images, accessibility-ready, translation-ready, rtl-language-support, wide-blocks, threaded-comments

Parcel WordPress Theme, Copyright 2026 Christopher Ross
Parcel is distributed under the terms of the GNU GPL v2 or later.

A full-site-editing theme for the small coffee roaster, bakery, or café that sells something real, in person, every day — built on the documented starter core behind the This Is My URL free theme line.

== Description ==

Parcel is for the shop, not the blog.

Every other free theme aimed at a café or roaster ships a stock hero photo, a generic "features" grid, and a pricing table borrowed from a SaaS landing page. Parcel starts from what a small food-and-beverage business actually needs on its site: a menu people can read, hours they can trust, and a way to order ahead that doesn't feel like an afterthought bolted onto a portfolio template.

The centrepiece is the Menu Board pattern, set with a dot-leader rule between each item and its price — the exact typographic convention every printed café and restaurant menu has used for a century, and one that has never shipped in a WordPress.org theme before. It isn't a pricing table dressed up; it's real menu typesetting, built from a core/spacer block styled to render as a dotted baseline rule. The same convention carries into the hours table, because a shop's hours are read the same way its prices are: a label, then a value, aligned.

The type is Fraunces for headings — a display serif with real character, not a generic script font — paired with DM Sans for body copy and UI. The palette is a restrained roast-and-cream: warm without tipping into the saturated orange every stock coffee-shop template reaches for. Terracotta is the single accent, used only where it's earned: buttons, badges, and large display text.

Eight patterns ship in the box: a media-text hero, a circular-photo feature grid for the craft specifics (single-origin pour-over, barrel-aged cold brew, wood-fired pastry, local sourcing), the menu board itself, a roast-dark promo banner for a limited-time offer, an hours-and-location band with an order-ahead card, a testimonial grid, an our-story media-text section for the roaster's or baker's background, and an Instagram-style counter gallery. Assemble a full homepage and an about/menu page without touching code.

It's also technically exacting: zero front-end JavaScript, self-hosted OFL fonts that do not phone home, WCAG 2.2 AA accessibility scaffolding, Core Web Vitals tuning, and a six-layer CSS cascade you can extend predictably. Baseline WooCommerce support is declared so a shop that's ready to sell online gets a working product gallery with no theme conflict — Parcel isn't a shop design, but "not a shop design" never means "broken shop." Every template is editable in the Site Editor. A WP-CLI command gives you version, info, and cache-flush without touching the admin.

And it is a member of a small family of free WordPress themes, each copied from the same Colophon core and re-skinned — not inherited. There is no parent/child coupling, no runtime dependency, and no Pro tier behind a gate. GUIDE.md, which ships inside the theme folder, explains how to build your own.

* Full-site editing — every template and template part editable in the Site Editor.
* The Menu Board pattern — dot-leader menu typesetting, the theme's signature feature.
* Fraunces (display) and DM Sans (body/UI) — self-hosted OFL fonts, zero third-party requests.
* Eight patterns for a real homepage: hero, feature grid, menu board, promo band, hours & location, testimonials, our story, gallery.
* Baseline WooCommerce support — product gallery zoom, lightbox, and slider work with no theme conflict.
* Zero front-end JavaScript, zero plugin dependencies.
* WCAG 2.2 AA accessibility — skip link, visible focus, sensible heading order, prefers-reduced-motion honoured globally. Every terracotta text usage is checked against WCAG 1.4.3 (see the note in assets/css/skin.css).
* Core Web Vitals discipline — self-hosted fonts, font-display: swap, LCP font preloaded, no render-blocking requests.
* Six-layer CSS cascade (reset, base, layout, components, blocks, utilities).
* WP-CLI — wp parcel version, info, flush.
* Filterable hooks at every extension point — content_width, skip_link_target, skip_link_label, register_nav_menus, copyright_date_format, register_image_sizes, register_block_styles, register_pattern_categories, onboarding_capability, footer_credit, and more.
* Translation-ready — every user-facing string is internationalised.
* RTL-ready through CSS logical properties.

== Setting up your site ==

Three touchpoints get you from an installed theme to an open storefront:

1. Settings > Reading. Choose a static front page (the Front Page template ships the full storefront pitch: hero, menu, hours, testimonials) and give your posts their own page for shop journal updates.

2. Appearance > Editor. Open Styles to see the roast-and-cream palette and type choices. Insert the Menu Board pattern on your Menu page, edit the item names and prices, and the dot leader resizes itself automatically.

3. Update the footer's hours and address (Appearance > Editor > Patterns > Footer), and set your Primary and Footer navigation menus with real links to your menu and order-ahead page.

== Frequently Asked Questions ==

= What is the dot-leader menu row, exactly? =

It's the "is-style-parcel-menu-leader" block style applied to a core/spacer block, sitting between an item name and its price inside a flex row. It renders as a dotted baseline rule that stretches to fill the available space — the same device a printed menu has always used to walk the eye from a dish to its cost. See patterns/menu-board.php.

= Does this theme contact any third-party servers? =

No. Fraunces and DM Sans are bundled as self-hosted WOFF2 files inside the theme folder. No fonts load from Google Fonts, Adobe Fonts, or any other external service. No analytics or tracking scripts are included.

= Is this related to other themes in a line? =

Yes. Masthead, Margin, Quillwork, and Selvedge are each built on the same Colophon core: copied and re-skinned with their own type families, palettes, and template personalities. Each theme is standalone; installing Colophon is not required to use Parcel. GUIDE.md, included in the theme folder, describes how to build your own theme in the same way.

= Can I add a different typeface? =

Yes. Add your font files to assets/fonts/, declare them in theme.json under settings.typography.fontFamilies, and assign them in Styles inside the Site Editor.

= Does this theme work with WooCommerce? =

Baseline support is declared (product gallery zoom, lightbox, and slider). Parcel doesn't ship custom WooCommerce templates — a block theme without any resolves to WooCommerce's own block-based templates automatically, inheriting Parcel's palette and type through theme.json. If you're running a full storefront, review WooCommerce's own template documentation for anything beyond the basics.

= How do I remove the footer credit? =

Two ways. In the Site Editor, open the Footer template part and delete the credit paragraph — takes about 30 seconds. Or, in a child theme or custom plugin, add:

  add_filter( 'parcel/footer_credit', '__return_empty_string' );

Either way. No hard feelings.

== Installation ==

1. In your WordPress admin, go to Appearance > Themes > Add New.
2. Click Upload Theme, choose the Parcel .zip, and click Install Now.
3. Click Activate.
4. Visit Appearance > Parcel: Get started for setup guidance.

To build your own theme on Colophon, see GUIDE.md in the theme folder.

== Changelog ==

= 1.6162.1430 =
* Full re-skin from the Colophon starter core: Fraunces + DM Sans self-hosted OFL fonts, roast-and-cream palette (12 tokens, WCAG-checked).
* New signature feature: the dot-leader Menu Board pattern (is-style-parcel-menu-leader on core/spacer), reused in the footer and Hours & Location hours rows.
* Eight new patterns: hero, feature-grid, menu-board, promo-band, visit-us, testimonials, our-story, gallery-band.
* New block styles: parcel-menu-leader, parcel-menu-price, parcel-eyebrow, parcel-lead, parcel-card, parcel-price-tag, parcel-feature-circle, parcel-annotation.
* New image crop sizes: parcel-hero (4:5), parcel-feature (1:1), parcel-gallery (1:1), parcel-story (3:4).
* Rewrote front-page, page, single, archive, index, and 404 templates for the storefront design; renamed all skin CSS classes and block styles from the generic cl- prefix to parcel-.
* Fixed the footer's copyright/credit block bindings to reference the parcel/copyright and parcel/footer-credit sources (were pointing at the unrelated colophon/ namespace, inherited unedited from the starter core).
* editor-style.css rewritten to mirror the new pull-quote, eyebrow, menu-leader, and card treatments.

= 1.0.0 =
* Initial release from the shared Colophon starter core.

== Copyright ==

Parcel WordPress Theme, (C) 2026 Christopher Ross.
Parcel is distributed under the terms of the GNU General Public License v2 or later.

Fraunces, (C) 2018 The Fraunces Project Authors (https://github.com/undercasetype/Fraunces).
Fraunces is distributed under the SIL Open Font License 1.1.

DM Sans, (C) 2014 The DM Sans Project Authors (https://github.com/googlefonts/dm-fonts).
DM Sans is distributed under the SIL Open Font License 1.1.
