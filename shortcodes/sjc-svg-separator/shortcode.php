<?php

/**
 * Shortcode handler
 */

$class = "my-element my-element-$orientation " . $class;

?>

<?php 
/* Top Separator */
$sjc_top_separator = '';
$sjc_top_class = '';

/* Bottom Separator */
$sjc_bottom_separator = '';
$sjc_bottom_class = '';

$sjc_css_shapes = array(
	'tip-center',
	'tip-left',
	'tip-right',
	'split-inner',
	'split-outer',
	'teeth-left',
	'teeth-center',
	'teeth-right',
);

/* Top Separator Style */
if ( $enable_top_separator == 'yes' ) {
	
	$sjc_top_separator = '<div class="sjc-separator-wrapper sjc-top-separator-wrapper">';

	$sjc_top_separator .= '<div class="sjc-separator-spacer sjc-separator--top" style="height: '.$top_separator_height.'px;"></div>';

	if ( array_search( $top_separator_style, $sjc_css_shapes ) !== false ) {
		$sjc_top_separator .= '<div class="sjc-separator sjc-separator--css sjc-separator--top sjc-separator-style--' . $top_separator_style . '" style="border-color: '.$top_separator_color.';">';
		$sjc_top_separator .= '<div class="sjc-separator-content"></div>';
		$sjc_top_separator .= '</div>';
	} else {
		if ( strpos( $top_separator_style, 'circle' ) === 0 ) {
			$aspect_ratio = '';
			$viewbox = '0 0 200 100';
		} else {
			$aspect_ratio = 'preserveAspectRatio="none"';
			$viewbox = '0 0 100 100';
		}

		$sjc_top_separator .= '<svg class="sjc-separator sjc-separator--top sjc-separator-style--' . $top_separator_style . '" fill="'.$top_separator_color.'" width="100%" height="'. $top_separator_height .'px" viewBox="' . $viewbox . '" ' . $aspect_ratio . ' version="1.1" xmlns="http://www.w3.org/2000/svg">';
		switch ( $top_separator_style ) {
			case 'circle-center':
				$sjc_top_separator .= '<path d="M 0 100 A 100 100 0 0 1 200 100 L 4000 100 L 4000 -5 L -4000 -5 L -4000 100 Z" />';
				break;
			case 'circle-left':
				$sjc_top_separator .= '<path d="M 0 100 A 100 100 0 0 1 200 100 L 4000 100 L 4000 -5 L -4000 -5 L -4000 100 Z" transform="translate(-500, 0)" />';
				break;
			case 'circle-right':
				$sjc_top_separator .= '<path d="M 0 100 A 100 100 0 0 1 200 100 L 4000 100 L 4000 -5 L -4000 -5 L -4000 100 Z" transform="translate(500, 0)" />';
				break;
			case 'arrow-center':
				$sjc_top_separator .= '<polygon points="0,100 0,-5 100,-5 100,100 50,5"/>';
				break;
			case 'arrow-left':
				$sjc_top_separator .= '<polygon points="0,100 0,-5 100,-5 100,100 25,5"/>';
				break;
			case 'arrow-right':
				$sjc_top_separator .= '<polygon points="0,100 0,-5 100,-5 100,100 75,5"/>';
				break;
			case 'slope-left':
				$sjc_top_separator .= '<polygon points="0,100 0,-5 100,-5 100,5"/>';
				break;
			case 'slope-right':
				$sjc_top_separator .= '<polygon points="0,5 0,-5 100,-5 100,100"/>';
				break;
			case 'blob-center':
				$sjc_top_separator .= '<path d="M 0 100 L 0 -5 L 100 -5 L 100 100 Q 50 -75 0 100 Z" />';
				break;
			case 'blob-left':
				$sjc_top_separator .= '<path d="M 0 100 L 0 -5 L 100 -5 L 100 100 Q 10 -75 0 100 Z" />';
				break;
			case 'blob-right':
				$sjc_top_separator .= '<path d="M 0 100 L 0 -5 L 100 -5 L 100 100 Q 90 -75 0 100 Z" />';
				break;
			case 'stamp':
				$sjc_top_separator .= '<path d="M 0 100 Q 2.5 50 5 100 Q 7.5 50 10 100 Q 12.5 50 15 100 Q 17.5 50 20 100 Q 22.5 50 25 100 Q 27.5 50 30 100 Q 32.5 50 35 100 Q 37.5 50 40 100 Q 42.5 50 45 100 Q 47.5 50 50 100 Q 52.5 50 55 100 Q 57.5 50 60 100 Q 62.5 50 65 100 Q 67.5 50 70 100 Q 72.5 50 75 100 Q 77.5 50 80 100 Q 82.5 50 85 100 Q 87.5 50 90 100 Q 92.5 50 95 100 Q 97.5 50 100 100 L 100 -5 L 0 -5 Z" />';
				break;
			case 'cloud':
				$sjc_top_separator .= '<path d="M 62.08,83.56 c 1.52,-8.90 3.05,-10.85 4.58,-5.73 2.21,-23.58 4.43,-23.58 6.65,0 1.18,-3.97 2.37,-3.74 3.56,0.74 1.78,-15.58 3.57,-17.61 5.36,-6.34 2.02,-17.80 4.04,-15.94 6.07,5.59 1.15,-3.85 2.29,-3.73 3.44,0.34 1.83,-17.70 3.66,-20.27 5.49,-7.82 C 98.17,61.88 99.08,57.65 100,57.63 l 0,-57.63 -100,0 0,60.13 c 0.69,0.01 1.39,2.33 2.08,6.99 2.01,-23.50 4.03,-22.70 6.05,2.69 1.29,-6.73 2.59,-6.30 3.89,1.10 1.97,-21.05 3.94,-21.05 5.92,0 1.24,-7.11 2.49,-7.77 3.74,-1.83 2.05,-29.82 4.11,-31.72 6.16,-5.75 1.69,-13.01 3.39,-10.50 5.08,7.58 1.35,-7.75 2.71,-7.75 4.07,0 2.15,-22.97 4.30,-20.84 6.46,6.33 1.05,-3.16 2.11,-2.97 3.16,0.57 2.11,-22.52 4.23,-23.59 6.35,-3.09 1.73,-8.20 3.46,-5.60 5.19,7.80 1.28,-3.65 2.57,-3.28 3.86,1.02 Z" />';
				break;
			default:
				$sjc_top_separator .= '';
				break;
		}
		$sjc_top_separator .= '</svg>';
	}
	$sjc_top_separator .= '</div>';

	echo $sjc_top_separator;
}

/* Bottom Separator Style */
if ( $enable_bottom_separator == 'yes' ) {
	
	$sjc_bottom_separator = '<div class="sjc-separator-wrapper sjc-bottom-separator-wrapper">';

	$sjc_bottom_separator .= '<div class="sjc-separator-spacer sjc-separator--bottom" style="height: '.$bottom_separator_height.'px;"></div>';

	if ( array_search( $bottom_separator_style, $sjc_css_shapes ) !== false ) {
		$sjc_bottom_separator .= '<div class="sjc-separator sjc-separator--css sjc-separator--bottom sjc-separator-style--' . $bottom_separator_style . '" style="border-color: '.$bottom_separator_color.';">';
		$sjc_bottom_separator .= '<div class="sjc-separator-content"></div>';
		$sjc_bottom_separator .= '</div>';
	} else {
		if ( strpos( $bottom_separator_style, 'circle' ) === 0 ) {
			$aspect_ratio = '';
			$viewbox = '0 0 200 100';
		} else {
			$aspect_ratio = 'preserveAspectRatio="none"';
			$viewbox = '0 0 100 100';
		}

		$sjc_bottom_separator .= '<svg class="sjc-separator sjc-separator--bottom sjc-separator-style--' . $bottom_separator_style . '" fill="'.$bottom_separator_color.'" width="100%" height="'. $bottom_separator_height .'px" viewBox="' . $viewbox . '" ' . $aspect_ratio . ' version="1.1" xmlns="http://www.w3.org/2000/svg">';
		switch ( $bottom_separator_style ) {
			case 'circle-center':
				$sjc_bottom_separator .= '<path d="M 0 0 A 100 100 0 0 0 200 0 L 4000 0 L 4000 105 L -4000 105 L -4000 0 Z" />';
				break;
			case 'circle-left':
				$sjc_bottom_separator .= '<path d="M 0 0 A 100 100 0 0 0 200 0 L 4000 0 L 4000 105 L -4000 105 L -4000 0 Z" transform="translate(-500, 0)" />';
				break;
			case 'circle-right':
				$sjc_bottom_separator .= '<path d="M 0 0 A 100 100 0 0 0 200 0 L 4000 0 L 4000 105 L -4000 105 L -4000 0 Z" transform="translate(500, 0)" />';
				break;
			case 'arrow-center':
				$sjc_bottom_separator .= '<polygon points="0,105 0,0 50,95 100,0 100,105"/>';
				break;
			case 'arrow-left':
				$sjc_bottom_separator .= '<polygon points="0,105 0,0 25,95 100,0 100,105"/>';
				break;
			case 'arrow-right':
				$sjc_bottom_separator .= '<polygon points="0,105 0,0 75,95 100,0 100,105"/>';
				break;
			case 'slope-left':
				$sjc_bottom_separator .= '<polygon points="0,105 0,95 100,0 100,105"/>';
				break;
			case 'slope-right':
				$sjc_bottom_separator .= '<polygon points="0,105 0,0 100,95 100,105"/>';
				break;
			case 'blob-center':
				$sjc_bottom_separator .= '<path d="M 0 0 L 0 105 L 100 105 L 100 0 Q 50 175 0 0 Z" />';
				break;
			case 'blob-left':
				$sjc_bottom_separator .= '<path d="M 0 0 L 0 105 L 100 105 L 100 0 Q 10 175 0 0 Z" />';
				break;
			case 'blob-right':
				$sjc_bottom_separator .= '<path d="M 0 0 L 0 105 L 100 105 L 100 0 Q 90 175 0 0 Z" />';
				break;
			case 'stamp':
				$sjc_bottom_separator .= '<path d="M 0 0 Q 2.5 50 5 0 Q 7.5 50 10 0 Q 12.5 50 15 0 Q 17.5 50 20 0 Q 22.5 50 25 0 Q 27.5 50 30 0 Q 32.5 50 35 0 Q 37.5 50 40 0 Q 42.5 50 45 0 Q 47.5 50 50 0 Q 52.5 50 55 0 Q 57.5 50 60 0 Q 62.5 50 65 0 Q 67.5 50 70 0 Q 72.5 50 75 0 Q 77.5 50 80 0 Q 82.5 50 85 0 Q 87.5 50 90 0 Q 92.5 50 95 0 Q 97.5 50 100 0 L 100 105 L 0 105 Z" />';
				break;
			case 'cloud':
				$sjc_bottom_separator .= '<path d="M 37.91 16.43 C 36.38 25.33 34.85 27.29 33.32 22.17 C 31.10 45.76 28.89 45.76 26.67 22.17 C 25.48 26.15 24.29 25.91 23.11 21.42 C 21.32 37.01 19.53 39.04 17.74 27.76 C 15.72 45.56 13.69 43.71 11.67 22.17 C 10.52 26.02 9.37 25.91 8.22 21.82 C 6.39 39.53 4.56 42.10 2.73 29.65 C 1.82 38.11 0.91 42.34 0 42.36 L 0 105 L 100 105 L 100 39.86 C 99.30 39.85 98.60 37.53 97.91 32.87 C 95.89 56.38 93.87 55.58 91.85 30.17 C 90.55 36.91 89.25 36.48 87.96 29.07 C 85.98 50.12 84.01 50.12 82.03 29.07 C 80.79 36.19 79.54 36.85 78.29 30.90 C 76.24 60.73 74.18 62.63 72.12 36.66 C 70.43 49.67 68.73 47.17 67.03 29.07 C 65.67 36.83 64.32 36.83 62.96 29.07 C 60.80 52.05 58.65 49.91 56.49 22.74 C 55.43 25.90 54.38 25.71 53.32 22.17 C 51.20 44.70 49.09 45.76 46.97 25.26 C 45.24 33.47 43.50 30.86 41.77 17.46 C 40.48 21.12 39.19 20.74 37.91 16.43 Z" />';
				break;
			default:
				$sjc_bottom_separator .= '';
				break;
		}
		$sjc_bottom_separator .= '</svg>';
	}

	$sjc_bottom_separator .= '</div>';
	echo $sjc_bottom_separator;
}