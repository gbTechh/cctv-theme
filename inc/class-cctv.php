<?php
/**
 * CursosQr Class
 *
 * @author   WooThemes
 * @since    1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'CCTV' ) ) {

class CCTV {
	/**
	 * Setup class.
	 *
	 * @since 1.0
	 */
	public function __construct() {
		add_action( 'after_setup_theme', array( $this, 'setup' ), 20 );
    // add_action( 'wp_enqueue_scripts', array($this,'lucaro_dequeue_style'), 999 );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ),999 );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_action( 'body_class', array( $this, 'body_classes' ) );
	}

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	public function setup() {
		/**
		 * Remove support for full and wide align images.
		 */
		remove_theme_support( 'align-wide' );
	}

	/**
	 * Adds custom classes to the array of body classes.
	 *
	 * @param array $classes Classes for the body element.
	 * @return array
	 */
	public function body_classes( $classes ) {
		global $cursosqr_version;

		if ( version_compare( $cursosqr_version, '2.3.0', '>=' ) ) {
			$classes[] = '';
		}

		return $classes;
	}

	public function enqueue_styles() {
	
		global $cursosqr_version;
 
		wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', $cursosqr_version );
		wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/all.css', $cursosqr_version );
		wp_enqueue_style('footer-css', get_template_directory_uri() . '/css/footer.css', $cursosqr_version );
		wp_enqueue_style('style2', get_template_directory_uri() . '/css/style2.css', $cursosqr_version );
   
	}
	
	public function enqueue_scripts() {
		global $cursosqr_version;
 
		
		wp_enqueue_script('tilt', get_template_directory_uri() . '/js/til.jquery.min.js', array('jquery'), $cursosqr_version, false);
		wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper.min.js', array('jquery','tilt'), $cursosqr_version, false);
		wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'tilt', 'swiper'), $cursosqr_version, false);
		wp_enqueue_script('lib', get_template_directory_uri() . '/js/lib.js', array('jquery', 'scripts'), $cursosqr_version, false, array('defer' => 'defer'));
		wp_enqueue_script('vendor', get_template_directory_uri() . '/js/vndr.js', array('jquery','lib'), $cursosqr_version, false, array('defer' => 'defer'));
		wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js', array('jquery', 'lib','vendor'), $cursosqr_version, false, array('defer' => 'defer'));
   
	}
  
}

}

return new CCTV();