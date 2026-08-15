<?php
/**
 * Title: Hero
 * Slug: wprefine/hero
 * Categories: wprefine
 * Description: Dark gradient hero section with animated background orbs, headline, CTA buttons and a social-proof stat bar. Nav lives in parts/header.html and is shared by every template.
 * Keywords: hero
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"tagName":"section","className":"hero","layout":{"type":"constrained"}} -->
<section class="wp-block-group hero">

	<!-- wp:group {"className":"hero-grid","layout":{"type":"default"}} -->
	<div class="wp-block-group hero-grid"></div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"hero-inner","layout":{"type":"constrained"}} -->
	<div class="wp-block-group hero-inner">

		<!-- wp:paragraph {"className":"hero-eyebrow"} -->
		<p class="hero-eyebrow"><span class="hero-eyebrow-dot"></span>WordPress Engineering — Not Just Maintenance</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"className":"t-display"} -->
		<h1 class="wp-block-heading t-display wpr-reveal">Your WooCommerce Store<br><span class="grad-text">Engineered to Scale.</span></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p class="wpr-reveal-text">Expert-led performance engineering for stores that have outgrown basic hosting. We optimize, harden, and scale your entire tech stack — at the server level.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"className":"hero-btns"} -->
		<div class="wp-block-buttons hero-btns">
			<!-- wp:button {"className":"is-style-fill btn-lg"} -->
			<div class="wp-block-button is-style-fill btn-lg"><a class="wp-block-button__link wp-element-button" href="#pricing">View Plans →</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline btn-lg"} -->
			<div class="wp-block-button is-style-outline btn-lg"><a class="wp-block-button__link wp-element-button" href="/free-audit/">Get Free Audit</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

		<!-- wp:group {"className":"hero-proof","layout":{"type":"default"}} -->
		<div class="wp-block-group hero-proof">

			<!-- wp:group {"className":"proof-stat","layout":{"type":"default"}} -->
			<div class="wp-block-group proof-stat">
				<!-- wp:paragraph -->
				<p><strong>99.98%</strong><span>Uptime Delivered</span></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:spacer {"className":"proof-divider","width":"1px","height":"40px"} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer proof-divider"></div>
			<!-- /wp:spacer -->

			<!-- wp:group {"className":"proof-stat","layout":{"type":"default"}} -->
			<div class="wp-block-group proof-stat">
				<!-- wp:paragraph -->
				<p><strong>3.2×</strong><span>Avg. Speed Lift</span></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:spacer {"className":"proof-divider","width":"1px","height":"40px"} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer proof-divider"></div>
			<!-- /wp:spacer -->

			<!-- wp:group {"className":"proof-stat","layout":{"type":"default"}} -->
			<div class="wp-block-group proof-stat">
				<!-- wp:paragraph -->
				<p><strong>0</strong><span>Hacks on Pro Plan</span></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:spacer {"className":"proof-divider","width":"1px","height":"40px"} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer proof-divider"></div>
			<!-- /wp:spacer -->

			<!-- wp:group {"className":"proof-stat","layout":{"type":"default"}} -->
			<div class="wp-block-group proof-stat">
				<!-- wp:paragraph -->
				<p><strong>60s</strong><span>Monitoring Interval</span></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
