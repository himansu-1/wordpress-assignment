<?php
global $wpdb;
// Fetch products and type count using LEFT JOIN
$products = $wpdb->get_results("
    SELECT p.id, p.name, p.description, COUNT(t.id) as type_count
    FROM " . PRODUCT_TABLE . " p
    LEFT JOIN " . PRODUCT_TYPE_TABLE . " t ON p.id = t.product_id
    GROUP BY p.id
    ORDER BY p.id DESC
");
?>

<div class="wrap">
    <h1 class="wp-heading-inline">Product List</h1>
    <table class="wp-list-table widefat fixed striped">
        <thead>
            <tr>
                <th width="5%">ID</th>
                <th width="25%">Product Name</th>
                <th width="40%">Description</th>
                <th width="15%">Types Count</th>
                <th width="15%">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($products)) : ?>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td><?php echo esc_html($product->id); ?></td>
                        <td><?php echo esc_html($product->name); ?></td>
                        <td><?php echo esc_html($product->description); ?></td>
                        <td><?php echo esc_html($product->type_count); ?></td>
                        <td>
                            <!-- You can add actual view/edit/delete actions here later -->
                            <a href="#" class="button button-small">View</a>
                            <?php
                            $delete_url = wp_nonce_url(
                                admin_url('admin.php?page=product-manager&action=delete_product&product_id=' . intval($product->id)),
                                'delete_product_' . intval($product->id)
                            );
                            ?>
                            <a href="<?php echo esc_url($delete_url); ?>"
                                class="button button-small button-delete"
                                onclick="return confirm('Are you sure you want to delete this product? This will remove all related types & images.');">
                                Delete
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="5">No products found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>