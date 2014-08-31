<?php

/*
Plugin Name: FluidboxWP
Plugin URI: https://github.com/krialix/FluidboxWP
Description: Fluidbox is a modern and very lightweight lightbox plugin to give your images fresh look.
Version: 1.0
Author: Yasin Sinan Kayacan
Author URI: http://yasinsinankayacan.com/
*/

function load_plugin_data() {
	if ( is_single() ) {
		wp_enqueue_style( 'fluidbox_style', plugins_url( 'css/fluidbox.min.css', __FILE__ ), false, '1.3.5' );
		wp_enqueue_script( 'fluidbox', plugins_url( 'js/fluidbox.min.js', __FILE__ ), array( 'jquery' ), '1.3.5', true );
		wp_enqueue_script( 'custom', plugins_url( 'js/custom.min.js', __FILE__ ), array( 'fluidbox' ), '1.3.5', true );
	}
}

add_action( 'wp_enqueue_scripts', 'load_plugin_data' );

?>