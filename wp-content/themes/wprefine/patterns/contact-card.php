<?php
/**
 * Title: Dark Contact & Consultation Card
 * Slug: wprefine/contact-card
 * Categories: wprefine
 * Description: High-converting consultation form card with trust points, executive profile, and budget selectors.
 * Keywords: contact, lead form, cta, consultation, booking
 */
?>
<!-- wp:group {"tagName":"section","className":"wpr-contact-card-section","anchor":"get-in-touch","layout":{"type":"constrained"}} -->
<section class="wp-block-group wpr-contact-card-section" id="get-in-touch">

    <div class="wpr-contact-card-inner">
        <!-- Ambient Glow Background Effects -->
        <div class="ambient-glow glow-top-right"></div>
        <div class="ambient-glow glow-bottom-left"></div>

        <div class="wpr-contact-grid">
            
            <!-- Left Column: Value Prop & Profile -->
            <div class="wpr-contact-left wpr-reveal-text">
                <span class="wpr-contact-badge">Claim a $499 Consultation, on Us!</span>

                <h2 class="wpr-contact-title">
                   Bullet-proof your WooCommerce store <span class="italic-text">At No Cost!</span>
                </h2>

                <ul class="wpr-contact-benefits">
                    <li>
                        <span class="check-icon">✓</span>
                        <span>Expect a response from us within 24 hours</span>
                    </li>
                    <li>
                        <span class="check-icon">✓</span>
                        <span>We’re happy to provide a report of your request.</span>
                    </li>
                    <li>
                        <span class="check-icon">✓</span>
                        <span>Get access to a team of dedicated engineers.</span>
                    </li>
                </ul>

                <!-- Profile Box -->
                <div class="wpr-contact-profile">
                    <div class="profile-avatar">
                        <img src="https://avatars.githubusercontent.com/u/39478413?s=400&u=990c34bfcbd047c1710ccab0b53815b657be2cc9&v=4" alt="Executive Profile" />
                    </div>
                    <div class="profile-details">
                        <h3 class="profile-name">Al Amin</h3>
                        <p class="profile-role">CTO @WPRefine</p>
                        
                        <div class="profile-actions">
                            <a href="https://wa.me/01743909015" class="direct-link">
                                <span class="wa-icon">💬</span> +88 (017) 909015
                            </a>
                            <a href="#" class="call-link">Book a Call Directly</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Interactive Form -->
            <div class="wpr-contact-right wpr-reveal">
                <?php echo do_shortcode('[fluentform id="3"]'); ?>
            </div>

        </div>
    </div>

</section>
<!-- /wp:group -->