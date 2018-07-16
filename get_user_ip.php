<?php

// Get User Real IP Address

function get_user_ip() {

	if ( !empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
		return $ip=$_SERVER['HTTP_CLIENT_IP'];
	} elseif ( !empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
		return $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		return $ip=$_SERVER['REMOTE_ADDR'];
	}
	
}

echo get_user_ip();

?>