<?php
get_header();
?>
<main>
    <section class="my-10">
        <h2 class="text-2xl font-bold mb-4 text-center">Our Top Selling Products</h2>
        <hr class="mb-6">

        <div class="relative group overflow-x-hidden w-full max-w-4xl mx-auto" id="top-products-carousel-viewport">
            <!-- Navigation buttons -->
            <button type="button" id="carousel-prev-btn" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white/80 opacity-0 group-hover:opacity-100 transition-opacity rounded-full w-10 h-10 flex items-center justify-center shadow border border-gray-300 hover:bg-gray-100">
                <span>&lt;</span>
            </button>
            <button type="button" id="carousel-next-btn" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white/80 opacity-0 group-hover:opacity-100 transition-opacity rounded-full w-10 h-10 flex items-center justify-center shadow border border-gray-300 hover:bg-gray-100">
                <span>&gt;</span>
            </button>

            <!-- Carousel Row -->
            <div id="top-products-carousel-row" class="flex flex-nowrap transition-transform duration-500 ease-in-out w-max" style="will-change: transform;">
                <?php
                global $wpdb;
                $product_table = $wpdb->prefix . 'custom_products';
                $type_table = $wpdb->prefix . 'custom_product_types';
                $image_table = $wpdb->prefix . 'custom_product_images';

                $products = $wpdb->get_results("SELECT * FROM $product_table ORDER BY created_at DESC LIMIT 5");

                foreach ($products as $product) {
                    $type_id = $wpdb->get_var($wpdb->prepare("SELECT id FROM $type_table WHERE product_id = %d LIMIT 1", $product->id));
                    $image_url = $wpdb->get_var($wpdb->prepare("SELECT image_path FROM $image_table WHERE product_type_id = %d LIMIT 1", $type_id));
                    $details_url = esc_url(add_query_arg('product_id', $product->id, site_url('/product-details')));

                    ?>
                    <div class="min-w-[320px] max-w-[320px] mx-2 bg-white p-4 rounded shadow">
                        <div class="w-full h-40 bg-gray-100 rounded mb-3 overflow-hidden flex items-center justify-center">
                            <?php if ($image_url): ?>
                                <img src="<?php echo esc_url($image_url); ?>" alt="" class="w-full h-40 object-cover">
                            <?php else: ?>
                                <span class="text-gray-500">No Image</span>
                            <?php endif; ?>
                        </div>
                        <h3 class="text-lg font-semibold"><?php echo esc_html($product->name); ?></h3>
                        <p class="text-sm text-gray-600"><?php echo wp_trim_words(esc_html($product->description), 15); ?></p>
                        <a href="<?php echo esc_url($details_url); ?>" class="text-blue-500 text-sm mt-2 inline-block">View Details</a>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const row = document.getElementById('top-products-carousel-row');
            const visible = 2;
            const originalCards = Array.from(row.children);
            const cardWidth = originalCards[0].getBoundingClientRect().width + 16; // adjust for margin

            // Clone first and last few cards to simulate infinite loop
            for (let i = 0; i < visible; i++) {
                const cloneFirst = originalCards[i].cloneNode(true);
                const cloneLast = originalCards[originalCards.length - 1 - i].cloneNode(true);
                row.appendChild(cloneFirst);
                row.insertBefore(cloneLast, row.firstChild);
            }

            const totalCards = row.children.length;
            let idx = visible; // Start from first "real" card

            // Position the row to the start index
            row.style.transform = `translateX(-${idx * cardWidth}px)`;

            function updateCarousel(smooth = true) {
                if (smooth) {
                    row.style.transition = 'transform 0.5s ease-in-out';
                } else {
                    row.style.transition = 'none';
                }
                row.style.transform = `translateX(-${idx * cardWidth}px)`;
            }

            function next() {
                idx++;
                updateCarousel(true);
                if (idx === totalCards - visible) {
                    // After animation, jump back to real first
                    setTimeout(() => {
                        idx = visible;
                        updateCarousel(false);
                    }, 500);
                }
            }

            function prev() {
                idx--;
                updateCarousel(true);
                if (idx === 0) {
                    setTimeout(() => {
                        idx = totalCards - visible * 2;
                        updateCarousel(false);
                    }, 500);
                }
            }

            let interval = setInterval(next, 3000);

            const viewport = document.getElementById('top-products-carousel-viewport');
            viewport.addEventListener('mouseenter', () => clearInterval(interval));
            viewport.addEventListener('mouseleave', () => interval = setInterval(next, 3000));

            document.getElementById('carousel-prev-btn').addEventListener('click', prev);
            document.getElementById('carousel-next-btn').addEventListener('click', next);
        });
    </script>
</main>
<?php get_footer(); ?>