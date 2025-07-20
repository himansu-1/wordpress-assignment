<?php
/*
Template Name: Product Page
*/

require_once get_template_directory() . '/product-card.php';

get_header();
?>

<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold my-4">Our Products</h1>
    <hr class="mb-6">

    <?php
    global $wpdb;
    $product_table = $wpdb->prefix . 'custom_products';
    $type_table = $wpdb->prefix . 'custom_product_types';
    $image_table = $wpdb->prefix . 'custom_product_images';

    $per_page = 6;
    // Get current page number
    $paged = get_query_var('paged') ? intval(get_query_var('paged')) : 1;
    $offset = ($paged - 1) * $per_page;

    $total_products = $wpdb->get_var("SELECT COUNT(*) FROM $product_table");
    $total_pages = ceil($total_products / $per_page);

    $products = $wpdb->get_results($wpdb->prepare(
        "SELECT * FROM $product_table ORDER BY created_at DESC LIMIT %d OFFSET %d",
        $per_page, $offset
    ));
    ?>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <?php
        foreach ($products as $product):
            // Get first image
            $type_id = $wpdb->get_var($wpdb->prepare("SELECT id FROM $type_table WHERE product_id = %d LIMIT 1", $product->id));
            $image_url = $wpdb->get_var($wpdb->prepare("SELECT image_path FROM $image_table WHERE product_type_id = %d LIMIT 1", $type_id));
            $details_url = esc_url(add_query_arg('product_id', $product->id, site_url('/product-details')));
            render_product_card($product, $image_url, $details_url);
        endforeach;
        ?>
    </div>

    <!-- Pagination -->
    <?php if ($total_pages > 1): ?>
        <div class="flex justify-center mt-8 space-x-2">
            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <?php if ($i == $paged): ?>
                    <span class="px-3 py-1 bg-blue-600 text-white rounded"> <?php echo $i; ?> </span>
                <?php else: ?>
                    <a href="<?php echo esc_url(get_pagenum_link($i)); ?>" class="px-3 py-1 bg-gray-200 text-gray-700 rounded hover:bg-blue-100"> <?php echo $i; ?> </a>
                <?php endif; ?>
            <?php endfor; ?>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>