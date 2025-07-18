<?php

/**
 * Plugin Name: My Product Plugin
 * Description: A plugin to manage products, their types and images.
 * Version: 1.0
 * Author: Himansu Sekhar Sahu
 */

defined('ABSPATH') || exit;
define('PRODUCT_TABLE', $GLOBALS['wpdb']->prefix . 'custom_products');
define('PRODUCT_TYPE_TABLE', $GLOBALS['wpdb']->prefix . 'custom_product_types');
define('PRODUCT_IMAGE_TABLE', $GLOBALS['wpdb']->prefix . 'custom_product_images');

// Session start 
add_action('init', function () {
    if (!session_id()) {
        session_start();
    }
});

// Autoload or include classes
require_once plugin_dir_path(__FILE__) . 'includes/class-product-post-type.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-product-db.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-product-admin-ui.php';
require_once plugin_dir_path(__FILE__) . 'includes/class-product-handler.php';
require_once plugin_dir_path(__FILE__) . 'includes/helpers.php';

// Register custom post type on 'init'
add_action('init', ['Product_Post_Type', 'register']);

// Product form submit handler
add_action('admin_init', ['Product_Handler', 'handle_product_form']);
add_action('admin_init', ['Product_Handler', 'handle_delete_product']);

// Create DB tables on plugin activation
register_activation_hook(__FILE__, ['Product_DB', 'create_tables']);

// Add admin pages
add_action('admin_menu', ['Product_Admin_UI', 'register_menu']);
// Use bootstrap and JQuery
add_action('admin_enqueue_scripts', ['Product_Admin_UI', 'enqueue_admin_assets']);

// Use global Notification
add_action('admin_notices', function () {
    display_admin_success_message();
});