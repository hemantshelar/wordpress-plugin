<?php
/*
Plugin Name: Manage Stock Items
Plugin URI: http://wordpress.org/plugins/hello-dolly111/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Hemant
Version: 1.0
Author URI: http://ma.ttaaa/
*/

// constantw


define ("PLUGIN_DIR_PATH", plugin_dir_path(__FILE__));
define ("PLUGIN_URL",plugins_url());

add_action( "admin_menu", "add_my_custom_menu");

function add_my_custom_menu() {
    add_menu_page(
        "Stock Settings",     //Page Title
        "Stock Settings",    //Menu title
        "manage_options",   //admin level
        "stock-settings",         //page slug
        "add_stock",//callback function
        "dashicons-admin-tools" //icon url
    );

    add_submenu_page( 
        "stock-settings", //parent slug
        "Add Stock", //Page title
        "Add Stock", //Menu title
        "manage_options", 
        "stock-settings", //Menu slug
        "add_stock" );
    add_submenu_page( "stock-settings", "Remove Stock", "Remove Stock", "manage_options", "stock-settings-remove-slug", "remove_stock" );
}

function custom_admin_view() {
    
}

function add_stock() {
    echo "add_stock";
    echo PLUGIN_DIR_PATH."views/add-stock.php";
    include_once  PLUGIN_DIR_PATH."views/add-stock.php";
}

function remove_stock() {
    echo "remove_stock";
    include_once  PLUGIN_DIR_PATH."views/remove-stock.php";
}

