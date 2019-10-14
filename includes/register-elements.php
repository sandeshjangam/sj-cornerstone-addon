<?php


if( !class_exists( "SJC_REGISTER_ELEMENTS" ) ) {
	class SJC_REGISTER_ELEMENTS { 
		function __construct() {
			add_action( 'cornerstone_register_elements', array( $this, 'register_elements' ) );
		}

		function register_elements() {
			cornerstone_register_element( 'SJC_SVG_SEPARATOR', 'sjc-svg-separator', SJC_CS_PATH . 'shortcodes/sjc-svg-separator' );
			//cornerstone_register_element( 'My_Second_Element', 'my-second-element', SJC_CS_PATH . 'shortcodes/my-second-element' );

			//cornerstone_register_element( 'My_Sortable_Element', 'my-sortable-element', SJC_CS_PATH . 'shortcodes/my-sortable-element' );
			//cornerstone_register_element( 'My_Sortable_Element_Item', 'my-sortable-element-item', SJC_CS_PATH . 'shortcodes/my-sortable-element-item' );
		}
	}
	new SJC_REGISTER_ELEMENTS();
}


			
	