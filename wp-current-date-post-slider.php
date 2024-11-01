<?php
/**
 * Plugin Name: WP Current Date Post Slider
 * Plugin URI: http://www.wponlinesupport.com/plugins
 * Text Domain: wp-current-date-post-slider
 * Domain Path: /languages/
 * Description: Easy to display  Posts Slider on the  Current date.  
 * Author: WP OnlineSupport
 * Version: 1.0
 * Author URI: http://www.wponlinesupport.com/
 *
 * @package WordPress
 * @author WP OnlineSupport
 */

/**
 * Basic plugin definitions
 * 
 * @package WP Current Date Post Slider
 * @since 1.0.0
 */
if( !defined( 'WPCDPS_VERSION' ) ) {
  define( 'WPCDPS_VERSION', '1.0' ); // Version of plugin
}
if( !defined( 'WPCDPS_DIR' ) ) {
    define( 'WPCDPS_DIR', dirname( __FILE__ ) ); // Plugin dir
}
if( !defined( 'WPCDPS_URL' ) ) {
    define( 'WPCDPS_URL', plugin_dir_url( __FILE__ ) ); // Plugin url
}
if( !defined( 'WPCDPS_POST_TYPE' ) ) {
    define( 'WPCDPS_POST_TYPE', 'post' ); // Plugin post type
}


register_activation_hook( __FILE__, 'install_postslider_free_version' );
function install_postslider_free_version(){

}
 
add_action('plugins_loaded', 'wpcdps_load_textdomain');
function wpcdps_load_textdomain() {
	load_plugin_textdomain( 'wp-current-date-post-slider', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
}
 

// Function file
require_once( WPCDPS_DIR . '/includes/wpcdps-function.php' );

// Script Fils
require_once( WPCDPS_DIR . '/includes/class-wpcdps-script.php' );

// Shortcodes
require_once( WPCDPS_DIR . '/includes/shortcodes/wpcdps-slider.php' );