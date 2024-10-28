=== MWT Menu Icons ===
Contributors: mywptrek
Tags: custom menu, icons, dropdown menu, WordPress, navigation menu
Requires at least: 5.0
Tested up to: 6.3
Stable tag: 1.0
Requires PHP: 7.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A custom plugin that allows adding icons and dropdowns to your WordPress navigation menu along with "New" labels.

== Description ==

The **Custom Menu Icons** plugin adds the ability to customize your WordPress navigation menus by adding icons to each menu item, dropdowns for submenus, and labels for indicating new items.

With this plugin, you can:
- Add custom icons to each menu item.
- Show dropdown submenus on hover.
- Highlight new items in the menu with a "New!" label.

Perfect for websites that want to add a touch of visual design to their menus and make navigation more intuitive for users.

**Features**:
- Supports custom icons per menu item.
- Dropdown menus for sub-items.
- "New" labels for special items.
- Fully customizable through CSS.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/custom-menu-icons` directory or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Go to **Appearance > Menus** to assign a custom menu to your header or any menu location.
4. Install and configure the **Advanced Custom Fields (ACF)** plugin if you wish to use custom icons and labels (optional).
5. Start adding custom icons and "New" labels to your menu items through ACF fields or by editing the custom fields in the menu items.

== Frequently Asked Questions ==

= How do I add icons to my menu items? =

You can use the **Advanced Custom Fields (ACF)** plugin to create a custom field group for menu items. This allows you to upload an icon for each menu item.

Alternatively, if you're familiar with WordPress custom fields, you can manually add a custom field to each menu item using the key `_menu_item_icon` and provide the URL of the icon.

= How do I mark a menu item as new? =

With ACF, create a custom checkbox field called "New Label". When checked, it will add a "New" label next to the menu item. If you're not using ACF, you can manually add a custom field called `_menu_item_new` to the menu item.

= Can I use this with other WordPress themes? =

Yes! This plugin is compatible with any WordPress theme that supports the default WordPress menu system. You can use it with themes like Twenty Twenty-One, Astra, GeneratePress, or any custom theme.

= How do I customize the appearance of the menu? =

You can modify the plugin's CSS file located in the `/assets/css/style.css` directory or add your own custom CSS via the WordPress Customizer under **Appearance > Customize**.

== Screenshots ==

1. **Menu With Icons** – An example of a custom menu with icons and dropdowns.
2. **New Label** – A "New!" label attached to a menu item.
3. **Menu Settings** – Example settings screen for adding custom icons and labels through ACF fields.

== Changelog ==

= 1.0 =
* Initial release of the plugin.

== Upgrade Notice ==

= 1.0 =
No upgrade notices for this version.

== License ==

This plugin is licensed under the GPLv2 or later. You are free to modify and redistribute it under these terms. Please see the license URI for more details: https://www.gnu.org/licenses/gpl-2.0.html.
