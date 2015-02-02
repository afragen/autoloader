<?php
/*
Plugin Name: My Plugin
Plugin URI:  https://github.com/afragen/autoloader
Author:      Andy Fragen
Author URI:  http://thefragens.com/
Description: A plugin to show PSR 4 autoloading and backwards compatibility classes for TEC/ECP 3.9 or lower
Version:     0.0.1
License:     GNU General Public License v2
License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/


function myplugin_init() {
	global $myplugin;

	// Check for PHP 5.3 compatibility
	if ( version_compare( PHP_VERSION, '5.3', '<' ) ) {
		return;
	}

	// Back compat classes
	$compatibility = array(
		'Tribe__Events__Events' => __DIR__ . '/src/Back_Compat/Events.php',
		'Tribe__Events__Settings_Tab' => __DIR__ . '/src/Back_Compat/Settings_Tab.php',
		'Tribe__Events__Pro__Events_Pro' => __DIR__ . '/src/Back_Compat/Events_Pro.php',
	);

	// Plugin namespace root
	$root = array(
		'Fragen\myplugin' => __DIR__ . '/src/myplugin'
	);

	// Autoloading
	require_once( __DIR__ . 'src/myplugin/Autoloader.php' );
	$class_loader = 'Fragen\myplugin\Autoloader';
	new $class_loader( $root, $compatibility );

	// Launch - your launch method goes here.
	$launch_method = array( 'Fragen\myplugin\Main', 'instance' );
	$myplugin = call_user_func( $launch_method );
}

// load instantiate your plugin after TEC/ECP should be loaded
add_action( 'plugins_loaded', 'myplugin_init' );
