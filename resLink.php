<?php
/**
* Plugin Name: resLink
* Plugin URI: https://blogs.kent.ac.uk/digitalhumanities/
* Description: resLink offers fast, easy and highly functional linking of people and data in academic environments
* Version: 2.0
* Author: Ernest Amoako
* Author URI: https://blogs.kent.ac.uk/digitalhumanities/
* License: --N/A-- as of yet
*/ 

add_action('admin_menu', 'resLinkMenu');

add_shortcode('my_shortcode', 'my_shortcode_handler');

function resLinkMenu(){
	
	$pgnName = 'resLink';
	$pgnID = 'resLink';
	add_menu_page($pgnName, $pgnName, 'administrator', $pgnID . '-top-level', 'pluginAdminScreen');
}

function pluginAdminScreen(){
	echo '<h1>resLink Plugin Admin</h1>';
	echo '<p>Plugin graphical interface admin area</p>';
}

function my_shortcode_handler(){
	include 'mining8.php'
}
?>