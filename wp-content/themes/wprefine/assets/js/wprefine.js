( function () {
	'use strict';

	document.addEventListener( 'DOMContentLoaded', function () {

		// FAQ accordion
		document.querySelectorAll( '.wprefine-page .faq-q' ).forEach( function ( btn ) {
			btn.addEventListener( 'click', function () {
				var item = this.closest( '.faq-item' );
				var isOpen = item.classList.contains( 'open' );
				item.parentElement.querySelectorAll( '.faq-item.open' ).forEach( function ( el ) {
					el.classList.remove( 'open' );
				} );
				if ( ! isOpen ) {
					item.classList.add( 'open' );
				}
			} );
		} );

		// Smooth scroll for in-page anchor links
		document.querySelectorAll( '.wprefine-page a[href^="#"]' ).forEach( function ( a ) {
			a.addEventListener( 'click', function ( e ) {
				var hash = this.getAttribute( 'href' );
				if ( hash.length < 2 ) {
					return;
				}
				var target = document.querySelector( hash );
				if ( target ) {
					e.preventDefault();
					target.scrollIntoView( { behavior: 'smooth', block: 'start' } );
				}
			} );
		} );

		// Scroll-triggered reveal: cards, section headers, and individual text blocks.
		// Elements start hidden via CSS (.wpr-reveal, .wpr-reveal-text, .feat-card,
		// .service-card, .testi-card, .price-card) and this observer adds .is-visible
		// once they scroll into view. See the noscript fallback in functions.php for
		// visitors without JS.
		var revealElements = document.querySelectorAll(
			'.wpr-reveal, .wpr-reveal-text, .feat-card, .service-card, .testi-card, .price-card'
		);

		if ( 'IntersectionObserver' in window ) {
			var revealObserver = new IntersectionObserver( function ( entries, observer ) {
				entries.forEach( function ( entry ) {
					if ( entry.isIntersecting ) {
						entry.target.classList.add( 'is-visible' );
						observer.unobserve( entry.target );
					}
				} );
			}, {
				threshold: 0.15,
				rootMargin: '0px 0px -50px 0px'
			} );

			revealElements.forEach( function ( el ) {
				revealObserver.observe( el );
			} );
		} else {
			// No IntersectionObserver support: just show everything immediately.
			revealElements.forEach( function ( el ) {
				el.classList.add( 'is-visible' );
			} );
		}
	} );
} )();
