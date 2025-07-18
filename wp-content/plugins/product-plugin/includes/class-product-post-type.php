<?php
class Product_Post_Type {
    public static function register() {
        add_action('init', function() {
            register_post_type('custom_product', [
                'labels' => [
                    'name' => 'Products',
                    'singular_name' => 'Product',
                ],
                'public' => false,
                'show_ui' => false, // We’ll use our own UI
                'supports' => ['title'],
            ]);
        });
    }
}
