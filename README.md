# Parcel

A free, product-first full-site-editing WordPress theme for direct-to-consumer brands, subscription boxes, and product-led editorial.

[Download from WordPress.org](https://wordpress.org/themes/parcel/) · [Releases](https://github.com/thisismyurl/parcel/releases) · [Built on Colophon](https://github.com/thisismyurl/colophon)

---

## Why I built it this way

A parcel is a package on someone's doorstep. For DTC brands, that moment — when the box arrives — is the moment the relationship becomes real. Everything before it is a promise. The packaging is the product.

The challenge with WordPress themes for DTC brands is that most of them are WooCommerce themes: product grid, add-to-cart, checkout flow. That's a valid use case. Parcel isn't for that. Parcel is for the editorial and brand layer that runs alongside the product — the story of where it comes from, what it's made of, who makes it, and why the subscription exists in the first place. The cart is secondary to the story.

DTC brands live and die on photography and voice. The product hero pattern in Parcel puts a full-bleed product photograph first, with the story copy below it at a line-length that forces you to write in sentences, not bullet points. The unboxing reveal pattern is a two-column layout — product on one side, the story of what's inside on the other — built specifically for subscription box brands who need to show the contents without spoiling the surprise.

The type choice was intentional about approachability. Outfit is geometric and clean with just enough warmth in the letterforms to avoid feeling corporate. Syne is used for accent labels — the subscription tier names, the pull quotes, the call-to-action text. The combination reads as modern and friendly, which is the right register for a brand that's asking someone to commit to a recurring charge.

I deliberately left out WooCommerce hooks, product gallery templates, and cart UI. This is the brand and editorial layer. If you're running a full DTC store, you pair Parcel with WooCommerce and let WooCommerce handle the commerce templates while Parcel handles the brand story.

---

## Design decisions

- **Product hero as the primary template** — full-bleed photography, headline, two-paragraph story, single CTA. No carousel. No feature grid at the top. The product gets the first screen.
- **Unboxing reveal pattern** — two-column layout: product on the left, story on the right. Built for subscription boxes and subscription services that have a regular reveal moment.
- **Review wall pattern** — testimonial grid in a 3-column layout with star ratings, reviewer name, and quote. Keeps reviews as design elements, not an afterthought.
- **Subscription CTA pattern** — three-tier pricing table with a highlighted recommended tier. Maps to any subscription model with monthly/annual options.
- **Outfit / Syne type system** — Outfit for body and headline (approachable geometric), Syne for labels and accents (distinctive without competing). Reads as independent DTC brand, not agency-template.

---

## Getting started

1. Install Parcel from Appearance → Themes, or upload the zip from [Releases](https://github.com/thisismyurl/parcel/releases).
2. Set your brand's primary product photography as the Site Background Image or in the Product Hero pattern — photography is the theme's main design element.
3. Open the Block Inserter, choose Patterns, and find the Parcel group. Start with Product Hero for your front page and Subscription CTA for your pricing page.

---

## Technical notes

- WordPress 6.4 or newer, PHP 8.1 or newer
- Full-site editing (FSE/Gutenberg) — no Classic Editor support
- WCAG 2.2 AA compliant
- Zero JavaScript
- OFL-licensed fonts: Outfit, Syne
- Self-hosted fonts — no Google Fonts requests

## License

GPLv2 or later. See [LICENSE](LICENSE).

The fonts bundled in `assets/fonts/` are licensed under the SIL Open Font License (OFL) 1.1.
