<?php
/**
 * Title: Services Deep Dive
 * Slug: wprefine/services-grid
 * Categories: wprefine
 * Description: Six-card grid detailing each service with tag chips.
 * Keywords: services, cards, grid
 */
if ( ! function_exists( 'wprefine_service_card' ) ) :
function wprefine_service_card( $icon, $title, $desc, $tags ) {
	$tags_html = '';
	foreach ( $tags as $tag ) {
		$tags_html .= '<!-- wp:paragraph {"className":"service-tag"} --><p class="service-tag">' . esc_html( $tag ) . '</p><!-- /wp:paragraph -->';
	}
	return '<!-- wp:group {"className":"service-card","layout":{"type":"default"}} -->
<div class="wp-block-group service-card">
	<!-- wp:paragraph {"className":"service-icon"} --><p class="service-icon">' . $icon . '</p><!-- /wp:paragraph -->
	<!-- wp:heading {"level":3} --><h3 class="wp-block-heading">' . esc_html( $title ) . '</h3><!-- /wp:heading -->
	<!-- wp:paragraph --><p>' . $desc . '</p><!-- /wp:paragraph -->
	<!-- wp:group {"className":"service-tags","layout":{"type":"default"}} -->
	<div class="wp-block-group service-tags">' . $tags_html . '</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->';
}
endif;
?>
<!-- wp:group {"tagName":"section","className":"services-section","layout":{"type":"constrained"}} -->
<section class="wp-block-group services-section">
	<!-- wp:group {"className":"services-header wpr-reveal-text","layout":{"type":"constrained"}} -->
	<div class="wp-block-group services-header wpr-reveal-text">
		<!-- wp:paragraph {"className":"section-badge"} -->
		<p class="section-badge"><span>🧰</span><span class="t-label">What we do</span></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Every layer of your stack, covered.</h2><!-- /wp:heading -->
		<!-- wp:paragraph --><p>We operate across the full WordPress engineering spectrum — from Linux kernel to React front-ends.</p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"services-grid","layout":{"type":"default"}} -->
	<div class="wp-block-group services-grid">
		<?php
		echo wprefine_service_card( '🚀', 'Performance Optimization', 'Redis, Varnish, PHP OpCache tuning, image delivery via CDN, critical CSS extraction, and WooCommerce-specific query rewrites.', array( 'Redis', 'Varnish', 'OpCache', 'CDN' ) );
		echo wprefine_service_card( '🛡️', 'Security Hardening', 'Linux firewall rules, PHP disable_functions hardening, WordPress file permission lockdown, brute-force protection, and WAF configuration.', array( 'UFW / CSF', 'Wordfence', 'PHP Hardening' ) );
		echo wprefine_service_card( '🗄️', 'Database Engineering', 'InnoDB tuning, WooCommerce order table indexing, autoload cleanup, transient flushing, and scheduled maintenance routines.', array( 'MySQL / MariaDB', 'WC Tables', 'wp_options' ) );
		echo wprefine_service_card( '🔄', 'Managed Updates', 'Staging-first update workflows with full regression suites. We test checkout, payment APIs, and custom logic before every merge to production.', array( 'Staging', 'Regression', 'Zero Downtime' ) );
		echo wprefine_service_card( '💾', 'Backup &amp; Recovery', 'Daily encrypted off-site backups to geographically separate storage, 1-click restore, and point-in-time recovery for Pro plan stores.', array( 'Daily Backups', 'Off-site S3', '1-click Restore' ) );
		echo wprefine_service_card( '👨‍💻', 'Developer Hours', 'Allocated engineering time for custom plugin maintenance, WooCommerce extension work, REST API integrations, and bespoke PHP or React development.', array( 'PHP', 'React', 'WooCommerce', 'REST API' ) );
		?>
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
