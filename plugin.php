<?php
/*
Plugin Name: Custom API action (list)
Plugin URI: http://yourls.org
Description: Define custom API action 'list'
Version: 0.1
Author: rosano.ca
Author URI: https://rosano.ca
*/

// Define custom action "list"
yourls_add_filter( 'api_action_list', 'my_list_function' );

// Actually list
function my_list_function() {
	return array(
		'statusCode' => 200,
		'result' => yourls_get_db()->fetchAll("SELECT keyword FROM yourls_url"),
		'message'    => 'success',
	);	
}
