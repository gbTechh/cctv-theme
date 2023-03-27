<?php 

/**
 * CursosQr Class
 *
 * @author   RodrigoSilva
 * @since    1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'CCTV_CSS_CUSTOM' ) ) {

class CCTV_CSS_CUSTOM {
	/**
	 * Setup class.
	 *
	 * @since 1.0
	 */
	public function __construct() {
		// Add HTML classes.
		add_filter( 'cctv_html_classes', array( $this, 'html_classes' ) );
   
	}

	public function html_classes( $classes ) {	
		return $classes;
	}
}

}

return new CCTV_CSS_CUSTOM();