<?php
class Product_Handler
{
    public static function custom_product_upload_dir($dirs)
    {
        $custom_dir = '/products';
        $dirs['subdir'] = $custom_dir . $dirs['subdir'];
        $dirs['path'] = $dirs['basedir'] . $dirs['subdir'];
        $dirs['url'] = $dirs['baseurl'] . $dirs['subdir'];
        return $dirs;
    }

    public static function handle_product_form()
    {
        if (
            $_SERVER['REQUEST_METHOD'] === 'POST'
            && isset($_POST['product_name'])
            // && check_admin_referer('add_product_action', 'add_product_nonce')
        ) {
            global $wpdb;

            // Start transaction
            $wpdb->query('START TRANSACTION');

            try {
                $name = sanitize_text_field($_POST['product_name']);
                $description = sanitize_textarea_field($_POST['product_description']);
                $rating = intval($_POST['product_rating']);

                $inserted = $wpdb->insert(PRODUCT_TABLE, [
                    'name' => $name,
                    'description' => $description,
                    'rating' => $rating
                ]);
                if ($inserted === false) {
                    throw new Exception('Failed to insert product.');
                }

                $product_id = $wpdb->insert_id;

                // Handle types
                if (!empty($_POST['types'])) {
                    foreach ($_POST['types'] as $i => $type) {
                        $type_name = sanitize_text_field($type['name']);
                        $type_description = sanitize_textarea_field($type['description']);
                        $item_json = wp_json_encode(json_decode($type['item'], true));

                        $inserted = $wpdb->insert(PRODUCT_TYPE_TABLE, [
                            'product_id' => $product_id,
                            'type_name' => $type_name,
                            'type_description' => $type_description,
                            'item' => $item_json
                        ]);
                        if ($inserted === false) {
                            throw new Exception("Failed to insert product type at index $i.");
                        }

                        $type_id = $wpdb->insert_id;

                        // Handle file uploads
                        if (!empty($_FILES['types']['name'][$i]['images'])) {
                            $file_names = $_FILES['types']['name'][$i]['images'];
                            $tmp_names  = $_FILES['types']['tmp_name'][$i]['images'];

                            // Temporarily change upload directory
                            add_filter('upload_dir', [__CLASS__, 'custom_product_upload_dir']);

                            foreach ($file_names as $j => $file_name) {
                                $timestamp = time();
                                $ext = pathinfo($file_name, PATHINFO_EXTENSION);
                                $base = pathinfo($file_name, PATHINFO_FILENAME);

                                // Sanitize and rename with timestamp
                                $base = preg_replace('/[^a-zA-Z0-9-_]/', '', str_replace(' ', '-', strtolower($base)));

                                // Build sanitized, unique filename
                                $unique_file_name = $base . '-' . $timestamp . '.' . strtolower($ext);

                                $file_array = [
                                    'name'     => $unique_file_name,
                                    'type'     => $_FILES['types']['type'][$i]['images'][$j],
                                    'tmp_name' => $tmp_names[$j],
                                    'error'    => $_FILES['types']['error'][$i]['images'][$j],
                                    'size'     => $_FILES['types']['size'][$i]['images'][$j],
                                ];

                                $uploaded = wp_handle_upload($file_array, ['test_form' => false]);
                                if (empty($uploaded['url'])) {
                                    throw new Exception("Failed to upload image $file_name.");
                                }

                                $inserted = $wpdb->insert(PRODUCT_IMAGE_TABLE, [
                                    'product_type_id'   => $type_id,
                                    'image_path'        => $uploaded['url'],
                                    'image_name'        => sanitize_file_name($file_name),
                                    'image_description' => ''
                                ]);

                                if ($inserted === false) {
                                    throw new Exception("Failed to insert image record for $file_name.");
                                }
                            }
                        }
                    }
                }

                // If all went well
                $wpdb->query('COMMIT');
                $_SESSION['success_message'] = 'Product added successfully!';
                remove_filter('upload_dir', 'custom_product_upload_dir');
                wp_redirect(admin_url('admin.php?page=add-new-product'));
                exit;
            } catch (Exception $e) {
                $wpdb->query('ROLLBACK');
                remove_filter('upload_dir', [__CLASS__, 'custom_product_upload_dir']);
                wp_die('Error: ' . $e->getMessage());
            }
        }
    }

    public static function handle_delete_product()
    {
        if (
            isset($_GET['action'], $_GET['product_id']) &&
            $_GET['action'] === 'delete_product' &&
            check_admin_referer('delete_product_' . intval($_GET['product_id']))
        ) {
            global $wpdb;

            $prod_id = intval($_GET['product_id']);
            $tbl_p   = PRODUCT_TABLE;
            $tbl_t   = PRODUCT_TYPE_TABLE;
            $tbl_i   = PRODUCT_IMAGE_TABLE;

            // Start transaction
            $wpdb->query('START TRANSACTION');
            try {
                // Delete images by type
                $type_ids = $wpdb->get_col($wpdb->prepare("SELECT id FROM $tbl_t WHERE product_id = %d", $prod_id));
                if ($type_ids) {
                    $placeholders = implode(',', array_fill(0, count($type_ids), '%d'));
                    $image_paths = $wpdb->get_col(
                        $wpdb->prepare("SELECT image_path FROM $tbl_i WHERE product_type_id IN ($placeholders)", ...$type_ids)
                    );

                    foreach ($image_paths as $url) {
                        $file_path = str_replace(wp_upload_dir()['baseurl'], wp_upload_dir()['basedir'], $url);
                        if (file_exists($file_path)) {
                            @unlink($file_path); // Suppress error if file is already deleted
                        }
                    }

                    $wpdb->query("DELETE FROM $tbl_i WHERE product_type_id IN (" . implode(',', array_map('intval', $type_ids)) . ")");
                }

                // Delete types
                $wpdb->delete($tbl_t, ['product_id' => $prod_id]);

                // Delete product
                $deleted = $wpdb->delete($tbl_p, ['id' => $prod_id]);
                if ($deleted === false) {
                    throw new Exception('Failed to delete product.');
                }

                $wpdb->query('COMMIT');
                $_SESSION['success_message'] = 'Product Deleted successfully!';
                wp_redirect(admin_url('admin.php?page=product-manager'));
                exit;
            } catch (Exception $e) {
                $wpdb->query('ROLLBACK');
                wp_die('Deletion error: ' . esc_html($e->getMessage()));
            }
        }
    }
}
