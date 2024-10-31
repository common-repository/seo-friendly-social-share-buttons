<?php 
// Function to load CSS file
function ssbic_load_plugin_css() {
wp_register_style ('style1', plugins_url('/css/style.css', SSBIC_PLUGIN_URL) );
	wp_enqueue_style ('style1' );}