<?php 
	// get options
	$bg_color = esc_attr( get_option( 'wp_to_top_bg_color' ) );
	$fg_color = esc_attr( get_option( 'wp_to_top_fg_color' ) );
	$icon_size = esc_attr( get_option( 'wp_to_top_icon_size' ) );
	$icon_location = esc_attr( get_option( 'wp_to_top_icon_location' ) );

	// check for defaults
	if ( '' === $bg_color || ! $bg_color ) {
		$bg_color = '#000';
	}

	if ( '' === $fg_color || ! $fg_color ) {
		$fg_color = '#fff';
	}

	if ( '' === $icon_size || ! $icon_size ) {
		$icon_size = '30px';
	}

	if ( ! in_array( $icon_location, array( 'left', 'right' ) ) ) {
		$icon_location = 'left';
	}

	$custom_css = '.wp-to-top {
		background: ' . $bg_color . ';
		color: ' . $fg_color . '; '.
		$icon_location . ': 10px; 
		font-size: ' . $icon_size . '; 
		line-height: ' . $icon_size . '; 
		}';

	$custom_css .= '.wp-to-top:hover {
		color: ' . $fg_color . '; 
		}';	