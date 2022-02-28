<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Fairgreen_Qrops_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Fairgreen Qrops Plugin
 * Plugin URI:        http://example.com/fairgreen-qrops-plugin-uri/
 * Description:       Import and display functionality for the Qrops tools.
 * Version:           1.0.0
 * Author:            Your Name or Your Company
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       fairgreen-qrops-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'FAIRGREEN_QROPS_PLUGIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-fairgreen-qrops-plugin-activator.php
 */
function activate_fairgreen_qrops_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fairgreen-qrops-plugin-activator.php';
	Fairgreen_Qrops_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-fairgreen-qrops-plugin-deactivator.php
 */
function deactivate_fairgreen_qrops_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fairgreen-qrops-plugin-deactivator.php';
	Fairgreen_Qrops_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_fairgreen_qrops_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_fairgreen_qrops_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-fairgreen-qrops-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_fairgreen_qrops_plugin() {

	$plugin = new Fairgreen_Qrops_Plugin();
	$plugin->run();

}
run_fairgreen_qrops_plugin();
