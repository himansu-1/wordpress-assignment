<?php
/*
Template Name: Product Page
*/
get_header();
?>

<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">Our Products</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <?php
        global $wpdb;
        $product_table = $wpdb->prefix . 'custom_products';
        $type_table = $wpdb->prefix . 'custom_product_types';
        $image_table = $wpdb->prefix . 'custom_product_images';

        $products = $wpdb->get_results("SELECT * FROM $product_table");

        foreach ($products as $product):
            // Get first image
            $type_id = $wpdb->get_var($wpdb->prepare("SELECT id FROM $type_table WHERE product_id = %d LIMIT 1", $product->id));
            $image_url = $wpdb->get_var($wpdb->prepare("SELECT image_path FROM $image_table WHERE product_type_id = %d LIMIT 1", $type_id));
        ?>
            <div class="bg-white shadow rounded p-4">
                <?php if ($image_url): ?>
                    <img src="<?php echo esc_url($image_url); ?>" alt="" class="mb-2 w-full h-40 object-cover rounded">
                <?php endif; ?>
                <h2 class="font-semibold text-lg"><?php echo esc_html($product->name); ?></h2>
                <p class="text-sm text-gray-600"><?php echo wp_trim_words(esc_html($product->description), 15); ?></p>
                <a href="<?php echo esc_url(add_query_arg('product_id', $product->id, site_url('/product-details'))); ?>" class="text-blue-500 text-sm mt-2 inline-block">View Details</a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php get_footer(); ?>