<?php
class Product_DB {
    public static function create_tables() {
        global $wpdb;
        $charset_collate = $wpdb->get_charset_collate();

        $product_table = $wpdb->prefix . 'custom_products';
        $type_table = $wpdb->prefix . 'custom_product_types';
        $image_table = $wpdb->prefix . 'custom_product_images';

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

        dbDelta("CREATE TABLE $product_table (
            id BIGINT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255),
            description TEXT,
            rating INT,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        ) $charset_collate;");

        dbDelta("CREATE TABLE $type_table (
            id BIGINT AUTO_INCREMENT PRIMARY KEY,
            product_id BIGINT,
            type_name VARCHAR(255),
            type_description TEXT,
            item JSON,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            FOREIGN KEY (product_id) REFERENCES $product_table(id) ON DELETE CASCADE
        ) $charset_collate;");

        dbDelta("CREATE TABLE $image_table (
            id BIGINT AUTO_INCREMENT PRIMARY KEY,
            product_type_id BIGINT,
            image_path TEXT,
            image_name VARCHAR(255),
            image_description TEXT,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (product_type_id) REFERENCES $type_table(id) ON DELETE CASCADE
        ) $charset_collate;");
    }
}
