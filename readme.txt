=== Gemius Tracking Code ===
Contributors: eabay
Donate link: http://erhanabay.com
Tags: gemius, tracking code, analytics
Requires at least: 2.9
Tested up to: 3.3
Stable tag: 2.2.0

Integrates Gemius and WordPress by adding Gemius tracking code.


== Description ==

The plugin integrates [Gemius](http://www.gemius.com) and WordPress by embedding Gemius tracking code to the pages. You can set different identifiers for home and all other pages from settings page.


== Installation ==

1. Upload the `gemius-plugin` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Enter the Gemius Identifier for the site


== Frequently Asked Questions ==

= What is OO-WordPress? =

[OO-WordPress](https://github.com/eabay/oo-wordpress) is a library that contains components to ease WordPress plugin development. "OO" in the name stands for object-oriented. You can find more information from the project site.

= How can I contribute to the project? =

Project is hosted on [github](https://github.com/eabay/wordpress-gemius-plugin). If you want to get involved, fork repository, make your changes and send a pull request.

Use [issues](https://github.com/eabay/wordpress-gemius-plugin/issues) for your bug reports, feature requests etc.


== Screenshots ==

1. Settings


== Changelog ==

= 2.2.0 =
* Autoloading managed by Composer again.
* Vendors updated

= 2.1.4 =
Fixed bug: Tracking code added although identifier is not available.

= 2.1.3 =
Updates for WordPress plugins directory standarts.

= 2.1.2 =
composer.json and documentation related updates.

= 2.1.1 =
Autoloading handled with Doctrine\Common\ClassLoader instead of Composer\Autoload\ClassLoader.

= 2.1.0 =
Plugin rewritten with [OO-WordPress](https://github.com/eabay/oo-wordpress).

= 2.0.0 =
First public release.

= 1.0.0 =
Initial development release.


== Upgrade Notice ==

No special effort required in upgrade process.