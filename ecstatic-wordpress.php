<?php
/*
Plugin Name: Ecstatic Wordpress
Plugin URI:  http://ilikekillnerds.com/ecstatic-wordpress
Description: Deploy Wordpress websites as static sites that can be deployed anywhere.
Version:     1.0
Author:      Dwayne Charrington
Author URI:  http://ilikekillnerds.com/
Text Domain: ecstatic-wordpress

Copyright (c) 2014 Dwayne Charrington
*/

// Script file for scraping our Wordpress site
require_once 'includes/wp-scraper.php';

function ecstatic_init() {
  load_plugin_textdomain( 'ecstatic-wordpress', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' ); 
}
add_action('plugins_loaded', 'ecstatic_init');