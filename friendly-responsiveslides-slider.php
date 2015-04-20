<?php
/**
* Plugin Name: Friendly ResponsiveSlides Slider
* Description: A widget and shortcode to easily implement the amazing ResponsiveSlides jQuery Slider. All of the hard work by @viljamis
* Version: 0.1.1
*
* License: GPL2
*/

// Don't allow the file to be called directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class friendly_rs_slider {

	/**
	 * Our version number, allows us to check for support in the future and also to version our CSS/JS
	 *
	 * @package Friendly RS Slider
	 * @author iamfriendly
	 * @version 0.1
	 * @since 0.1
	 */


	const version = '0.1.1';


	/**
	 * Initialise ourselves by enqueuing javascript and css, as well as setting our i18n location. Then load the widget/shortcode
	 *
	 * @package Friendly RS Slider
	 * @author iamfriendly
	 * @version 0.1
	 * @since 0.1
	 */

	public function init() {

		add_action( 'wp_enqueue_scripts', array( $this, 'add_scripts' ) );

		add_action( 'wp_enqueue_scripts', array( $this, 'add_styles' ) );

		add_action( 'admin_init', array( $this, 'add_i18n' ) );

		add_action( 'after_setup_theme', array( $this, 'load_shortcode_and_widget' ) );

	}/* init() */


	/**
	 * Enqueue the javascript that we need
	 *
	 * @package Friendly RS Slider
	 * @author iamfriendly
	 * @version 0.1
	 * @since 0.1
	 */

	public static function add_scripts() {

		if ( is_admin() ) {
			return;
		}

		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'responsiveslides-slider-js',  static::get_url( '_a/js/responsiveslides.min.js' ), array( 'jquery' ), static::version, true );

	}/* add_scripts */


	/**
	 * Enqueue the stylesheet
	 *
	 * @package Friendly RS Slider
	 * @author iamfriendly
	 * @version 0.1
	 * @since 0.1
	 */

	public static function add_styles() {

		if ( is_admin() ) {
			return;
		}

		wp_enqueue_style( 'responsiveslides-slider-css', static::get_url( '_a/css/responsiveslides.css' ), '', static::version, 'screen' );

	}/* add_styles() */


	/**
	 * Ensure we can internationalise our widget text
	 *
	 * @package Friendly RS Slider
	 * @author iamfriendly
	 * @version 0.1
	 * @since 0.1
	 */

	public static function add_i18n() {

		load_plugin_textdomain( 'frss', false, static::get_url( 'lang' ) );

	}/* add_i18n */


	/**
	 * Load our widget and shortcode class/functions
	 *
	 * @package Friendly RS Slider
	 * @author iamfriendly
	 * @version 0.1
	 * @since 0.1
	 */

	public static function load_shortcode_and_widget() {

		require( '_shortcode/responsiveslides.php' );

		require( '_widget/class.friendly_responsiveslides_slider.php' );

	}/* load_shortcode_and_widget() */


	/**
	 * Helper function to more easily allow us to get a web-friendly URL, mainly for use in loading js/css
	 *
	 * @package Friendly RS Slider
	 * @author iamfriendly
	 * @version 0.1
	 * @since 0.1
	 */

	public static function get_url( $path = '' ) {

		return plugins_url( ltrim( $path, '/' ), __FILE__ );

	}/* get_url() */


}/* class friendly_rs_slider */


add_action( 'plugins_loaded', 'friendly_rs_slider_init' );

/**
 * Begin!
 *
 * @package Friendly RS Slider
 * @author iamfriendly
 * @version 0.1
 * @since 0.1
 */

function friendly_rs_slider_init() {

	$friendly_rs_slider = new friendly_rs_slider;
	$friendly_rs_slider->init();

}/* friendly_rs_slider_init() */

?>
