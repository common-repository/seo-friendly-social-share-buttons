<?php
/*
Plugin Name: SEO Friendly Social Share Buttons
Plugin URI: 
Description: SEO Friendly Social Share Buttons is a plugin that lets people share your content on social media. It does not use any Javascript so it does not slow down the pagespeed. Therefore this plugin is an easy way to keep the website fast, but still having social share buttons on the page or post.
Author Name: Djenci Duquene
Author URI: https://dbdprojects.com
Version: 1.7.2
*/

// Setup
define('SSBIC_PLUGIN_URL', __FILE__);
// Global Options Variable

$ssbic_options = get_option('ssbic_settings');
// Load Content


add_action( 'wp_enqueue_scripts', 'ssbic_load_plugin_css' );
add_filter('the_content', 'sfssb_social_sharing_buttons');
require_once(plugin_dir_path(__FILE__)).'/includes/seo-friendly-social-share-buttons-css.php';
require_once(plugin_dir_path(__FILE__)).'/includes/seo-friendly-social-share-buttons-settings.php';
require_once(plugin_dir_path(__FILE__)).'/includes/seo-friendly-social-share-buttons-content.php';