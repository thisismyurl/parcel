=== Parcel ===
Contributors: thisismyurl
Requires at least: 7.0
Tested up to: 7.1
Requires PHP: 8.1
Stable tag: 1.6265.1630
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
* WCAG 2.2 AA accessibility — skip link, visible focus, sensible heading order, prefers-reduced-motion honoured globally. Every accent text usage is measured against WCAG 1.4.3: terracotta is a surface and large-display colour, terracotta-deep is the small-text cut (see the ratio table in assets/css/skin.css).
* Core Web Vitals discipline — self-hosted fonts, font-display: swap, LCP font preloaded, no render-blocking requests.
* Six-layer CSS cascade (reset, base, layout, components, blocks, utilities).
* WP-CLI — wp parcel version, info, flush.
* Hooks at every extension point — filters for content_width, register_nav_menus, preload_fonts, copyright_date_format, copyright_text, publication_date_format and onboarding_capability; actions after setup, register_image_sizes, register_block_styles and register_pattern_categories.
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

Yes. Masthead, Quillwork, Ligature, and Selvedge are each built on the same Colophon core: copied and re-skinned with their own type families, palettes, and template personalities. Each theme is standalone; installing Colophon is not required to use Parcel. GUIDE.md, included in the theme folder, describes how to build your own theme in the same way.

= Can I add a different typeface? =

Yes. Add your font files to assets/fonts/, declare them in theme.json under settings.typography.fontFamilies, and assign them in Styles inside the Site Editor.

= Does this theme work with WooCommerce? =

Baseline support is declared (product gallery zoom, lightbox, and slider). Parcel doesn't ship custom WooCommerce templates — a block theme without any resolves to WooCommerce's own block-based templates automatically, inheriting Parcel's palette and type through theme.json. If you're running a full storefront, review WooCommerce's own template documentation for anything beyond the basics.

== Installation ==

1. In your WordPress admin, go to Appearance > Themes > Add New.
2. Click Upload Theme, choose the Parcel .zip, and click Install Now.
3. Click Activate.
4. Visit Appearance > Parcel: Get started for setup guidance.

To build your own theme on Colophon, see GUIDE.md in the theme folder.

== Changelog ==

= 1.6265.1630 =
Synced two fixes from Colophon core (1.6265.1620), found during independent
wp-expert reviews of Kerf and Halyard, since this theme was still running
the pre-fix core:

* inc/bindings.php now registers the {slug}/footer-credit block-bindings
  source that parts/footer.html has bound its credit line to since the line
  existed. The source was never registered anywhere in the collection, so
  the credit rendered as an empty paragraph in every footer. functions.php
  also gained the file_exists() guard on the WP-CLI require that a separate
  regression had dropped.
* theme.json's h1/h2 styles had the same --2xl/--3xl kebab-case bug described above. Corrected.
* settings.typography.defaultFontSizes and
  settings.spacing.defaultSpacingSizes set to false, matching the rest of the
  collection, so the editor's own auto-generated presets stop merging with
  this theme's own curated set.

= 1.6162.1430 =
* Full re-skin from the Colophon starter core: Fraunces + DM Sans self-hosted OFL fonts, roast-and-cream palette (12 tokens, WCAG-checked).
* New signature feature: the dot-leader Menu Board pattern (is-style-parcel-menu-leader on core/spacer), reused in the footer and Hours & Location hours rows.
* Eight new patterns: hero, feature-grid, menu-board, promo-band, visit-us, testimonials, our-story, gallery-band.
* New block styles: parcel-menu-leader, parcel-menu-price, parcel-eyebrow, parcel-lead, parcel-card, parcel-price-tag, parcel-feature-circle, parcel-annotation.
* New image crop sizes: parcel-hero (4:5), parcel-feature (1:1), parcel-gallery (1:1), parcel-story (3:4).
* Rewrote front-page, page, single, archive, index, and 404 templates for the storefront design; renamed all skin CSS classes and block styles from the generic cl- prefix to parcel-.
* Fixed the footer's copyright line to bind to the real parcel/copyright source (was pointing at the unrelated colophon/ namespace, inherited unedited from the starter core). The separate credit line bound to a source no theme in this line actually registers (parcel/footer-credit); removed it rather than point it at a filter that doesn't exist.
* editor-style.css rewritten to mirror the new pull-quote, eyebrow, menu-leader, and card treatments.
* Accessibility: measured every accent pairing and split the accent in two. terracotta (4.25:1 on paper, 3.80:1 on paper-soft) failed WCAG 1.4.3 wherever it carried small text, so eyebrow labels, category terms, and link hover now use terracotta-deep — the same hue at 85% value, 5.52:1 on paper and 4.94:1 on paper-soft. terracotta keeps every surface, button, badge, border, and focus-ring role unchanged.
* Fixed block markup that did not match its own block attributes and would have shown as "unexpected or invalid content" on first edit: the hero and our-story media-text blocks (imageFill with no image, a hand-written padding style on the content column, a missing vertical-alignment class), headings and paragraphs carrying a colour without has-text-color, spacing nested outside style, and paragraphs carrying a textAlign attribute core/paragraph does not have.
* Fixed four templates that referenced a "line" colour slug this palette has never had; they now bind to rule, the token they were always meant to use.
* The search, singular, author, and attachment templates lost their id="main-content" anchor on any re-save, because the id lived in the markup but not in the block attributes. Both now agree.
* The blog index shipped without an h1 — core/query-title renders nothing on is_home(). It now binds its heading to the posts page's own title.
* The 404 "back to home" button no longer hardcodes "/", which is the wrong URL on a subdirectory install.

= 1.0.0 =
* Initial release from the shared Colophon starter core.

== Copyright ==

Parcel WordPress Theme, (C) 2026 Christopher Ross.
Parcel is distributed under the terms of the GNU General Public License v2 or later.

Fraunces, (C) 2018 The Fraunces Project Authors (https://github.com/undercasetype/Fraunces).
Fraunces is distributed under the SIL Open Font License 1.1.

DM Sans, (C) 2014 The DM Sans Project Authors (https://github.com/googlefonts/dm-fonts).
DM Sans is distributed under the SIL Open Font License 1.1.
