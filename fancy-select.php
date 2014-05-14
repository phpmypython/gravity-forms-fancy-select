<?php
/*
Plugin Name: Gravity Forms Fancy Select Wordpress Plugin
Description: This Plugin takes the function from the fancy select jquery plugin listed here http://code.octopuscreative.com/fancyselect/ and then makes it easy to give the functionality to form in wordpress
Version: 1.0
Author: Able Engine/William Wilkerson
Author URI: http://www.ableengine.com

Instructions:
If you want the fancy select added to all the select fields on a given form then add the class .add-fancy-select to the form.
If you would like to apply fancy select to only one Select field then give that field a class of .add-fancy-select.

*/

if (!is_admin()) {

	add_action('init', 'fancy_select_dependencies_js');
	add_action('init', 'fancy_select_dependencies_css');

	function fancy_select_dependencies_css()
	{
		$plugin_url = plugins_url(basename(dirname(__FILE__)));
		wp_enqueue_style('fancySelectCSS', $plugin_url . '/fancySelect.css');

	}

	function fancy_select_dependencies_js()
	{
		$plugin_url = plugins_url(basename(dirname(__FILE__)));
		wp_enqueue_script('fancySelectJS', $plugin_url . '/fancySelect.js', array('jquery'), '1.0');
		wp_enqueue_script('pluginJS', $plugin_url . '/fancy-select.js', array('jquery'), '1.0');
	}
}
