<?php
/*
Plugin Name: Gemius Tracking Code
Plugin URI: https://github.com/eabay/wordpress-gemius-plugin
Description: This plugin integrates Gemius and WordPress by automatically adding tracking code. You can set different identifiers for home and all other pages from settings page.
Author: Erhan Abay
Version: 2.3.0
Author URI: http://erhanabay.com
License: See LICENSE file
*/

$pm = new \Oow\Plugin\PluginManager();
$pm->addPlugin(new \Gemius\EmbedCodePlugin());