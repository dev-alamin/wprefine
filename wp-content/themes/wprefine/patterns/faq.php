<?php
/**
 * Title: FAQ Accordion
 * Slug: wprefine/faq
 * Categories: wprefine
 * Description: Custom-styled FAQ accordion (opened/closed via assets/js/wprefine.js) with matching FAQPage schema, generated from a single source of truth.
 * Keywords: faq, accordion, questions
 */

if ( ! function_exists( 'wprefine_faq_item' ) ) :
	function wprefine_faq_item( $q, $a ) {
		return '<!-- wp:group {"className":"faq-item","layout":{"type":"default"}} -->
<div class="wp-block-group faq-item">
	<!-- wp:group {"tagName":"button","className":"faq-q","layout":{"type":"default"}} -->
	<button class="wp-block-group faq-q">
		<!-- wp:paragraph --><p>' . esc_html( $q ) . '</p><!-- /wp:paragraph -->
		<!-- wp:paragraph {"className":"faq-chevron"} --><p class="faq-chevron">▾</p><!-- /wp:paragraph -->
	</button>
	<!-- /wp:group -->
	<!-- wp:group {"className":"faq-a","layout":{"type":"default"}} -->
	<div class="wp-block-group faq-a">
		<!-- wp:paragraph --><p>' . esc_html( $a ) . '</p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->';
	}
endif;

/**
 * Single source of truth for both the visible accordion and the
 * FAQPage schema below. Edit this array only — everything else
 * (markup + JSON-LD) is derived from it, so the two can never drift
 * out of sync.
 */
$wprefine_faqs = array(
	array(
		'q' => 'Why not just use a $20/month maintenance plan?',
		'a' => "Generic plans run automated scripts. They don't profile your database, don't understand WooCommerce's order table structure, and don't write custom server-side rules. We provide hands-on engineering — the kind of work that actually moves performance metrics and prevents breaches.",
	),
	array(
		'q' => 'How do you handle updates without breaking my store?',
		'a' => 'We never update on your live server. First, we clone your environment to a staging server. We apply all updates there, then run a regression suite that tests checkout, payment processing, cart logic, and your custom functionality. Only after every test passes do we push to production — typically during low-traffic hours.',
	),
	array(
		'q' => 'Do you work with custom plugins and themes?',
		'a' => "Yes — this is one of our core differentiators. We're PHP and React engineers. We can maintain, debug, and extend bespoke codebases that standard \"site builder\" services are not qualified to touch. Our Pro plan includes 3 hours of developer time per month specifically for this kind of work.",
	),
	array(
		'q' => 'What happens if my site goes down at 2am?',
		'a' => 'Our monitoring pings your site every 60 seconds, 24 hours a day. The moment downtime is detected, our on-call engineers are alerted immediately. Pro plan members receive priority emergency response — meaning a qualified engineer begins actively working on the incident, not just acknowledging a ticket.',
	),
	array(
		'q' => 'Is hosting included in your plans?',
		'a' => "We are a management and engineering service, not a hosting reseller. We work with your existing host's infrastructure, or if needed, we can recommend and configure a high-performance hosting environment (Kinsta, RunCloud + DigitalOcean, etc.) optimized for WooCommerce at scale.",
	),
	array(
		'q' => 'What does the hack cleanup guarantee actually cover?',
		'a' => 'For sites on our Pro plan, if your site is compromised while under our active management, we will perform a full forensic cleanup and restore at no additional cost. Our proactive hardening is designed to make this unnecessary — but the guarantee exists as your safety net.',
	),
	array(
		'q' => 'Can I cancel anytime?',
		'a' => 'Absolutely. All plans are month-to-month with no long-term contracts. We operate on the principle that we need to earn your trust every single month through measurable results — not through legal lock-in.',
	),
);

/**
 * Print the FAQPage JSON-LD once per request, in wp_footer — never as
 * literal markup inside post_content, so it can't be stripped by
 * wp_kses_post() when a page gets saved in the editor, and it can't
 * end up duplicated if this pattern is inserted more than once on the
 * same page.
 */
if ( ! function_exists( 'wprefine_output_faq_schema' ) ) :
	function wprefine_output_faq_schema( $faqs ) {
		static $already_printed = false;
		if ( $already_printed ) {
			return;
		}
		$already_printed = true;

		add_action(
			'wp_footer',
			function () use ( $faqs ) {
				$schema = array(
					'@context'   => 'https://schema.org',
					'@type'      => 'FAQPage',
					'mainEntity' => array_map(
						function ( $faq ) {
							return array(
								'@type'          => 'Question',
								'name'           => wp_strip_all_tags( $faq['q'] ),
								'acceptedAnswer' => array(
									'@type' => 'Answer',
									'text'  => wp_strip_all_tags( $faq['a'] ),
								),
							);
						},
						$faqs
					),
				);

				echo '<script type="application/ld+json">'
					. wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE )
					. '</script>' . "\n";
			}
		);
	}
endif;

wprefine_output_faq_schema( $wprefine_faqs );
?>
<!-- wp:group {"tagName":"section","className":"faq-section","anchor":"faq","layout":{"type":"constrained"}} -->
<section class="wp-block-group faq-section" id="faq">
	<!-- wp:group {"className":"faq-header wpr-reveal-text","layout":{"type":"constrained"}} -->
	<div class="wp-block-group faq-header wpr-reveal-text">
		<!-- wp:paragraph {"className":"section-badge"} -->
		<p class="section-badge"><span>❓</span><span class="t-label">Common questions</span></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Everything you need to know.</h2><!-- /wp:heading -->
		<!-- wp:paragraph --><p>Still have questions? Email us at hello@wprefine.com — a real engineer will reply.</p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"faq-list","layout":{"type":"default"}} -->
	<div class="wp-block-group faq-list">
		<?php
		foreach ( $wprefine_faqs as $faq ) {
			echo wprefine_faq_item( $faq['q'], $faq['a'] );
		}
		?>
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->