<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Fairgreen_Qrops_Plugin
 * @subpackage Fairgreen_Qrops_Plugin/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Fairgreen_Qrops_Plugin
 * @subpackage Fairgreen_Qrops_Plugin/admin
 * @author     Your Name <email@example.com>
 */
class Fairgreen_Qrops_Plugin_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $fairgreen_qrops_plugin    The ID of this plugin.
	 */
	private $fairgreen_qrops_plugin;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $fairgreen_qrops_plugin       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $fairgreen_qrops_plugin, $version ) {

		$this->fairgreen_qrops_plugin = $fairgreen_qrops_plugin;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Fairgreen_Qrops_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Fairgreen_Qrops_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->fairgreen_qrops_plugin, plugin_dir_url( __FILE__ ) . 'css/fairgreen-qrops-plugin-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Fairgreen_Qrops_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Fairgreen_Qrops_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->fairgreen_qrops_plugin, plugin_dir_url( __FILE__ ) . 'js/fairgreen-qrops-plugin-admin.js', array( 'jquery' ), $this->version, false );

	}

}
