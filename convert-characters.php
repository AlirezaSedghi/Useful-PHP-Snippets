<?php

// Convert Arabic Characters To Farsi ( Persian )

function arabic_to_farsi( $string = '' ) {
	
	$arabic_characters	= array( 'ة', 'ك', 'دِ', 'بِ', 'زِ', 'ذِ', 'شِ', 'سِ', 'ى', 'ي', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩', '٠' );
	$farsi_characters	= array( 'ه', 'ک', 'د', 'ب', 'ز', 'ذ', 'ش', 'س', 'ی', 'ی', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹', '۰' );

	return str_replace( $arabic_characters, $farsi_characters, $string );
	
}


// Convert Farsi ( Persian ) Characters To Arabic

function farsi_to_arabic( $string = '' ) {
	
	$farsi_characters	= array( 'ه', 'ک', 'د', 'ب', 'ز', 'ذ', 'ش', 'س', 'ی', 'ی', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹', '۰' );
	$arabic_characters	= array( 'ة', 'ك', 'دِ', 'بِ', 'زِ', 'ذِ', 'شِ', 'سِ', 'ى', 'ي', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩', '٠' );

	return str_replace( $farsi_characters, $arabic_characters, $string );
	
}

?>