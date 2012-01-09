<?php
/*
Plugin Name: Gemius
Plugin URI: https://github.com/eabay/wordpress-gemius-plugin
Description: Gemius script code addition
Author: Erhan Abay
Version: 2.1.1
Author URI: http://erhanabay.com
License: See LICENSE file
*/
require_once __DIR__. '/autoload.php';

use Hwm\WordPress\Plugin\PluginManager;
use Gemius\Plugins\CodePlugin;

$pm = new PluginManager;
$pm->addPlugin(new CodePlugin(__FILE__));