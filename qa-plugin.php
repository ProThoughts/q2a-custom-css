<?php

/*
	Plugin Name: Custome CSS
	Plugin URI: 
	Plugin Description: set custome css
	Plugin Version: 0.1
	Plugin Date: 2015-06-06
	Plugin Author:yshiga
	Plugin Author URI:https://github.com/yshiga
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.7
	Plugin Update Check URI: 
*/

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}

qa_register_plugin_module('module', 'qa-custom-css-admin.php', 'qa_custom_css_admin', 'Custom CSS Admin');
qa_register_plugin_layer('qa-custom-css-layer.php', 'QA Custom CSS Layer');	
