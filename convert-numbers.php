<?php

// Convert Farsi ( Persian ), English and Arabic Numbers

if ( !class_exists( 'convert_numbers' ) ) {
	
	class convert_numbers {
		
		private $arabic_numbers		= array( '٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩', '٫' );
		private $farsi_numbers		= array( '۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹', '٫' );
		private $english_numbers	= array( '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '.');
		
		private $string				= '';
		
		public function __construct( $string = '' ) {
			$this->string = $string;
		}
		
		
		/* Set New String */
		public function set( $string = '' ) {
			$this->string = $string;
		}
		
		
		/* Get Farsi ( Persian ) Numbers */
		public function to_farsi() {
			
			$farsi	= $this->arabic_to_farsi( $this->english_to_farsi( $this->string ) );
			return $farsi;
			
		}
		
		
		/* Get Arabic Numbers */
		public function to_arabic() {
			
			$farsi	= $this->farsi_to_arabic( $this->english_to_arabic( $this->string ) );
			return $farsi;
			
		}
		
		
		/* Get English Numbers */
		public function to_english() {
			
			$farsi	= $this->arabic_to_english( $this->farsi_to_english( $this->string ) );
			return $farsi;
			
		}
		
		
		/* Convert Arabic to Farsi ( Persian ) */
		private function arabic_to_farsi( $string = '' ) {
			if ( empty( $string ) )	$string = $this->string;
			return str_replace( $this->arabic_numbers, $this->farsi_numbers, $string );
		}
		
		
		/* Convert Farsi ( Persian ) to Arabic */
		private function farsi_to_arabic( $string = '' ) {
			if ( empty( $string ) )	$string = $this->string;
			return str_replace( $this->farsi_numbers, $this->arabic_numbers, $string );
		}
		
		
		/* Convert English to Farsi ( Persian ) */
		private function english_to_farsi( $string = '' ) {
			if ( empty( $string ) )	$string = $this->string;
			return str_replace( $this->english_numbers, $this->farsi_numbers, $string );
		}
		
		
		/* Convert Farsi ( Persian ) to English */
		private function farsi_to_english( $string = '' ) {
			if ( empty( $string ) )	$string = $this->string;
			return str_replace( $this->farsi_numbers, $this->english_numbers, $string );
		}
		
		
		/* Convert English to Arabic */
		private function english_to_arabic( $string = '' ) {
			if ( empty( $string ) )	$string = $this->string;
			return str_replace( $this->english_numbers, $this->arabic_numbers, $string );
		}
		
		
		/* Convert Arabic to English */
		private function arabic_to_english( $string = '' ) {
			if ( empty( $string ) )	$string = $this->string;
			return str_replace( $this->arabic_numbers, $this->english_numbers, $string );
		}
		
		
	}
	
}


// Samples

$convert_numbers	= new convert_numbers( '2018-07-18' );
echo $convert_numbers->to_farsi();		// ۲۰۱۸-۰۷-۱۸
echo $convert_numbers->to_arabic();		// ٢٠١٨-٠٧-١٨

$convert_numbers->set( '١٤٣٩/١١/٠٤' );	// Set Arabic String
echo $convert_numbers->to_farsi();		// ۱۴۳۹/۱۱/۰۴
echo $convert_numbers->to_english();	// 1439/11/04

$convert_numbers->set( '۱۳۹۷/۰۴/۲۷' );	// Set Farsi String
echo $convert_numbers->to_arabic();		// ١٣٩٧/٠٤/٢٧
echo $convert_numbers->to_english();	// 1397/04/27

?>