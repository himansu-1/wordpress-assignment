<?php
class Product_Admin_UI
{
    public static function register_menu()
    {
        add_menu_page(
            'Product Manager',
            'Products',
            'manage_options',
            'product-manager',
            [self::class, 'render_product_list'],
            'dashicons-products',
            20
        );

        // Submenu: Add New Product
        add_submenu_page(
            'product-manager',
            'Add New Product',
            'Add New',
            'manage_options',
            'add-new-product',
            [self::class, 'render_add_product']
        );
    }

    public static function render_add_product()
    {
        // Product_Handler::handle_product_form(); // Add this line
        include plugin_dir_path(__FILE__) . '../templates/admin-form.php';
    }

    public static function render_product_list()
    {
        include plugin_dir_path(__FILE__) . '../templates/product-list.php'; // Create this
    }

    public static function enqueue_admin_assets($hook)
    {
        // error_log('Current admin hook: ' . $hook);
        // echo "<pre>";
        // print_r($hook);
        // echo "</pre>";

        // Enqueue only on product manager pages
        if (
            $hook === 'toplevel_page_product-manager' ||
            $hook === 'products_page_add-new-product'
        ) {
            // Enqueue jQuery explicitly
            wp_enqueue_script('jquery');

            // Bootstrap CSS
            wp_enqueue_style(
                'bootstrap-css',
                'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
                [],
                '5.3.3'
            );

            // Bootstrap Buldle JS (includes Popper)
            wp_enqueue_script(
                'bootstrap-js',
                'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
                ['jquery'], // not mandatory but good if you use jQuery
                '5.3.3',
                true
            );
        }
    }
}
