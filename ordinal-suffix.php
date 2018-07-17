<?php

// Add Ordinal Suffix to Number ( th, st, nd or rd )

function ordinal( $number = 0 ) {
	
	if ( !$number ) return $number;

    $suffix	= array( 'th', 'st', 'nd', 'rd', 'th', 'th', 'th', 'th', 'th', 'th' );
    if ( ( ( $number % 100 ) >= 11 ) && ( ( $number % 100 ) <= 13 ) )
        return $number . 'th';
    else
        return $number . $suffix[ $number % 10 ];
	
}

echo ordinal( 100 );

?>