<?php
/**
 * Title: Pricing Table
 * Slug: wprefine/pricing
 * Categories: wprefine
 * Description: Three-tier dark pricing section with a featured "Pro" card.
 * Keywords: pricing, plans, table
 */
?>
<!-- wp:group {"tagName":"section","className":"pricing-section","anchor":"pricing","layout":{"type":"constrained"}} -->
<section class="wp-block-group pricing-section" id="pricing">
	<!-- wp:group {"className":"pricing-header wpr-reveal-text","layout":{"type":"constrained"}} -->
	<div class="wp-block-group pricing-header wpr-reveal-text">
		<!-- wp:paragraph {"className":"section-badge light"} -->
		<p class="section-badge light"><span>💳</span><span class="t-label">Transparent pricing</span></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2} --><h2 class="wp-block-heading">No hidden fees. No lock-in.</h2><!-- /wp:heading -->
		<!-- wp:paragraph --><p>Month-to-month plans designed around the real complexity of WooCommerce engineering.</p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"pricing-grid","layout":{"type":"default"}} -->
	<div class="wp-block-group pricing-grid">

		<!-- wp:group {"className":"price-card","layout":{"type":"default"}} -->
		<div class="wp-block-group price-card">
			<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Standard</h3><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"price-amount"} --><p class="price-amount">$199</p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"price-period"} --><p class="price-period">per month · cancel anytime</p><!-- /wp:paragraph -->
			<!-- wp:separator {"className":"price-divider"} --><hr class="wp-block-separator price-divider"/><!-- /wp:separator -->
			<!-- wp:list {"className":"price-features"} -->
			<ul class="price-features">
				<!-- wp:list-item --><li><span class="pf-icon">✔</span> 24/7 Uptime Monitoring (60s)</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span class="pf-icon">✔</span> Staging-first safe updates</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span class="pf-icon">✔</span> Off-site daily backups</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span class="pf-icon">✔</span> Basic speed optimization</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span class="pf-icon">✔</span> Security plugin management</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span class="pf-icon muted">–</span> Redis / Varnish caching</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span class="pf-icon muted">–</span> Developer hours</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span class="pf-icon muted">–</span> Hack cleanup guarantee</li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline btn-block"} -->
			<div class="wp-block-button is-style-outline btn-block"><a class="wp-block-button__link wp-element-button" href="#contact">Get Started →</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"price-card featured","layout":{"type":"default"}} -->
		<div class="wp-block-group price-card featured">
			<!-- wp:paragraph {"className":"price-badge"} --><p class="price-badge">Most Popular</p><!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Pro Engineering</h3><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"price-amount"} --><p class="price-amount">$399</p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"price-period"} --><p class="price-period">per month · cancel anytime</p><!-- /wp:paragraph -->
			<!-- wp:separator {"className":"price-divider"} --><hr class="wp-block-separator price-divider"/><!-- /wp:separator -->
			<!-- wp:list {"className":"price-features"} -->
			<ul class="price-features">
				<!-- wp:list-item --><li><span class="pf-icon">✔</span> Everything in Standard</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span class="pf-icon">✔</span> Redis &amp; Object Caching</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span class="pf-icon">✔</span> WooCommerce DB tuning</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span class="pf-icon">✔</span> <strong>3 hrs Developer time / mo</strong></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span class="pf-icon">✔</span> Priority emergency response</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span class="pf-icon">✔</span> Hack cleanup guarantee</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span class="pf-icon">✔</span> Point-in-time DB recovery</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span class="pf-icon">✔</span> Monthly performance report</li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill btn-block btn-lg"} -->
			<div class="wp-block-button is-style-fill btn-block btn-lg"><a class="wp-block-button__link wp-element-button" href="#contact">Choose Pro →</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"price-card","layout":{"type":"default"}} -->
		<div class="wp-block-group price-card">
			<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Agency / Enterprise</h3><!-- /wp:heading -->
			<!-- wp:paragraph {"className":"price-amount"} --><p class="price-amount">Custom</p><!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"price-period"} --><p class="price-period">bespoke scope · SLA included</p><!-- /wp:paragraph -->
			<!-- wp:separator {"className":"price-divider"} --><hr class="wp-block-separator price-divider"/><!-- /wp:separator -->
			<!-- wp:list {"className":"price-features"} -->
			<ul class="price-features">
				<!-- wp:list-item --><li><span class="pf-icon">✔</span> Everything in Pro</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span class="pf-icon">✔</span> Multi-site management</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span class="pf-icon">✔</span> Dedicated engineer pod</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span class="pf-icon">✔</span> Custom SLA &amp; response time</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span class="pf-icon">✔</span> Unlimited developer hours</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span class="pf-icon">✔</span> Infrastructure architecture</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span class="pf-icon">✔</span> Quarterly strategy reviews</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><span class="pf-icon">✔</span> Slack / Teams direct access</li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill btn-block"} -->
			<div class="wp-block-button is-style-fill btn-block"><a class="wp-block-button__link wp-element-button" href="mailto:hello@wprefine.com">Contact Us →</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
