=== Parcel ===

Contributors: thisismyurl
Tags: e-commerce, blog, full-site-editing, block-patterns, custom-colors, custom-logo, custom-menu, editor-style, featured-images, rtl-language-support, translation-ready, wide-blocks, sticky-post
Tested up to: 6.8
Requires at least: 6.7
Requires PHP: 7.4
Stable tag: 1.6165.0754
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A conversion-focused product theme for direct-to-consumer brands that ship.

== Description ==

A package on the doorstep is a promise kept. Parcel is built for the moment a customer opens the box and finds exactly what they were told to expect — and it brings that same feeling to the storefront. It is a conversion-focused full-site-editing theme made for subscription-box and direct-to-consumer brands that ship physical goods.

The home template opens on an unboxing hero, then leads the visitor through product-feature patterns, a review wall, and a subscription pricing tier — a path designed to turn a first visit into a first order. Syne headlines and Outfit body text create a warm, contemporary brand voice. Self-hosted SIL OFL fonts, RTL-ready via CSS logical properties, zero plugin dependencies, and a WooCommerce-compatible layout system that works with or without the plugin.

Parcel is built for subscription-box and direct-to-consumer founders who sell the story, not the cart — the storefront reads as carefully packed as the product inside, and the buy button is the last beat of the narrative, not the first.

The design follows one rule: a single high-colour zone per view. Syne sets the display voice, Outfit carries the body, and a disciplined single-orange accent does the pointing — one call to action holds the colour so the eye always knows where to go next.

== Accessibility ==

Parcel is built toward WCAG 2.2 AA with these specific measures:

* A "Skip to content" link as the first focusable element on every template,
  targeting the `#main-content` landmark.
* Visible focus outlines on links, buttons, and form controls (no `outline: none`
  without a replacement).
* Landmark structure on every template: a `banner` header, a `main` region with
  `id="main-content"`, and a footer.
* One `h1` per template and a logical heading order; query-title blocks in
  archive, search, and index templates use explicit `"level":1`.
* CSS logical properties (`margin-inline`, `padding-inline`, etc.) so layout and
  spacing follow the document's reading direction.
* A `prefers-reduced-motion` media query that removes non-essential motion.

Measured contrast on the default palette (WCAG 2.1 relative-luminance formula,
all ratios verified against actual shipped hex values):

* Ink (#1c1917) on cream (#faf9f7): 16.62:1. Exceeds AA and AAA for all text
  sizes.
* Rust (#b84d1e) on cream (#faf9f7): 4.85:1. Clears AA for normal-size text
  (4.5:1). Used for all small-text accent elements — eyebrow labels, category
  tags, and link hover states.
* Orange (#e8622a) on cream (#faf9f7): 3.21:1. Below the 4.5:1 threshold for
  normal text; used only where the size qualifies as large text under WCAG 2.2
  (18pt / 24px at normal weight, or 14pt / 18.67px bold) — the delivery-grid
  price line (Syne 700, 2rem / 32px), the price-display heading (display size),
  and the features-row icon glyph (2rem). Meets the 3:1 large-text threshold.
* Orange (#e8622a) on carbon (#1c1c1c): 5.04:1. Used for footer social links
  on the dark carbon footer background. Clears AA for normal text.
* Ink (#1c1917) on orange (#e8622a): 5.17:1. All normal-size text on an orange
  surface is dark ink, not light — button labels, the default button style, and
  the orange CTA band's body, price sub-line, and outline button. Clears AA for
  normal text. The orange fill against the adjacent light surface also meets the
  3:1 UI-component threshold (SC 1.4.11); the CTA headline and the large $39
  display remain cream as large text (>=3:1).
* Slate (#666666) on cream (#faf9f7): 5.46:1. Secondary text — post dates, meta
  labels, and h6 headings — clears AA for normal text.
* Mist (#a0a0a0) on the dark footer, ink (#1c1917) / carbon (#1c1c1c): 6.69:1 /
  6.52:1. Footer tagline, copyright, credit, and legal links. Clears AA for
  normal text.

These are the theme's structural and default-palette measures; the theme does
not carry the `accessibility-ready` tag, because the rendered result also
depends on your content. Keep your own copy, colour choices, and images to the
same bar — sufficient contrast, descriptive alt text, and meaningful link text
— to keep the site accessible.

== Compatibility ==

* WordPress 6.7+. Block bindings (the footer copyright and credit lines) require
  WordPress 6.5+; we recommend 6.7+ for full Site Editor stability.
* PHP 7.4+.
* RTL-ready — the theme styles with CSS logical properties rather than hardcoded
  `left`/`right` values, so WordPress 6.7+ handles direction conversion
  automatically. If RTL rendering looks wrong, verify WordPress 6.7+ and current
  browser support for CSS logical properties before filing an issue.

== Architecture ==

Parcel is built on the Colophon core using a CORE/SKIN split, so child-theme
authors and reviewers can tell portable infrastructure apart from theme
personality at a glance:

* CORE files — `inc/bootstrap.php`, `inc/setup.php`, `inc/assets.php`,
  `inc/bindings.php`, and `inc/admin.php` — are portable infrastructure shared
  across the theme family. They carry no theme-specific strings.
* SKIN file — `inc/skin.php` — holds everything unique to Parcel: menus, image
  crops, font preloads, block styles, and pattern categories. It is the one PHP
  file a re-skin never overwrites.

To build your own theme on this core, copy the CORE files unchanged and write a
new `inc/skin.php`. Each file is marked `[CORE]` or `[SKIN]` in its header
docblock.

Worked example — build your own skin:

1. Copy the CORE files unchanged: `inc/bootstrap.php`, `inc/setup.php`,
   `inc/assets.php`, `inc/bindings.php`, `inc/admin.php`.
2. Set your slug and version once, in `inc/bootstrap.php`:
   `const SLUG = 'myskin';` and `const VERSION = '...';`. Every binding source,
   filter, and text-domain reference derives from `SLUG`, so nothing else needs
   renaming.
3. Write a fresh `inc/skin.php` — your menus, image crops, font preloads, block
   styles, and pattern categories. This is the only PHP file that carries your
   theme's personality.
4. Replace `theme.json`, `style.css`, the `/patterns/`, and the `/templates/`
   with your own design. The CORE files keep accessibility, i18n, the footer
   bindings, and the onboarding screen working without further edits.

The split means a CORE security or accessibility fix can be pulled into every
theme in the family by re-copying the CORE files, while each skin's design stays
untouched.

== Developer Filters ==

= parcel/developer_guide_url =

Filters the URL of the "developer guide" link on the Appearance → Parcel: Get
started page. Default: `https://thisismyurl.com/colophon`. Return any URL string.
Fires from `get_started_content()` in `inc/admin.php`.

Example (PHP 7.4 compatible):

`add_filter( 'parcel/developer_guide_url', function ( $url ) {
	return 'https://example.com/my-theme-docs';
} );`

The theme exposes additional filters documented in code — `parcel/copyright_text`,
`parcel/copyright_date_format`, `parcel/footer_credit`, `parcel/onboarding_capability`,
and `parcel/get_started_content` — each with a docblock in `inc/bindings.php` or
`inc/admin.php`.

== Block Bindings ==

Parcel registers three read-only block-binding sources in `inc/bindings.php`
(WordPress 6.5+). They keep static footer and single-post chrome translatable
without hardcoding English in template parts:

* `parcel/copyright` — the footer copyright line (© year + site title).
* `parcel/footer-credit` — the filterable "Built with the Parcel theme." credit.
* `parcel/label` — fixed, translatable heading labels selected by a `key`
  argument. Used by parts/footer.html (`footer-navigate`, `footer-follow`) and
  templates/single.html (`related-stories`). An unknown key returns an empty
  string. Add a label by extending the map in `get_label_value()`.

Because these are block bindings, the footer and related-stories headings
require WordPress 6.5+ to populate; on older WordPress they render empty rather
than breaking the layout. Parcel requires WordPress 6.7+, so this is informational.

== Installation ==

1. In your WordPress admin, go to Appearance → Themes → Add New.
2. Search for "Parcel" or upload the theme zip.
3. Activate the theme.
4. Go to Appearance → Parcel: Get started for setup steps.

== Frequently Asked Questions ==

= Is this theme free? =

Yes. Licensed GPLv2 or later, with no upsells or required paid extensions.

= Does it require WooCommerce? =

No. WooCommerce is supported but not required. Parcel declares WooCommerce product-gallery support automatically when the plugin is active, but the theme works fully without it.

= How do I set up the product hero section? =

Open the Site Editor (Appearance → Editor), select the front-page template, and edit the Product Hero block pattern. Replace the placeholder image and text with your own product content.

= Are the fonts included, or do I need to download them? =

The fonts are bundled — no downloads required. Syne and Outfit are included as WOFF2 files in the assets/fonts/ directory and loaded via theme.json. They never phone home to Google or any external service.

= Is Parcel compatible with page builders? =

Parcel is a block theme built for the WordPress Site Editor. Page builders that support the block editor work alongside it; legacy drag-and-drop builders that bypass the block system are not supported.

== Changelog ==

= 1.6165.0754 =
Accessibility (WCAG 2.2 AA contrast) — full default-palette remediation:
* New accent Parcel Rust (#b84d1e) carries all normal-size accent text — eyebrow
  labels, category tags, link hover — at 4.85:1 on cream.
* All button labels and the orange CTA band's body, price sub-line, and outline
  button are dark ink (#1c1917) on orange — 5.17:1. The bright orange is retained
  for button fills, borders, icons, the focus ring, and large display type (3:1+).
* Secondary/meta text (post dates, h6, review meta) is now Parcel Slate (#666666)
  at 5.46:1 on cream; the dark footer's tagline, copyright, and credit are Parcel
  Mist (#a0a0a0) at 6.69:1 on ink.
* The readme contrast table now lists every default-palette text pair with its
  real shipped hex values and verified ratio.
Fixes:
* Replaced an undefined `warm-off` colour token (single.html) with Parcel Linen.
* Corrected an `overflow` typo in skin.css.

= 1.6164.1809 =
Internationalisation (translation-ready tag now fully supported):
* The footer column headings ("Navigate", "Follow") and the single-post
  related-stories heading ("More to Read") were static English in the block
  markup. They now bind to a new translatable `parcel/label` source, so the
  text travels through languages/parcel.pot and a non-English site renders in
  its own locale. Each heading keeps its level and styling.
* Removed the hardcoded "By" byline from the post-author block in
  parts/post-meta.html so no untranslatable English renders in post meta.
* Removed the duplicate static "Skip to content" link from parts/header.html.
  The single skip link is now the translatable PHP-rendered one
  (Parcel\skip_link(), inc/setup.php), output on wp_body_open.
* Regenerated languages/parcel.pot to cover the new strings.

Submission fixes:
* Theme URI and the footer credit link pointed at https://thisismyurl.com/parcel/,
  which returned 404. Both now use https://thisismyurl.com/ (a live URL), so the
  "Built with the Parcel theme" footer link resolves on every page.
* Registered a `parcel-navigation` pattern category so the Navigation Bar pattern
  files under "Parcel: Navigation" in the inserter instead of Uncategorized.
* Clarified the content_width comment in inc/setup.php: 720px is the reading-column
  contentSize, not the 1280px wideSize, so future readers don't mistake it for drift.
* Removed the GitHub-release self-updater (inc/github-updater.php) and its opt-in
  filter so the theme ships with no phone-home update mechanism, per the
  WordPress.org self-updater prohibition.
* Made the on-disk tree submission-clean: removed the preview/ directory (including
  its Python screenshot helper), the .github/ CI directory, README.md, and
  PILLARS.md, so a plain-folder zip passes Theme Check and SVN without relying on
  .distignore.
* Dropped the `accessibility-ready` tag from style.css and readme.txt. The theme
  keeps its honest "built toward WCAG 2.2 AA" framing and now documents measured
  default-palette contrast ratios instead of claiming formal conformance.
* Registered the `parcel-footers` pattern category so the Site Footer pattern files
  under "Parcel: Footers" instead of Uncategorized.
* Fixed the page-blank custom-template title in theme.json: "Blank canvas —
  full-bleed main" now matches the template, which keeps the header and footer.

= 1.6163.2237 =
* Requirements: corrected the stated minimums to match the code — Requires PHP 7.4
  (the PHP uses no 8.0/8.1 syntax) and Tested up to 6.8 (the previous "7.0" named a
  WordPress release that does not exist).
* Accessibility (WCAG 2.1 1.3.1): the archive and search titles are now explicit
  h1 headings; the index template gains an h1 page heading; the blank-canvas page
  template gains an empty, editor-fillable h1. (Front page and 404 already had one.)
* Internationalisation: removed the remaining hardcoded English no-results prose
  from the index and archive templates and the "Read more" excerpt link on the
  search template; the no-results states now offer a search form to retry instead.
* Template structure: the blank-canvas page template now includes the header and
  footer template parts (skip-link target and banner/contentinfo landmarks) with a
  comment documenting the full-bleed main region.
* Documentation: the Get-started accessibility line is reframed as "built toward
  WCAG 2.2 AA with specific measures … not a certification," matching readme.txt.
  Added an Architecture section describing the CORE/SKIN split.
* Accessibility (WCAG 2.1 1.3.1): the Navigation Bar pattern's brand mark is now a
  styled paragraph instead of an h1, so inserting it above a content heading no
  longer produces a duplicate h1. The front page's single h1 comes from the
  Product Hero pattern's headline; both pattern and template now document this.
* Internationalisation: removed hardcoded English visitor prose from the 404 and
  search templates (the "this page doesn't exist" explanation and the
  "nothing matched your search" line). The 404 template now uses a translatable
  query-title for its "Page not found" heading; search and home-link blocks fall
  back to their translatable core defaults rather than literal English strings.
* Documentation: the accessibility claim is reframed as specific, verifiable
  measures (skip link, focus outlines, landmarks, heading order, logical
  properties, reduced motion) rather than an unbacked "WCAG 2.2 AA" assertion.
  The RTL claim now carries a logical-properties caveat.
* Hardened comment-form attribute injection: a guarded preg_replace (single
  replacement, null-check, no-match fallback) replaces a naive str_replace that
  could double-inject or mangle markup.
* The Get started developer-guide URL is filterable via parcel/developer_guide_url,
  now documented in readme.txt with a runnable PHP 7.4-compatible example.

= 1.6148.1706 =
* Version timestamp suffix added per project versioning scheme.
* Added explicit Inserter: true header to all patterns.

= 1.6148 =
* Initial release.
* Patterns: product-hero, features-row, review-wall, subscription-cta, unboxing-reveal.
* Templates: front-page, index, single, archive, page, page-wide, page-blank, search, 404.
* Block styles: parcel-hero, parcel-feature-strip, parcel-pricing-tier, parcel-review-card, parcel-badge.

== Credits ==

= Syne =
* Copyright 2017 Bonjour Monde / Lucas Descroix (https://gitlab.com/bonjour-monde/fonderie/syne-typeface)
* License: SIL OFL 1.1 (https://openfontlicense.org/open-font-license-official-text/)
* Source: https://gitlab.com/bonjour-monde/fonderie/syne-typeface

= Outfit =
* Copyright 2021 The Outfit Project Authors (https://github.com/Outfitio/Outfit-Fonts)
* License: SIL OFL 1.1 (https://openfontlicense.org/open-font-license-official-text/)
* Source: https://github.com/Outfitio/Outfit-Fonts

== License ==

Parcel WordPress Theme is licensed under the GNU General Public License v2 or later.

This program is free software: you can redistribute it and/or modify it under the
terms of the GNU General Public License as published by the Free Software Foundation,
either version 2 of the License, or (at your option) any later version.

== Copyright ==

Parcel WordPress Theme, Copyright 2026 Christopher Ross
Parcel is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.
