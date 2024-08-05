<?php
/*
    Plugin Name: Manage Custom Post
    Plugin URI: https://redoyit.com/
    Description: <code>Manage Custom Post</code> by <code>Md. Redoy Islam</code> is a powerful WordPress plugin designed to extend the platform’s functionality with advanced content management features. With this plugin, you can create and manage <code>Custom Post Types</code> tailored to your needs, enhancing content organization through <code>Custom Taxonomies</code>. The Custom Post Column feature allows you to add and display additional data in the admin panel for better post management. Display posts seamlessly on your site with customizable templates using the Display Post feature. Additionally, <code>Custom Post Meta Fields</code> enable you to store and manage extra information for your posts, providing a comprehensive solution for advanced WordPress content management.Manage Post, Metabox, Optimize Polst Column
    Version: 1.2
    Requires at least: 5.8
    Requires PHP: 5.6.20
    Author: Md. Redoy Islam
    Author URI: https://redoyit.com/wordpress-plugins/
    License: GPLv2 or later
    Text Domain: managecustompost
    Domain Path: /languages
*/

class ManageCustomPost{

    function __construct(){
        add_action('plugin_loaded', array($this, 'mcp_load_textdomain'));
    }
    function mcp_load_textdomain(){ 
        load_plugin_textdomain('managecustompost', false, dirname(__FILE__) . '/languages');
    }
}
new ManageCustomPost();
require_once plugin_dir_path(__FILE__)."tgm/class-tgm-plugin-activation.php";
require_once plugin_dir_path(__FILE__)."tgm/config-tgm.php";

require_once plugin_dir_path(__FILE__)."widgets/widgets.php";
require_once plugin_dir_path(__FILE__)."shortcodes/post-shortcode.php";

require_once plugin_dir_path(__FILE__)."inc/education.php";
require_once plugin_dir_path(__FILE__)."inc/experience.php";
require_once plugin_dir_path(__FILE__)."inc/projects.php";
require_once plugin_dir_path(__FILE__)."inc/service.php";
require_once plugin_dir_path(__FILE__)."post-type/post-type.php";
require_once plugin_dir_path(__FILE__)."post-type/taxonomies.php";