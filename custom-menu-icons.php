<?php
/**
 * Plugin Name: Custom Menu Icons
 * Description: A plugin to create a custom menu with icons and dropdowns.
 * Version: 1.0
 * Author: Your Name
 * Text Domain: custom-menu-icons
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define constants
define( 'CUSTOM_MENU_ICONS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Include necessary files
include_once( plugin_dir_path( __FILE__ ) . 'includes/class-custom-menu.php' );

// Initialize the plugin
function custom_menu_icons_init() {
    Custom_Menu::get_instance();
}
add_action( 'plugins_loaded', 'custom_menu_icons_init' );

// Load assets
function custom_menu_icons_enqueue_assets() {
    wp_enqueue_style( 'custom-menu-icons', CUSTOM_MENU_ICONS_PLUGIN_URL . 'assets/css/style.css', array(), '1.0' );
    wp_enqueue_script( 'custom-menu-icons', CUSTOM_MENU_ICONS_PLUGIN_URL . 'assets/js/custom-menu.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'custom_menu_icons_enqueue_assets' );
