<?php
/**
 * Script Class
 *
 * Handles the script and style functionality of plugin
 *
 * @package WP Current Date Post Slider
 * @since 1.0.0
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

class Wpcdps_Script {
	
	function __construct() {
		
		// Action to add style at front side
		add_action( 'wp_enqueue_scripts', array($this, 'wpcdps_front_style') );
		
		// Action to add script at front side
		add_action( 'wp_enqueue_scripts', array($this, 'wpcdps_front_script') );	
		
	}

	/**
	 * Function to add style at front side
	 * 
	 * @package WP Current Date Post Slider
	 * @since 1.0.0
	 */
	function wpcdps_front_style() {
		
		// Registring and enqueing slick slider css
		if( !wp_style_is( 'wpos-slick-style', 'registered' ) ) {
			wp_register_style( 'wpos-slick-style', WPCDPS_URL.'assets/css/slick.css', array(), WPCDPS_VERSION );
			wp_enqueue_style( 'wpos-slick-style' );
		}
		
		// Registring and enqueing public css
		wp_register_style( 'wpcdps-public-style', WPCDPS_URL.'assets/css/recent-post-style.css', array(), WPCDPS_VERSION );
		wp_enqueue_style( 'wpcdps-public-style' );
	}
	
	/**
	 * Function to add script at front side
	 * 
	 * @package WP Current Date Post Slider
	 * @since 1.0.0
	 */
	function wpcdps_front_script() {
		
		// Registring slick slider script
		if( !wp_script_is( 'wpos-slick-jquery', 'registered' ) ) {
			wp_register_script( 'wpos-slick-jquery', WPCDPS_URL.'assets/js/slick.min.js', array('jquery'), WPCDPS_VERSION, true );
		}
		
		// Registring and enqueing public script
		wp_register_script( 'wpcdps-public-script', WPCDPS_URL.'assets/js/wpcdps-public.js', array('jquery'), WPCDPS_VERSION, true );
		wp_localize_script( 'wpcdps-public-script', 'Wpcdps', array(
																	'is_mobile' => (wp_is_mobile()) ? 1 : 0,
																	'is_rtl' 	=> (is_rtl()) 		? 1 : 0
																	));
	}
	
}

$wpcdps_script = new Wpcdps_Script();
