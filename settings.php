<?php

require_once 'lib/Hwm/WordPress/Settings.php';

$options = new \Hwm\WordPress\Settings(array(
	'option_group' => 'gemius_options',
	'option_name' => 'gemius_options',
	'page_title' => 'Gemius Settings',
	'menu_title' => 'Gemius',
	'capability' => 'administrator'
));

$pages = get_pages();
$select = array();


$options
	->addSection(array('id' => 'general', 'title' => 'Identifiers', 'callback' => ''))
	->addField(array('key' => 'identifier_homepage', 'title' => 'Identifier for homepage'))
	->addField(array('key' => 'identifier_others', 'title' => 'Identifier for other pages'))
;

add_action('admin_init', array($options, 'init'));
add_action('admin_menu', array($options, 'addPage'));