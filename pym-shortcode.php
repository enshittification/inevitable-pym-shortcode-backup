<?php
/*
Plugin Name: Pym.js Embeds
Plugin URI: https://github.com/INN/pym-shortcode
Description: Adds a [pym src=""] shortcode to simplify use of NPR's Pym.js
Version: 1.3.2.1
Author: INN Labs
Author URI: http://labs.inn.org/
License: GPL Version 2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: pym-embeds
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * What version is this plugin?
 *
 * @return string The plugin version number
 */
function pym_plugin_version() {
	return '1.3.2.1';
}

$includes = array(
	'/inc/block.php',
	'/inc/shortcode.php',
	'/inc/info-page.php',
	'/inc/settings-page.php',
	'/inc/class-pymsrc-output.php',
);
foreach ( $includes as $include ) {
	if ( 0 === validate_file( dirname( __FILE__ ) . $include ) ) {
		require_once( dirname( __FILE__ ) . $include );
	}
}
