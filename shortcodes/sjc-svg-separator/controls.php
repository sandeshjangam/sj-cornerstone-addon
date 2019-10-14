<?php

/**
 * Element Controls
 */

return array(
	'enable_bottom_separator' => array(
	    'type'    => 'toggle',
	    'ui' => array(
	        'title'   => __( 'Enable Above Separator', 'sjc' ),
	    ),
	),
	'bottom_separator_style' => array(
		'type' => 'select',
		'ui' => array(
		   	'title' => __( 'Above Separator', 'sjc' ),
		   	'tooltip' => __( 'This affects that.', 'sjc' ),
		),
		'condition' => array( 'enable_bottom_separator' => true ),
		'options' => array(
		    'choices' => array(
				array( 'value' => 'arrow-left',		'label' =>	 __( 'Arrow Left', 'sjc' ) ),
				array( 'value' => 'arrow-center',	'label' =>	 __( 'Arrow Center', 'sjc' ) ),
				array( 'value' => 'arrow-right',	'label' =>	 __( 'Arrow Right', 'sjc' ) ),
				array( 'value' => 'slope-left',		'label' =>	 __( 'Slope Left', 'sjc' ) ),
				array( 'value' => 'slope-right',	'label' =>	 __( 'Slope Right', 'sjc' ) ),
		    	array( 'value' => 'tip-left',		'label' =>	 __( 'Tip Left', 'sjc' ) ),
				array( 'value' => 'tip-center',		'label' =>	 __( 'Tip Center', 'sjc' ) ),
				array( 'value' => 'tip-right',		'label' =>	 __( 'Tip Right', 'sjc' ) ),
				//array( 'value' => 'circle-center',	'label' =>	 __( 'Circle Center', 'sjc' ) ),
				array( 'value' => 'split-inner',	'label' =>	 __( 'Split Inner', 'sjc' ) ),
				array( 'value' => 'split-outer',	'label' =>	 __( 'Split Outer', 'sjc' ) ),
				array( 'value' => 'teeth-left',		'label' =>	 __( 'Teeth Left', 'sjc' ) ),
				array( 'value' => 'teeth-center',	'label' =>	 __( 'Teeth Center', 'sjc' ) ),
				array( 'value' => 'teeth-right',	'label' =>	 __( 'Teeth Right', 'sjc' ) ),
				array( 'value' => 'blob-left',		'label' =>	 __( 'Blob Left', 'sjc' ) ),
				array( 'value' => 'blob-center',	'label' =>	 __( 'Blob Center', 'sjc' ) ),
				array( 'value' => 'blob-right',		'label' =>	 __( 'Blob Right', 'sjc' ) ),
				array( 'value' => 'stamp',			'label' =>	 __( 'Stamp', 'sjc' ) ),
				array( 'value' => 'cloud',			'label' =>	 __( 'Cloud', 'sjc'  ) ),
		    )
		)
	),
	'bottom_separator_color' => array(
	 	'type' => 'color',
	 	'ui' => array(
			'title'   => __( 'Above Separator Color', 'sjc' )
		),
		'condition' => array( 'enable_bottom_separator' => true ),
	),
	'bottom_separator_height' => array(
    	'type' 	=> 'text',
    	'ui'	=> array(
      		'title'	=> __( 'Above Separator Height', 'cornerstone' ),
	      	'tooltip' => __( 'Use number only. Value will aplly in px only', 'sjc' ),
    	),
	  	'context' => 'content',
	  	'suggest' => '100',
		'condition' => array( 'enable_bottom_separator' => true ),
	),

	'enable_top_separator' => array(
	    'type'    => 'toggle',
	    'ui' => array(
	        'title'   => __( 'Enable Below Separator', 'sjc' ),
	        /*'tooltip' => __( 'Enables the feature.', 'sjc' ),*/
	    ),
	),
	'top_separator_style' => array(
		'type' => 'select',
		'ui' => array(
		   	'title' => __( 'Below Separator', 'sjc' ),
		   	'tooltip' => __( 'This affects that.', 'sjc' ),
		),
		'condition' => array( 'enable_top_separator' => true ),
		'options' => array(
		    'choices' => array(
				array( 'value' => 'arrow-left',		'label' =>	 __( 'Arrow Left', 'sjc' ) ),
				array( 'value' => 'arrow-center',	'label' =>	 __( 'Arrow Center', 'sjc' ) ),
				array( 'value' => 'arrow-right',	'label' =>	 __( 'Arrow Right', 'sjc' ) ),
				array( 'value' => 'slope-left',		'label' =>	 __( 'Slope Left', 'sjc' ) ),
				array( 'value' => 'slope-right',	'label' =>	 __( 'Slope Right', 'sjc' ) ),
		    	array( 'value' => 'tip-left',		'label' =>	 __( 'Tip Left', 'sjc' ) ),
				array( 'value' => 'tip-center',		'label' =>	 __( 'Tip Center', 'sjc' ) ),
				array( 'value' => 'tip-right',		'label' =>	 __( 'Tip Right', 'sjc' ) ),
				//array( 'value' => 'circle-center',	'label' =>	 __( 'Circle Center', 'sjc' ) ),
				array( 'value' => 'split-inner',	'label' =>	 __( 'Split Inner', 'sjc' ) ),
				array( 'value' => 'split-outer',	'label' =>	 __( 'Split Outer', 'sjc' ) ),
				array( 'value' => 'teeth-left',		'label' =>	 __( 'Teeth Left', 'sjc' ) ),
				array( 'value' => 'teeth-center',	'label' =>	 __( 'Teeth Center', 'sjc' ) ),
				array( 'value' => 'teeth-right',	'label' =>	 __( 'Teeth Right', 'sjc' ) ),
				array( 'value' => 'blob-left',		'label' =>	 __( 'Blob Left', 'sjc' ) ),
				array( 'value' => 'blob-center',	'label' =>	 __( 'Blob Center', 'sjc' ) ),
				array( 'value' => 'blob-right',		'label' =>	 __( 'Blob Right', 'sjc' ) ),
				array( 'value' => 'stamp',			'label' =>	 __( 'Stamp', 'sjc' ) ),
				array( 'value' => 'cloud',			'label' =>	 __( 'Cloud', 'sjc'  ) ),
		    )
		)
	),
	'top_separator_color' => array(
	 	'type' => 'color',
	 	'ui' => array(
			'title'   => __( 'Below Separator Color', 'sjc' )
		),
		'condition' => array( 'enable_top_separator' => true ),
	),
	'top_separator_height' => array(
    	'type' 	=> 'text',
    	'ui'	=> array(
      		'title'	=> __( 'Below Separator Height', 'cornerstone' ),
	      	'tooltip' => __( 'Use number only. Value will aplly in px only', 'sjc' ),
    	),
	  	'context' => 'content',
	  	'suggest' => '100',
		'condition' => array( 'enable_top_separator' => true ),
	),

	
);