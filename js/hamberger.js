jQuery( function( $ ) {
	$( ".p-hamberger" ).on( "click", function() {
			$( ".c-btn__cross" ).toggleClass( "is-opencross" );
			$( ".c-hamburger__header" ).toggleClass( "is-open" );
			$( ".c-hamburger__side" ).toggleClass( "is-open" );
	} );
	
} );