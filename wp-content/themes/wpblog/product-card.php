<?php
function render_product_card($product, $image_url, $details_url)
{
    global $wpdb;
    $type_table = $wpdb->prefix . 'custom_product_types';
    $image_table = $wpdb->prefix . 'custom_product_images';
    $type_ids = $wpdb->get_col($wpdb->prepare("SELECT id FROM $type_table WHERE product_id = %d", $product->id));
    $images = [];
    $carousel_id = 'carousel-' . uniqid();
    if (!empty($type_ids)) {
        $placeholders = implode(',', array_fill(0, count($type_ids), '%d'));
        $query = "SELECT image_path FROM $image_table WHERE product_type_id IN ($placeholders) LIMIT 3";
        $images = $wpdb->get_col($wpdb->prepare($query, ...$type_ids));
    }
    // Fallback dummy image (unique per card)
    if (empty($images)) {
        $images = ["https://random-image-pepebigotes.vercel.app/api/random-image?id=$carousel_id"];
    }
    ?>
    <div class="bg-white shadow rounded p-4">
        <div class="relative mb-2" data-carousel-id="<?php echo $carousel_id; ?>">
            <div class="w-full h-40 flex items-center justify-center overflow-hidden bg-white">
                <?php foreach ($images as $idx => $img): ?>
                    <img src="<?php echo esc_url($img); ?>" alt="" class="carousel-img w-full h-40 object-contain rounded <?php echo $idx === 0 ? '' : 'hidden'; ?>" data-index="<?php echo $idx; ?>" style="background:white;" />
                <?php endforeach; ?>
            </div>
            <?php if (count($images) > 1): ?>
                <button type="button" class="carousel-prev absolute left-2 top-1/2 -translate-y-1/2 bg-gray-100 rounded-full w-8 h-8 flex items-center justify-center shadow border border-gray-300">
                    <span>&lt;</span>
                </button>
                <button type="button" class="carousel-next absolute right-2 top-1/2 -translate-y-1/2 bg-gray-100 rounded-full w-8 h-8 flex items-center justify-center shadow border border-gray-300">
                    <span>&gt;</span>
                </button>
            <?php endif; ?>
        </div>
        <h2 class="font-semibold text-lg"><?php echo esc_html($product->name); ?></h2>
        <p class="text-sm text-gray-600"><?php echo wp_trim_words(esc_html($product->description), 15); ?></p>
        <a href="<?php echo esc_url($details_url); ?>" class="text-blue-500 text-sm mt-2 inline-block">View Details</a>
    </div>
<?php
}
?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('[data-carousel-id]').forEach(function (carousel) {
        let imgs = carousel.querySelectorAll('.carousel-img');
        let idx = 0;
        let interval = null;
        const show = (n) => {
            imgs.forEach((img, i) => {
                img.classList.toggle('hidden', i !== n);
            });
        };
        const prevBtn = carousel.querySelector('.carousel-prev');
        const nextBtn = carousel.querySelector('.carousel-next');
        if (prevBtn) {
            prevBtn.addEventListener('click', function () {
                idx = (idx - 1 + imgs.length) % imgs.length;
                show(idx);
            });
        }
        if (nextBtn) {
            nextBtn.addEventListener('click', function () {
                idx = (idx + 1) % imgs.length;
                show(idx);
            });
        }
        // Auto-scroll logic
        function startAutoScroll() {
            if (imgs.length <= 1) return;
            if (interval) clearInterval(interval);
            interval = setInterval(function () {
                idx = (idx + 1) % imgs.length;
                show(idx);
            }, 2500);
        }
        function stopAutoScroll() {
            if (interval) clearInterval(interval);
        }
        if (imgs.length > 1) {
            startAutoScroll();
            carousel.addEventListener('mouseenter', stopAutoScroll);
            carousel.addEventListener('mouseleave', startAutoScroll);
        }
    });
});
</script>