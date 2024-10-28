<?php
class Walker_Custom_Menu extends Walker_Nav_Menu {
    function start_el( &$output, $item, $depth=0, $args=array(), $id=0 ) {
        $is_new = get_post_meta( $item->ID, '_menu_item_new', true ); // A custom field for 'New' label
        $new_label = $is_new ? '<span class="new-label">New!</span>' : '';
        
        // Add menu item with icon and "New" label
        $output .= sprintf( '<li class="menu-item-%s"><a href="%s">%s %s %s</a></li>',
            $item->ID,
            esc_url( $item->url ),
            '<img src="' . esc_url( get_post_meta( $item->ID, '_menu_item_icon', true ) ) . '" class="menu-icon" />',
            $item->title,
            $new_label
        );
    }
}
