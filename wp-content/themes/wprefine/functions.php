<?php
/**
 * WPRefine theme functions.
 *
 * @package WPRefine
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'WPREFINE_VERSION', '1.0.0' );

/**
 * Cache-busting version for an asset: the file's last-modified time.
 * Means CSS/JS edits are picked up immediately instead of being served
 * from a stale browser/proxy cache keyed on a static version string.
 */
function wprefine_asset_version( $relative_path ) {
	$file = get_theme_file_path( $relative_path );
	return file_exists( $file ) ? filemtime( $file ) : WPREFINE_VERSION;
}

/**
 * Theme setup.
 */
function wprefine_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

	add_editor_style( array(
		'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap',
		'assets/css/wprefine.css',
	) );
}
add_action( 'after_setup_theme', 'wprefine_setup' );

/**
 * Enqueue front-end fonts, styles and scripts.
 */
function wprefine_enqueue_assets() {
	wp_enqueue_style(
		'wprefine-fonts',
		'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'wprefine-style',
		get_theme_file_uri( 'assets/css/wprefine.css' ),
		array(),
		wprefine_asset_version( 'assets/css/wprefine.css' )
	);

	wp_enqueue_script(
		'wprefine-script',
		get_theme_file_uri( 'assets/js/wprefine.js' ),
		array(),
		wprefine_asset_version( 'assets/js/wprefine.js' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'wprefine_enqueue_assets' );

/**
 * Register the custom block pattern category so all WPRefine
 * section patterns are grouped together in the pattern inserter.
 */
function wprefine_register_pattern_categories() {
	register_block_pattern_category(
		'wprefine',
		array( 'label' => __( 'WPRefine Sections', 'wprefine' ) )
	);
}
add_action( 'init', 'wprefine_register_pattern_categories' );

/**
 * Add the `wprefine-page` scoping class to <body>.
 *
 * assets/css/wprefine.css targets every selector as a descendant of
 * `.wprefine-page`, mirroring the `#wpr` wrapper from the original
 * static template — but applied to <body> instead of a group block,
 * so no extra wrapper markup is needed inside each pattern.
 */
function wprefine_body_class( $classes ) {
	$classes[] = 'wprefine-page';
	return $classes;
}
add_filter( 'body_class', 'wprefine_body_class' );

/**
 * Graceful degradation for the scroll-reveal system: .wpr-reveal,
 * .wpr-reveal-text, and the card types all start at opacity:0 in CSS
 * and are only revealed by assets/js/wprefine.js. If JS never runs
 * (disabled, blocked, fails to load), force everything visible instead
 * of leaving the page permanently blank in those spots.
 */
function wprefine_noscript_reveal_fallback() {
	echo '<noscript><style>.wprefine-page .wpr-reveal, .wprefine-page .wpr-reveal-text, .wprefine-page .feat-card, .wprefine-page .service-card, .wprefine-page .testi-card, .wprefine-page .price-card { opacity: 1 !important; transform: none !important; }</style></noscript>';
}
add_action( 'wp_head', 'wprefine_noscript_reveal_fallback' );

// Add case study CPT
require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Lightweight breadcrumb trail.
 *
 * Registered as the [wpr_breadcrumbs] shortcode so block templates
 * (page.html, single.html, archive-service.html, etc.) can drop it in
 * with a plain wp:shortcode block — no custom block/render-callback
 * plumbing required. Skipped entirely on the front page.
 */
function wprefine_breadcrumbs_shortcode() {
	if ( is_front_page() ) {
		return '';
	}

	$trail = array(
		array( 'url' => home_url( '/' ), 'label' => 'Home' ),
	);

	if ( is_singular( 'service' ) ) {
		$trail[] = array( 'url' => get_post_type_archive_link( 'service' ), 'label' => 'Services' );
		$trail[] = array( 'url' => '', 'label' => get_the_title() );
	} elseif ( is_singular( 'case_study' ) ) {
		$trail[] = array( 'url' => get_post_type_archive_link( 'case_study' ), 'label' => 'Case Studies' );
		$trail[] = array( 'url' => '', 'label' => get_the_title() );
	} elseif ( is_singular( 'post' ) ) {
		$trail[] = array( 'url' => get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/blogs/' ), 'label' => 'Blog' );
		$trail[] = array( 'url' => '', 'label' => get_the_title() );
	} elseif ( is_page() ) {
		$ancestors = array_reverse( get_post_ancestors( get_the_ID() ) );
		foreach ( $ancestors as $ancestor_id ) {
			$trail[] = array( 'url' => get_permalink( $ancestor_id ), 'label' => get_the_title( $ancestor_id ) );
		}
		$trail[] = array( 'url' => '', 'label' => get_the_title() );
	} elseif ( is_post_type_archive( 'service' ) ) {
		$trail[] = array( 'url' => '', 'label' => 'Services' );
	} elseif ( is_post_type_archive( 'case_study' ) ) {
		$trail[] = array( 'url' => '', 'label' => 'Case Studies' );
	} elseif ( is_home() ) {
		$trail[] = array( 'url' => '', 'label' => 'Blog' );
	} elseif ( is_search() ) {
		$trail[] = array( 'url' => '', 'label' => 'Search results for “' . get_search_query() . '”' );
	} elseif ( is_404() ) {
		$trail[] = array( 'url' => '', 'label' => 'Page not found' );
	} else {
		$trail[] = array( 'url' => '', 'label' => wp_get_document_title() );
	}

	$items = array();
	$last  = count( $trail ) - 1;
	foreach ( $trail as $i => $crumb ) {
		if ( $i === $last || empty( $crumb['url'] ) ) {
			$items[] = '<span class="wpr-crumb-current" aria-current="page">' . esc_html( $crumb['label'] ) . '</span>';
		} else {
			$items[] = '<a href="' . esc_url( $crumb['url'] ) . '">' . esc_html( $crumb['label'] ) . '</a><span class="wpr-crumb-sep">/</span>';
		}
	}

	return '<nav class="wpr-breadcrumbs" aria-label="Breadcrumb"><div class="wpr-breadcrumbs-inner">' . implode( '', $items ) . '</div></nav>';
}
add_shortcode( 'wpr_breadcrumbs', 'wprefine_breadcrumbs_shortcode' );