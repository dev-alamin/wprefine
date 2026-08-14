<?php
/**
 * Title: Why WPRefine
 * Slug: wprefine/why-section
 * Categories: wprefine
 * Description: Two-column section with a terminal-style visual on one side and a checklist with CTA on the other.
 * Keywords: why, benefits, terminal
 */
?>
<!-- wp:group {"tagName":"section","className":"why-section","anchor":"services","layout":{"type":"constrained"}} -->
<section class="wp-block-group why-section" id="services">
	<!-- wp:group {"className":"why-inner","layout":{"type":"default"}} -->
	<div class="wp-block-group why-inner">

		<!-- wp:group {"className":"why-visual","layout":{"type":"default"}} -->
		<div class="wp-block-group why-visual">
			<!-- wp:group {"className":"why-bg-card","layout":{"type":"default"}} -->
			<div class="wp-block-group why-bg-card">
				<!-- wp:group {"className":"terminal-bar","layout":{"type":"default"}} -->
				<div class="wp-block-group terminal-bar">
					<!-- wp:paragraph {"className":"terminal-dot td-red"} --><p class="terminal-dot td-red"></p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"terminal-dot td-yellow"} --><p class="terminal-dot td-yellow"></p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"terminal-dot td-green"} --><p class="terminal-dot td-green"></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"className":"terminal-body"} -->
				<p class="terminal-body">
					<span class="t-line"><span class="t-prompt">$ </span><span class="t-cmd">wp refine audit --deep</span></span><br>
					<span class="t-line" style="color:#475569;">─────────────────────────────</span><br>
					<span class="t-line"><span class="t-ok">✔</span> PHP 8.3 OpCache <span class="t-val">enabled</span></span><br>
					<span class="t-line"><span class="t-ok">✔</span> Redis object cache <span class="t-val">active</span></span><br>
					<span class="t-line"><span class="t-warn">⚠</span> wp_options autoload <span class="t-val">14.2 MB</span></span><br>
					<span class="t-line"><span class="t-warn">⚠</span> Missing index on <span class="t-val">order_meta</span></span><br>
					<span class="t-line" style="color:#475569;">─────────────────────────────</span><br>
					<span class="t-line t-comment"># Running WooCommerce query profiler…</span><br>
					<span class="t-line"><span class="t-ok">✔</span> Cart AJAX <span class="t-val">180ms → 42ms</span></span><br>
					<span class="t-line"><span class="t-ok">✔</span> Checkout page <span class="t-val">3.1s → 0.9s</span></span><br>
					<span class="t-line" style="color:#475569;">─────────────────────────────</span><br>
					<span class="t-line t-comment"># Staging deploy complete. Testing…</span><br>
					<span class="t-line"><span class="t-ok">✔</span> Regression suite <span class="t-val">PASSED (48/48)</span></span><br>
					<span class="t-line"><span class="t-ok">✔</span> Pushing to production.</span>
				</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"metric-badge top-right","layout":{"type":"default"}} -->
			<div class="wp-block-group metric-badge top-right">
				<!-- wp:paragraph {"className":"metric-badge-icon"} --><p class="metric-badge-icon">📈</p><!-- /wp:paragraph -->
				<!-- wp:paragraph --><p><strong>3.4×</strong><span>Faster Checkout</span></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"metric-badge bot-left","layout":{"type":"default"}} -->
			<div class="wp-block-group metric-badge bot-left">
				<!-- wp:paragraph {"className":"metric-badge-icon"} --><p class="metric-badge-icon">🔒</p><!-- /wp:paragraph -->
				<!-- wp:paragraph --><p><strong>0</strong><span>Breaches on Pro Plan</span></p><!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"why-content wpr-reveal-text","layout":{"type":"default"}} -->
		<div class="wp-block-group why-content wpr-reveal-text">
			<!-- wp:paragraph {"className":"section-badge"} -->
			<p class="section-badge"><span>🔬</span><span class="t-label">Engineering-first approach</span></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading">The last maintenance service your store will ever need.</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Most maintenance plans are glorified cron jobs. We provide hands-on engineering: profiling every slow query, hardening every attack surface, and testing every update before it goes live.</p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"className":"why-list"} -->
			<ul class="why-list">
				<!-- wp:list-item --><li>Staging environment regression testing before every production push</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>Server-level tuning: PHP-FPM pools, MySQL InnoDB buffer, Nginx fastcgi</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>WooCommerce-specific database optimization: order table indexing, autoload cleanup</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>Real PHP developers on call — not outsourced ticket handlers</li><!-- /wp:list-item -->
				<!-- wp:list-item --><li>60-second uptime monitoring with immediate engineer notification</li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-fill"} -->
				<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="#contact">Start With a Free Audit →</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
