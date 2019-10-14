<?php

/*
Plugin Name: SJ Cornerstone Addon
Description: SJ Cornerstone addon pack which include Separator. SVG separator which will add fantastic style to row and column.
Author: sandesh055
Version: 0.1.0
*/

define( 'SJC_CS_PATH', plugin_dir_path( __FILE__ ) );
define( 'SJC_CS_URL', plugin_dir_url( __FILE__ ) );
define( 'SJC_CS_VER', '0.1.0' );

/* Globals */
global $sjc_cs_styles;

$sjc_cs_styles = '';

if( !class_exists( "SJC_Cornerstone_Addon" ) ) {
	class SJC_Cornerstone_Addon {
		function __construct() {
			$this->sjc_init();
			add_action( 'wp_enqueue_scripts', array( $this, 'sjc_cs_enqueue' ) );
			add_filter( 'cornerstone_icon_map', array( $this, 'sjc_icon_map' ) );
		}

		function sjc_init() {
			require_once 'includes/register-elements.php';
		}

		function sjc_cs_enqueue() {
			wp_enqueue_style( 'sjc-styles', SJC_CS_URL . '/assets/styles/sjc-frontend.css', array(), SJC_CS_VER );
		}

		function sjc_icon_map( $icon_map ) {
			$icon_map['sjc-icon'] = SJC_CS_URL . '/assets/svg/icons.svg';
			return $icon_map;
		}

	} 
	new SJC_Cornerstone_Addon();
}

