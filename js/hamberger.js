jQuery( function( $ ) {
	$( ".p-hamberger" ).on( "click", function() {
			$( ".c-btn__cross" ).toggleClass( "is-opencross" );
			$( ".c-hamburger__header" ).toggleClass( "is-open" );
	} );
	
} );