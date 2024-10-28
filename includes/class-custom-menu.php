<?php
class Custom_Menu {
    private static $instance = null;

    public static function get_instance() {
        if ( self::$instance == null ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function __construct() {
        // Register nav menu
        add_action( 'init', array( $this, 'register_custom_menu' ) );
        
        // Add custom fields for icons (ACF or manual method)
        add_filter( 'wp_nav_menu_objects', array( $this, 'add_menu_icons' ), 10, 2 );
    }

    // Register a custom menu location
    public function register_custom_menu() {
        register_nav_menu( 'header-custom-menu', __( 'Header Custom Menu', 'custom-menu-icons' ) );
    }

    // Add icons to menu items
    public function add_menu_icons( $items, $args ) {
        foreach ( $items as &$item ) {
            // Example: Add a custom icon to each menu item based on some condition or custom field
            $icon = get_post_meta( $item->ID, '_menu_item_icon', true ); // Replace with custom field method
            if ( $icon ) {
                $item->title = '<img src="' . esc_url( $icon ) . '" alt="Icon" class="menu-icon" /> ' . $item->title;
            }
        }
        return $items;
    }
}
