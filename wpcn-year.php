<?php
/**
 * Plugin Name: WPConstructor Year
 * Description: A very lightweight plugin to display the current year or a year range using the [wpcn_year] shortcode and its optional since attribute (e.g., since="2026"). Ideal for copyright notices that automatically update every year without requiring manual changes.
 * Version: 1.0.0
 * Author: WPConstructor
 * License: GPL-3.0-or-later
 *
 * @package WPConstructor\Year
 */

defined( 'ABSPATH' ) || exit;

// Shortcode to display current year or a year range.
add_shortcode(
	'wpcn_year',
	function ( $atts ) {
		$atts = shortcode_atts(
			array(
				'since' => '',
			),
			$atts,
			'wpcn_year'
		);

		$current_year = (int) gmdate( 'Y' );
		$since        = absint( $atts['since'] );

		if ( $since && $since < $current_year ) {
			return $since . ' - ' . $current_year;
		}

		return (string) $current_year;
	}
);
