# WPRefine — Block Theme

A full-site-editing (FSE) WordPress block theme built from the wprefine.com
landing page template, broken into editable blocks and patterns instead of
one static PHP file.

## What changed vs. the original static template

- The single `<style>` block became `assets/css/wprefine.css`. All selectors
  that were scoped to `#wpr` are now scoped to `.wprefine-page`, a class
  added to `<body>` site-wide via `functions.php` (`wprefine_body_class()`)
  — so no wrapper `<div>` is needed in the markup itself.
- Fonts (Space Grotesk, DM Sans) and the accordion/scroll-in JS are enqueued
  properly via `wp_enqueue_style()` / `wp_enqueue_script()` instead of an
  inline `<style>`/`<script>` tag.
- Design tokens (colors, gradients, font families, content width) are
  registered in `theme.json` so they show up in the block editor's color
  and typography pickers, in addition to being available as the original
  CSS custom properties.

## Structure

```
wprefine/
├── style.css                 Theme header (name, version, etc.)
├── theme.json                Global styles & design tokens
├── functions.php             Enqueues, pattern category, body class
├── assets/
│   ├── css/wprefine.css      All the original component CSS, re-scoped
│   └── js/wprefine.js        FAQ accordion + scroll-in animation
├── templates/
│   ├── front-page.html       Assembles every pattern below, in order
│   ├── index.html            Blog listing (posts loop)
│   ├── single.html           Single post
│   └── page.html             Generic page
├── parts/
│   ├── header.html           Sticky nav for interior pages
│   └── footer.html           Site footer
└── patterns/                 One file per homepage section
    ├── hero.php               Hero + overlaid transparent nav
    ├── feature-strip.php      3 floating feature cards
    ├── trusted-by.php         Client "logos" row
    ├── why-section.php        Terminal mockup + checklist
    ├── process-steps.php      4-step "how it works"
    ├── services-grid.php      6-card services grid
    ├── pricing.php             3-tier pricing table
    ├── testimonials.php       3 client quote cards
    ├── faq.php                Accordion FAQ
    └── cta.php                Closing call-to-action
```

Every pattern is registered automatically — WordPress scans the
`/patterns` directory for files with a `Title:`/`Slug:` header comment,
no manual `register_block_pattern()` calls needed.

## Installing

1. Zip the `wprefine` folder (or use the zip already provided) and upload
   it via **Appearance → Themes → Add New → Upload Theme**, or drop the
   unzipped folder into `wp-content/themes/`.
2. Activate the theme.
3. In **Appearance → Editor → Pages → Front Page**, confirm it's using
   `front-page.html` — it already includes all ten patterns in order.
4. Set a **Static homepage** in **Settings → Reading** if `front-page.html`
   isn't picked up automatically (it should be, since it's a recognized
   FSE template slug).
5. Each pattern is fully editable in the Site Editor — text, buttons,
   pricing figures, FAQ copy, and testimonials can all be changed inline,
   and individual card/step/tier groups can be duplicated or reordered
   like any other block.

## Notes / things you'll likely want to adjust

- `parts/header.html` uses `<!-- wp:navigation -->`, which needs a menu
  assigned in **Appearance → Editor → Navigation** (or it'll fall back to
  a page list).
- The hero's nav (inside `patterns/hero.php`) also uses `<!-- wp:navigation -->`
  for the same reason — assign the same menu there.
- Icons are plain emoji (⚡🛡️🚀 etc.), matching the original design; swap
  for an icon block/SVG library if you'd rather not ship emoji in production.
- `functions.php` currently loads fonts from Google Fonts CDN, same as the
  original `@import`. Swap for locally-hosted `.woff2` files under
  `assets/fonts/` and a `fontFace` entry in `theme.json` if you want to
  drop the external request.
