(function( $ ) {
	var offset = 300, // browser window scroll (in pixels) after which the "back to top" link is shown
		scrollTopDuration = parseInt( wpToTopVars.scrollDuration ), // duration of the top scrolling animation (in ms)
		wpToTop = $( '.wp-to-top' ) // grab the "wp to top" link
	;

	if ( ! scrollTopDuration ) {
		scrollTopDuration = 700;
	}

	// hide or show the "wp to top" link
	$(window).scroll( function() {
		if ( $( this ).scrollTop() > offset ) {
			wpToTop.addClass( 'wp-to-top-is-visible' ) ; 
		}
		else { 
			wpToTop.removeClass( 'wp-to-top-is-visible wp-to-top-fade-out' );
		}
	});

	// smooth scroll to top
	wpToTop.on( 'click' , function(e){
		e.preventDefault();
		$( 'body, html' ).animate({
				scrollTop: 0
		 	}, 
		 	scrollTopDuration
		);
	});
})( jQuery );