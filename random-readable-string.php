<?php

/* Human Readable Random String
 * This code will create a human readable string that will look more close to dictionary words, useful for captchas.
 */

function readable_random_string( $length = 6 ) {

    $conso	= array( "b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "r", "s", "t", "v", "w", "x", "y", "z" );
    $vowels	= array( "a", "e", "i", "o", "u" );
    $string	= "";
	
    srand( (double)microtime()*1000000 );
    $max	= $length / 2;
	
    for ( $i = 1; $i <= $max; $i++ ) {
		$string	.=$conso[rand(0,19)];
		$string	.=$vowels[rand(0,4)];
    }
	
    return $string;
	
}

echo readable_random_string( 10 );

?>