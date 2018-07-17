<?php

// Multi language Seconds to String

function seconds_to_string( $secs = 0, $lang = 'english' ) {
	
	$days		= '';
	$hours		= '';
	$minutes	= '';
	$r			= '';
	
	// Words Array for Multi language Response
	$english	= array( 'plural' => 's', 'separator' => ', ', 's' => 'second', 'm' => 'minute', 'h' => 'hour', 'd' => 'day' );
	$persian	= array( 'plural' => '', 'separator' => ' و ', 's' => 'ثانیه', 'm' => 'دقیقه', 'h' => 'ساعت', 'd' => 'روز' );
	$language	= $english;
	if ( isset( ${$lang} ) )
		$language	= ${$lang};
	
	
	if ( $secs >= 86400 ) {
		$days	= floor( $secs / 86400 );
		$secs	= $secs % 86400;
		$r		= $days . ' ' . $language['d'];
		if ( $days <> 1 )
			$r	.= $language['plural'];
		if ( $secs > 0 )
			$r	.= $language['separator'];
	}
	if ( $secs >= 3600 ) {
		$hours	= floor( $secs / 3600 );
		$secs	= $secs % 3600;
		$r		.= $hours . ' ' . $language['h'];
		if ( $hours <> 1 )
			$r	.= $language['plural'];
		if ( $secs > 0 )
			$r	.= $language['separator'];
	}
	if ( $secs >= 60 ) {
		$minutes	= floor( $secs / 60 );
		$secs		= $secs % 60;
		$r			.= $minutes . ' ' . $language['m'];
		if ( $minutes <> 1 )
			$r		.= $language['plural'];
		if ( $secs > 0 )
			$r		.= $language['separator'];
	}
	
	$r	.= $secs . ' ' . $language['s'];
	if ( $secs <> 1 )
		$r	.= $language['plural'];
	
	return $r;
	
}

echo seconds_to_string( 12345 ) . "<br/>" . seconds_to_string( 12345, 'persian' );

?>