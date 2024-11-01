<?php
/*
Plugin Name: Trade Ideas Vision
Description: Allows visualization of a Trade Ideas layout via iframe . The tag to insert the code is: <code>[tivision code="cloudcode" height="height" width="width"]</code> 
Author: Kathy Lewis
Author URI: http://www.trade-ideas.com
Version: 1.0.3
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/
////////////////////////////////////////////////////////////////////////////////////////
defined( 'ABSPATH' ) or die( 'No script kiddies please!' ); //for security  https://codex.wordpress.org/Writing_a_Plugin
add_action( 'init', 'register_shortcode_tivision');

function register_shortcode_tivision() {
	add_shortcode('tivision', 'shortcode_tivision');
}
function shortcode_tivision($attr, $content = null) {
	$uri = 'https://';

	// get shortcode attribute
	if ( isset( $attr['code'] ) ) {
		if( (int)strlen($attr['code']) === 32 ){ //cloud codes are 32 characters in length
			$cloud_code = sanitize_text_field( $attr['code'] );
		}else{
			$cloud_code = '1ed7122919e477ac0297e76d3d9c0e3c';  //default cloud code which is a toplist
		}
    } else {
        $cloud_code = '1ed7122919e477ac0297e76d3d9c0e3c';  //default cloud code which is a toplist
    }
	if( isset( $attr['width'] ) ) {
		$attr['width'] = (int)$attr['width'];
		if ( $attr['width'] > 150 && $attr['width'] < 1000 ){
			$width = sanitize_text_field( $attr['width'] );
		}else {		
			$width = 510; //default width.  Default height and width correspond to that of a single toplist window display.
		}
    } else {
		$width = 510;
	}

	if( isset( $attr['height'] ) ) {
		$attr['height'] = (int)$attr['height'];
		if ( $attr['height'] > 150 && $attr['height'] < 1000 ){
			$height = sanitize_text_field( $attr['height'] );
			//tivision_log_me('height is ' . $height);
		}else{ 
			$height = 190; //default height
		}
    } else {
		$height = 190;
		//tivision_log_me('height is ' . $height);
	}
    $url = $uri . "secure.trade-ideas.com/cms_static/kathy_test/tivision/TradeIdeasVision.php?cloud_code=". $cloud_code . "&height=" . $height . "&width=" . $width;
	$str = "<iframe src=" . $url . " height=" . $height . " width=" . $width . " frameborder= \"0\" scrolling=\"no\"></iframe>";
	return $str;
}
 function tivision_log_me($message) {
    if (WP_DEBUG === true) {
        if (is_array($message) || is_object($message)) {
            error_log(print_r($message, true));
        } else {
            error_log($message);
        }
    }
 }
?>
