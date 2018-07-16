<?php

// Get the Current Page URL

function page_URL() {
	
	// Set Protocol
	if ( isset( $_SERVER["HTTPS"] ) && !empty( $_SERVER["HTTPS"] ) && ( $_SERVER["HTTPS"] != 'on' ) ) {
		$url = 'https://' . $_SERVER["SERVER_NAME"];
	} else {
		$url = 'http://' . $_SERVER["SERVER_NAME"];
	}
	
	// Add Port
	if ( ( $_SERVER["SERVER_PORT"] != 80 ) ) {
		$url .= $_SERVER["SERVER_PORT"];
	}
	
	// Build URL
	$url .= $_SERVER["REQUEST_URI"];
	return $url;
	
}
 
echo page_URL();

?>