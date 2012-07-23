<?php
/**
Plugin Name: Friendly ResponsiveSlides Slider
Description: A widget and shortcode to easily implement the amazing ResponsiveSlides jQuery Slider. All of the hard work by @viljamis
Version: 0.1

License: GPL2
*/


	class friendly_rs_slider
	{
	
		/**
		 * Our version number, allows us to check for support in the future and also to version our CSS/JS
		 *
		 * @package Friendly RS Slider
		 * @author iamfriendly
		 * @version 0.1
		 * @since 0.1
		 */
	
	
		const version = '0.1';
	
	
		/**
		 * Initialise ourselves by enqueuing javascript and css, as well as setting our i18n location. Then load the widget/shortcode
		 *
		 * @package Friendly RS Slider
		 * @author iamfriendly
		 * @version 0.1
		 * @since 0.1
		 */	
	
		function init()
		{
		
			add_action( 'wp_enqueue_scripts', array( __CLASS__, 'add_scripts' ) );
			
			add_action( 'wp_enqueue_scripts', array( __CLASS__, 'add_styles' ) );
			
			add_action( 'admin_init', array( __CLASS__, 'add_i18n' ) );
			
			add_action( 'plugins_loaded', array( __CLASS__, 'load_shortcode_and_widget' ) );
		
		}/* init() */
	
	
		/**
		 * Enqueue the javascript that we need
		 *
		 * @package Friendly RS Slider
		 * @author iamfriendly
		 * @version 0.1
		 * @since 0.1
		 */
	
		function add_scripts()
		{
		
			if( !is_admin() )
			{
				
				wp_enqueue_script( 'jquery' );
				wp_enqueue_script( 'responsiveslides-slider-js',  self::get_url( '_a/js/responsiveslides.min.js' ), array( 'jquery' ), self::version, true );	
				
			}
		
		}/* add_scripts */
		
		
		/**
		 * Enqueue the stylesheet
		 *
		 * @package Friendly RS Slider
		 * @author iamfriendly
		 * @version 0.1
		 * @since 0.1
		 */
		 
		function add_styles()
		{
			
			if( !is_admin() )
			{
				
				wp_enqueue_style( 'responsiveslides-slider-css', self::get_url( '_a/css/responsiveslides.css' ), '', self::version, 'screen' );
				
			}
			
		}/* add_styles() */
		
		
		/**
		 * Ensure we can internationalise our widget text
		 *
		 * @package Friendly RS Slider
		 * @author iamfriendly
		 * @version 0.1
		 * @since 0.1
		 */
		
		function add_i18n()
		{
		
			load_plugin_textdomain( 'frss', false, self::get_url( 'lang' ) );
	
		}/* add_i18n */
	
		
		/**
		 * Load our widget and shortcode class/functions
		 *
		 * @package Friendly RS Slider
		 * @author iamfriendly
		 * @version 0.1
		 * @since 0.1
		 */
		 
		function load_shortcode_and_widget()
		{
			
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
	
		public function get_url( $path = '' )
		{
		
			return plugins_url( ltrim( $path, '/' ), __FILE__ );
		
		}/* get_url() */
		
		
	}/* class friendly_rs_slider */
	
	
	/**
	 * Begin!
	 *
	 * @package Friendly RS Slider
	 * @author iamfriendly
	 * @version 0.1
	 * @since 0.1
	 */
	
	friendly_rs_slider::init();

?>