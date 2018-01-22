<?php

/*
Plugin Name: Wptest
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: 1.0
Author: jakob
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/

//phpinfo();


function wporg_options_page()
{
    add_menu_page(
        'Wptest',
        'Wptest Options',
        'manage_options',
        'Wptest',
        'loadMenu'
    );
}

function loadMenu(){
    include plugin_dir_path(__FILE__).'admin/options.php';
    wporg_options_page_html();
}
add_action('admin_menu', 'wporg_options_page');