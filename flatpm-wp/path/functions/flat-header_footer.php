<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


if( !function_exists( 'flat_pm_header_code' ) ){
	function flat_pm_header_code(){
		$flat_pm_header_footer = get_option( 'flat_pm_header_footer' );

		if( $flat_pm_header_footer['header_enabled'] === 'true' && $flat_pm_header_footer['header_deffered'] === 'false' ){
			echo do_shortcode( stripslashes( htmlspecialchars_decode( $flat_pm_header_footer['header_code'], ENT_QUOTES ) ) );
		}
	}
}


if( !function_exists( 'flat_pm_footer_code' ) ){
	function flat_pm_footer_code(){
		$flat_pm_header_footer = get_option( 'flat_pm_header_footer' );

		if( $flat_pm_header_footer['footer_enabled'] === 'true' && $flat_pm_header_footer['footer_deffered'] === 'false' ){
			echo do_shortcode( stripslashes( htmlspecialchars_decode( $flat_pm_header_footer['footer_code'], ENT_QUOTES ) ) );
		}

		global $fpm_shortcode_blob;

		if( empty( $fpm_shortcode_blob ) ){
			return;
		}

		flat_pm_filter_content( $content = '', $mode = 'shortcode' );
	}
}


add_action( 'wp_head', 'flat_pm_header_code', FLATPM_INT_MAX );
add_action( 'wp_footer', 'flat_pm_footer_code', FLATPM_INT_MAX );
?>