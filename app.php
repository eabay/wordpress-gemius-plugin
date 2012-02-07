<?php
/*
Plugin Name: Gemius Tracking Code
Plugin URI: https://github.com/eabay/wordpress-gemius-plugin
Description: This plugin integrates Gemius and WordPress by automatically adding tracking code. You can set different identifiers for home and all other pages from settings page.
Author: Erhan Abay
Version: 2.2.0
Author URI: http://erhanabay.com
License: See LICENSE file
*/
require_once __DIR__. '/vendor/.composer/autoload.php';

use Hwm\WordPress\Plugin\PluginManager;
use Gemius\Plugins\CodePlugin;

$pm = new PluginManager;
$pm->addPlugin(new CodePlugin(__FILE__));