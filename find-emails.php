<?php

// Find Emails Address in Text

function find_emails( $string ) {
	
	$regex = '/\S+@\S+\.\S+/';
	preg_match_all( $regex, $string, $emails,  PREG_PATTERN_ORDER );
	return $emails[0];
	
}
 
$string	= "Lorem ipsum dolor sit@gmail.com amet, consectetur adipiscing elit, sed do@gmail.com eiusmod tempor incididunt ut labore et dolore magna aliqua.";
 
$filter	= find_emails( $string );	// Get Array of Emails

print_r( $filter );

/*

 OUTPUT:
 
 Array
 (
    [0] => sit@gmail.com
    [1] => do@gmail.com
 )

 */

?>