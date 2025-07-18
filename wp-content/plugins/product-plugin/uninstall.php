<?php

/**
 * Uninstall script for My Product Plugin
 */

// If uninstall not called from WordPress, exit
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

global $wpdb;

$product_table = $wpdb->prefix . 'custom_products';
$type_table = $wpdb->prefix . 'custom_product_types';
$image_table = $wpdb->prefix . 'custom_product_images';

// Drop tables if they exist
$wpdb->query("DROP TABLE IF EXISTS $image_table");
$wpdb->query("DROP TABLE IF EXISTS $type_table");
$wpdb->query("DROP TABLE IF EXISTS $product_table");
