<?php
class Product_Handler
{
    public static function handle_product_form()
    {
        if (
            $_SERVER['REQUEST_METHOD'] === 'POST'
            && isset($_POST['product_name'])
            && check_admin_referer('add_product_action', 'add_product_nonce')
        ) {
            global $wpdb;

            $product_table = $wpdb->prefix . 'custom_products';
            $type_table = $wpdb->prefix . 'custom_product_types';
            $image_table = $wpdb->prefix . 'custom_product_images';

            $name = sanitize_text_field($_POST['product_name']);
            $description = sanitize_textarea_field($_POST['product_description']);
            $rating = intval($_POST['product_rating']);

            // Insert product
            $wpdb->insert($product_table, [
                'name' => $name,
                'description' => $description,
                'rating' => $rating
            ]);

            $product_id = $wpdb->insert_id;

            // Handle types
            if (!empty($_POST['types'])) {
                foreach ($_POST['types'] as $i => $type) {
                    $type_name = sanitize_text_field($type['name']);
                    $type_description = sanitize_textarea_field($type['description']);
                    $item_json = wp_json_encode(json_decode($type['item'], true));

                    // Insert type
                    $wpdb->insert($type_table, [
                        'product_id' => $product_id,
                        'type_name' => $type_name,
                        'type_description' => $type_description,
                        'item' => $item_json
                    ]);

                    $type_id = $wpdb->insert_id;

                    // Handle file uploads
                    if (!empty($_FILES['types']['name'][$i]['images'])) {
                        $file_names = $_FILES['types']['name'][$i]['images'];
                        $tmp_names  = $_FILES['types']['tmp_name'][$i]['images'];

                        foreach ($file_names as $j => $file_name) {
                            // $uploaded = wp_handle_upload([
                            //     'name'     => $file_name,
                            //     'type'     => $_FILES['types']['type'][$i]['images'][$j],
                            //     'tmp_name' => $tmp_names[$j],
                            //     'error'    => $_FILES['types']['error'][$i]['images'][$j],
                            //     'size'     => $_FILES['types']['size'][$i]['images'][$j],
                            // ], ['test_form' => false]);
                            // Temporarily change upload directory

                            add_filter('upload_dir', 'custom_product_upload_dir');
                            function custom_product_upload_dir($dirs)
                            {
                                $custom_dir = '/products';
                                $dirs['subdir'] = $custom_dir . $dirs['subdir'];
                                $dirs['path'] = $dirs['basedir'] . $dirs['subdir'];
                                $dirs['url'] = $dirs['baseurl'] . $dirs['subdir'];
                                return $dirs;
                            }

                            $uploaded = wp_handle_upload([
                                'name'     => $file_name,
                                'type'     => $_FILES['types']['type'][$i]['images'][$j],
                                'tmp_name' => $tmp_names[$j],
                                'error'    => $_FILES['types']['error'][$i]['images'][$j],
                                'size'     => $_FILES['types']['size'][$i]['images'][$j],
                            ], ['test_form' => false]);
                            remove_filter('upload_dir', 'custom_product_upload_dir');


                            if (!empty($uploaded['url'])) {
                                $wpdb->insert($image_table, [
                                    'product_type_id' => $type_id,
                                    'image_path'      => $uploaded['url'],
                                    'image_name'      => sanitize_file_name($file_name),
                                    'image_description' => ''
                                ]);
                            }
                        }
                    }
                }
            }

            $_SESSION['product_flash'] = 'Product added successfully!';
            wp_redirect(admin_url('admin.php?page=add-new-product'));
            exit;
        }
    }
}
