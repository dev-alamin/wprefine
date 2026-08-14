<?php
/**
 * Title: Feature Strip
 * Slug: wprefine/feature-strip
 * Categories: wprefine
 * Description: Three floating feature cards that overlap the hero section.
 * Keywords: features, cards
 */
?>
<!-- wp:group {"tagName":"section","className":"feat-strip","layout":{"type":"constrained"}} -->
<section class="wp-block-group feat-strip">
	<!-- wp:group {"className":"feat-grid","layout":{"type":"default"}} -->
	<div class="wp-block-group feat-grid">

		<!-- wp:group {"className":"feat-card","layout":{"type":"default"}} -->
		<div class="wp-block-group feat-card">
			<!-- wp:paragraph {"className":"feat-icon blue"} -->
			<p class="feat-icon blue">⚡</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Scale-Ready Performance</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Redis object caching, Varnish reverse proxy, and surgical database index tuning keep your checkout instant under heavy traffic bursts.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"feat-card","layout":{"type":"default"}} -->
		<div class="wp-block-group feat-card">
			<!-- wp:paragraph {"className":"feat-icon indigo"} -->
			<p class="feat-icon indigo">🛡️</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Linux-Level Security Hardening</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>We don't just install a plugin. We harden the OS, PHP configuration, and WordPress core to block attacks before they ever reach your application layer.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"feat-card","layout":{"type":"default"}} -->
		<div class="wp-block-group feat-card">
			<!-- wp:paragraph {"className":"feat-icon emerald"} -->
			<p class="feat-icon emerald">🛠️</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Real Engineering Support</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Allocated developer hours for custom bug fixes, REST API integrations, and WooCommerce extensions. No generic support queues, ever.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
