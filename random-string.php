<?php

// Generate a Random String

function random_string( $length = 6 ) {

    $conso	= "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    $vowels	= array( "a", "e", "i", "o", "u" );
    $string	= "";
	
    srand( (double)microtime()*1000000 );
	
    for ( $i = 1; $i <= $length; $i++ ) {
		$string	.=$conso[rand()%strlen( $conso )];
    }
	
    return $string;
	
}

echo random_string( 10 );

?>