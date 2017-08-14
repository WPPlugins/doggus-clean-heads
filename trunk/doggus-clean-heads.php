<?php
/*
Plugin Name: Doggus WP Clean Heads
Plugin URI: http://studio-doggus.nl/clean_wp_head
Description: Doggus header clean plugin
Author:Bram Lorist	
Author URI: http://studio-doggus.nl
Version: 1.0
*/

/* globals */
$doggusclean_options = get_option('doggusclean_settings');

include('includes/do-functions.php');
include('includes/options_page.php');

///Settings Link in plugins page
function doggusclean_plugin_admin_action_links($links, $file) {
    static $my_plugin;
    if (!$my_plugin) {
        $my_plugin = plugin_basename(__FILE__);
    }
    if ($file == $my_plugin) {
        $settings_link = '<a href="options-general.php?page=doggusclean-options">Doggus Head Settings</a>';
        array_unshift($links, $settings_link);
    }
    return $links;
}

add_filter('plugin_action_links', 'doggusclean_plugin_admin_action_links', 10, 2);
?>