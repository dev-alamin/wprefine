<?php
/**
 * Title: Video Testimonials Grid
 * Slug: wprefine/video-testimonials
 * Categories: wprefine
 * Description: Vertical video cards with pastel backgrounds, overlay text, play buttons, and brand logos.
 * Keywords: testimonials, video, reviews, social proof
 */
?>
<!-- wp:group {"tagName":"section","className":"wpr-vtesti-section","anchor":"video-reviews","layout":{"type":"constrained"}} -->
<section class="wp-block-group wpr-vtesti-section" id="video-reviews">

    <!-- wp:group {"className":"wpr-vtesti-header wpr-reveal-text","layout":{"type":"constrained"}} -->
    <div class="wp-block-group wpr-vtesti-header wpr-reveal-text">
        <p class="wpr-vtesti-badge"><span>💬</span> <span>VIDEO TESTIMONIALS</span></p>
        <h2 class="wp-block-heading">Loved by ambitious brands worldwide.</h2>
        <p class="wpr-vtesti-desc">Real video reviews from founders who scaled their digital products without the usual tech debt.</p>
    </div>
    <!-- /wp:group -->
    
    <!-- wp:group {"className":"wpr-vtesti-grid","layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group wpr-vtesti-grid">

        <!-- Card 1 (Blue Tone) -->
        <div class="wpr-vtesti-card bg-blue">
            <div class="wpr-vtesti-media">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=600&q=80" alt="Christian" />
                <button class="wpr-vtesti-play" aria-label="Play testimonial video">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                </button>
            </div>
            <div class="wpr-vtesti-content">
                <div class="wpr-vtesti-brand">
                    <span class="brand-name">SalesGo</span>
                </div>
                <p class="wpr-vtesti-quote">Started with an MVP and needed a scalable enterprise product. WPRefine delivered...</p>
                <div class="wpr-vtesti-author">
                    <strong class="name">Christian</strong>
                    <span class="role">Founder @ Salesgo</span>
                </div>
            </div>
        </div>

        <!-- Card 2 (Periwinkle Tone) -->
        <div class="wpr-vtesti-card bg-purple">
            <div class="wpr-vtesti-media">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=600&q=80" alt="David" />
                <button class="wpr-vtesti-play" aria-label="Play testimonial video">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                </button>
            </div>
            <div class="wpr-vtesti-content">
                <div class="wpr-vtesti-brand">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                    <span class="brand-name">externalize it</span>
                </div>
                <p class="wpr-vtesti-quote">Working with WPRefine was a fantastic experience. Their team was super clear...</p>
                <div class="wpr-vtesti-author">
                    <strong class="name">David</strong>
                    <span class="role">Founder @ Externalize It</span>
                </div>
            </div>
        </div>

        <!-- Card 3 (Yellow Tone) -->
        <div class="wpr-vtesti-card bg-yellow">
            <div class="wpr-vtesti-media">
                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=600&q=80" alt="Tommy Lu" />
                <button class="wpr-vtesti-play" aria-label="Play testimonial video">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                </button>
            </div>
            <div class="wpr-vtesti-content">
                <div class="wpr-vtesti-brand">
                    <span class="brand-name">GoodGenes</span>
                </div>
                <p class="wpr-vtesti-quote">WPRefine did an amazing job bringing my brand to life. From the overall layout to...</p>
                <div class="wpr-vtesti-author">
                    <strong class="name">Tommy Lu</strong>
                    <span class="role">Founder @ GoodGenes</span>
                </div>
            </div>
        </div>

        <!-- Card 4 (Slate Gray Tone) -->
        <div class="wpr-vtesti-card bg-gray">
            <div class="wpr-vtesti-media">
                <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?auto=format&fit=crop&w=600&q=80" alt="Ishraq Khan" />
                <button class="wpr-vtesti-play" aria-label="Play testimonial video">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
                </button>
            </div>
            <div class="wpr-vtesti-content">
                <div class="wpr-vtesti-brand">
                    <span class="brand-name"><strong>N</strong> Nurvia</span>
                </div>
                <p class="wpr-vtesti-quote">WPRefine delivered an exceptional redesign with strong product thinking...</p>
                <div class="wpr-vtesti-author">
                    <strong class="name">Ishraq Khan</strong>
                    <span class="role">Founder @ Kodezi & Nurvia</span>
                </div>
            </div>
        </div>

    </div>
    <!-- /wp:group -->

</section>
<!-- /wp:group -->