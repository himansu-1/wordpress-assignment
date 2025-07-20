<?php
/* Template Name: Product Details */
get_header();

global $wpdb;
$product_id = isset($_GET['product_id']) ? intval($_GET['product_id']) : 0;

$product_table = $wpdb->prefix . 'custom_products';
$type_table = $wpdb->prefix . 'custom_product_types';
$image_table = $wpdb->prefix . 'custom_product_images';

$product = $wpdb->get_row($wpdb->prepare("SELECT * FROM $product_table WHERE id = %d", $product_id));

$types = $wpdb->get_results($wpdb->prepare("SELECT * FROM $type_table WHERE product_id = %d", $product_id));

// Get all type IDs for this product
$type_ids = array_map(function ($type) {
    return $type->id;
}, $types);

$images = [];
if (!empty($type_ids)) {
    // Prepare placeholders for the IN clause
    $placeholders = implode(',', array_fill(0, count($type_ids), '%d'));
    // Build the SQL query
    $query = "SELECT image_path FROM $image_table WHERE product_type_id IN ($placeholders)";
    // Fetch all image paths
    $images = $wpdb->get_col($wpdb->prepare($query, ...$type_ids));
}
?>

<?php if ($product): ?>
    <div class="bg-dark text-white min-h-screen my-3">
        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-col md:flex-row gap-8 max-w-6xl mx-auto">
                <!-- Left Side - Product Carousel -->
                <div class="lg:w-5/12 md:w-1/2 md:p-0 p-3">
                    <div class="bg-gray-100 rounded-2xl p-8 relative">
                        <div class="flex justify-center items-center h-96">
                            <!-- <img id="main-carousel-image" src="" alt="Product Image" class="object-contain h-full rounded-lg transition-all duration-300" /> -->
                            <img id="main-carousel-image" data-zoomable src="" alt="Product Image" class="object-contain h-full rounded-lg transition-all duration-300 cursor-zoom-in" />

                        </div>

                        <!-- Navigation Arrows -->
                        <button id="carousel-prev" class="absolute left-4 bottom-4 transform -translate-y-1/2 bg-white rounded-full w-10 h-10 flex items-center justify-center border border-slate-700 border-solid hover:bg-gray-50">
                            <i class="fas fa-chevron-left text-gray-600"></i>
                        </button>
                        <button id="carousel-next" class="absolute right-4 bottom-4 transform -translate-y-1/2 bg-white rounded-full w-10 h-10 flex items-center justify-center border border-slate-700 border-solid hover:bg-gray-50">
                            <i class="fas fa-chevron-right text-gray-600"></i>
                        </button>

                        <!-- Dots Navigation -->
                        <div id="carousel-dots" class="flex justify-center mt-6 space-x-2"></div>
                    </div>
                    <!-- Thumbnails -->
                    <div id="carousel-thumbnails" class="flex flex-wrap gap-2 justify-center mt-4 max-w-[400px] mx-auto"></div>

                </div>

                <!-- Right Side - Product Details -->
                <div class="lg:w-7/12 md:w-1/2 md:p-0 p-3">
                    <div class="space-y-6">
                        <!-- Product Title -->
                        <div>
                            <h1 class="text-3xl font-bold text-tan mb-2 text-slate-950">
                                <?php echo esc_html($product->name); ?>
                            </h1>
                            <p class="text-slate-800 text-sm">★★★★★ <?php echo esc_html($product->rating) ?> (2000+ reviews)</p>
                            <p class="text-slate-800 mt-4 text-justify text-sm">
                                <?php echo esc_html($product->description); ?>
                            </p>
                        </div>

                        <!-- Recommended Section -->
                        <div class="">
                            <h3 class="font-semibold m-0 text-center bg-[#A2845E] text-white rounded-t-lg py-2">Recommended</h3>
                            <?php if (!empty($types)): ?>
                                <?php foreach ($types as $i => $type): ?>
                                    <div class="rounded-b-lg text-slate-700 border mb-2">
                                        <div class="flex items-center justify-between px-6 py-3">
                                            <div class="flex items-center">
                                                <input type="radio" id="type-<?php echo $type->id; ?>" name="subscription" class="mr-3" <?php if ($i === 0) echo 'checked'; ?>>
                                                <label for="type-<?php echo $type->id; ?>" class="font-medium cursor-pointer"><?php echo esc_html($type->type_name); ?></label>
                                            </div>
                                            <div class="text-right">
                                                <!-- Example price, you can replace with $type->price if available -->
                                                <span class="font-bold text-lg">$<?php echo 6 * ($i + 1); ?>.00</span>
                                                <span class="text-gray-600 line-through ml-2">$<?php echo 10 * ($i + 1); ?></span>
                                            </div>
                                        </div>
                                        <div id="details-type-<?php echo $type->id; ?>" class="accordion-details px-6 py-3<?php if ($i !== 0) echo ' hidden'; ?>">
                                            <div class="mb-4">
                                                <hr>
                                                <h4 class="font-medium mb-2">Choose Flavor</h4>
                                                <div class="flex space-x-4">
                                                    <?php
                                                    $sub_types = $wpdb->get_results($wpdb->prepare("SELECT * FROM $image_table WHERE product_type_id = %d", $type->id));
                                                    $flavor_imgs = array_slice($sub_types, 0, 3); // Only first 3
                                                    ?>
                                                    <?php foreach ($flavor_imgs as $i => $img): ?>
                                                        <label class="flex flex-col bg-[#F9F9F9] rounded-lg p-1 cursor-pointer transition-shadow hover:shadow-md mb-0">
                                                            <div class="flex mb-1 p-2">
                                                                <input type="radio" id="flavor-<?= $img->id ?>" name="flavor-<?= $type->id ?>" class="mr-1 flavor-radio" data-img="<?= esc_url($img->image_path) ?>" <?php if ($i === 0) echo 'checked'; ?>>
                                                                <span class="text-xs font-medium"><?= esc_html($img->image_name) ?></span>
                                                            </div>
                                                            <img src="<?= esc_url($img->image_path) ?>" alt="<?= esc_attr($img->image_name) ?>" class="w-32 h-32 object-contain rounded p-4" />
                                                        </label>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <h4 class="font-medium mb-4">What's Included:</h4>
                                                <div class="row-auto flex gap-4">
                                                    <!-- <div class="grid grid-cols-2 gap-4"> -->
                                                    <div class="border-2 border-gray-200 rounded-lg p-1">
                                                        <div class="text-sm font-light text-gray-400 pb-4">Every 30 Days</div>
                                                        <div class="mx-auto flex items-center justify-center my-3">
                                                            <img id="every30days-img-<?= $type->id ?>" src="<?= isset($flavor_imgs[0]) ? esc_url($flavor_imgs[0]->image_path) : '' ?>" alt="" class="w-28 h-28 object-contain" />
                                                        </div>
                                                    </div>
                                                    <div class="border-2 border-gray-200 rounded-lg p-1">
                                                        <div class="text-sm font-light text-gray-400 pb-4">One Time <span class="text-tan text-[#D0AF80]">(Free)</span></div>
                                                        <div class="flex justify-center space-x-1 my-3">
                                                            <?php foreach ($flavor_imgs as $img): ?>
                                                                <img src="<?= esc_url($img->image_path) ?>" alt="" class="w-28 h-28 object-contain rounded" />
                                                            <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="space-y-1 text-sm mb-10">
                                                <div class="flex items-center text-slate-600 font-medium">
                                                    <i class="fas fa-check mr-2"></i>
                                                    <span>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit.</span>
                                                </div>
                                                <div class="flex items-center text-slate-700 font-medium">
                                                    <i class="fas fa-check mr-2"></i>
                                                    <span>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit.</span>
                                                </div>
                                                <div class="flex items-center text-slate-800 font-medium">
                                                    <i class="fas fa-check mr-2"></i>
                                                    <span>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit.</span>
                                                </div>
                                                <div class="flex items-center text-slate-900 font-medium">
                                                    <i class="fas fa-check mr-2"></i>
                                                    <span>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit.</span>
                                                </div>
                                                <div class="flex items-center text-slate-950 font-medium">
                                                    <i class="fas fa-check mr-2"></i>
                                                    <span>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                        <!-- Add to Cart Button -->
                        <button id="add-to-cart-btn" class="w-full bg-black text-white py-4 rounded-lg font-medium hover:bg-gray-800 transition-colors rounded-s-full rounded-e-full">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div id="success-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg p-6 max-w-sm mx-4 text-center">
            <div class="text-green-500 text-4xl mb-4">
                <i class="fas fa-check-circle"></i>
            </div>
            <h3 class="text-lg font-semibold mb-2">Success!</h3>
            <p class="text-gray-600 mb-4">Product has been added to your cart successfully.</p>
            <button id="close-modal" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Continue Shopping
            </button>
        </div>
    </div>
<?php else: ?>
    <p>Product not found.</p>
<?php endif; ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Replace these URLs with your actual product images
        const images = <?php echo json_encode($images); ?>;

        let currentIndex = 0;
        const mainImage = document.getElementById('main-carousel-image');
        const dotsContainer = document.getElementById('carousel-dots');
        const thumbnailsContainer = document.getElementById('carousel-thumbnails');
        const prevBtn = document.getElementById('carousel-prev');
        const nextBtn = document.getElementById('carousel-next');

        function updateCarousel() {
            mainImage.src = images[currentIndex];

            // Update dots
            dotsContainer.innerHTML = '';
            images.forEach((img, idx) => {
                const dot = document.createElement('div');
                dot.className = 'w-3 h-3 rounded-full cursor-pointer ' + (idx === currentIndex ? 'bg-gray-800' : 'bg-gray-400');
                dot.addEventListener('click', () => {
                    currentIndex = idx;
                    updateCarousel();
                });
                dotsContainer.appendChild(dot);
            });

            // Update thumbnails
            thumbnailsContainer.innerHTML = '';
            images.forEach((img, idx) => {
                const thumb = document.createElement('img');
                thumb.src = img;
                // thumb.className = 'w-16 h-16 object-cover rounded-lg border-2 cursor-pointer ' + (idx === currentIndex ? 'border-red-500' : 'border-transparent');
                thumb.className = 'w-16 h-16 object-contain rounded-lg border-2 cursor-pointer bg-white p-1 ' + (idx === currentIndex ? 'border-red-500' : 'border-transparent');
                thumb.addEventListener('click', () => {
                    currentIndex = idx;
                    updateCarousel();
                });
                thumbnailsContainer.appendChild(thumb);
            });
        }

        prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            updateCarousel();
        });

        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % images.length;
            updateCarousel();
        });

        // Initialize
        updateCarousel();
    });

    document.addEventListener('DOMContentLoaded', function() {
        // ... your existing carousel code ...

        // Accordion logic for dynamic subscription types
        const radios = document.querySelectorAll('input[name="subscription"]');
        const detailsSections = document.querySelectorAll('.accordion-details');

        function updateAccordion() {
            radios.forEach((radio, idx) => {
                const details = document.getElementById('details-' + radio.id);
                if (details) {
                    if (radio.checked) {
                        details.classList.remove('hidden');
                    } else {
                        details.classList.add('hidden');
                    }
                }
            });
        }

        radios.forEach(radio => {
            radio.addEventListener('change', updateAccordion);
        });

        // Initialize on page load
        updateAccordion();

        // Dynamic update for Every 30 Days image per type
        document.querySelectorAll('.accordion-details').forEach(function(section) {
            const radios = section.querySelectorAll('.flavor-radio');
            if (radios.length) {
                const typeId = radios[0].name.split('-')[1];
                const imgEl = document.getElementById('every30days-img-' + typeId);
                radios.forEach(function(radio) {
                    radio.addEventListener('change', function() {
                        if (radio.checked && imgEl) {
                            imgEl.src = radio.getAttribute('data-img');
                        }
                    });
                });
            }
        });

        // Add to Cart functionality
        const addToCartBtn = document.getElementById('add-to-cart-btn');
        const successModal = document.getElementById('success-modal');
        const closeModalBtn = document.getElementById('close-modal');

        function addToCart() {
            // Get selected subscription type
            const selectedSubscription = document.querySelector('input[name="subscription"]:checked');
            if (!selectedSubscription) {
                alert('Please select a subscription type');
                return;
            }

            const productTypeId = selectedSubscription.id.replace('type-', '');

            // Get selected flavor for the selected type
            const selectedFlavor = document.querySelector(`input[name="flavor-${productTypeId}"]:checked`);
            if (!selectedFlavor) {
                alert('Please select a flavor');
                return;
            }

            const productImageId = selectedFlavor.id.replace('flavor-', '');

            // Create cart item object
            const cartItem = {
                product_id: <?php echo $product_id; ?>,
                product_type_id: productTypeId,
                product_image_id: productImageId,
                product_name: '<?php echo esc_js($product->name); ?>',
                added_at: new Date().toISOString()
            };

            // Get existing cart from localStorage
            let cart = JSON.parse(localStorage.getItem('cart') || '[]');

            // Add item to cart
            cart.push(cartItem);

            // Save back to localStorage
            localStorage.setItem('cart', JSON.stringify(cart));

            // Show success modal
            successModal.classList.remove('hidden');
        }

        function closeModal() {
            successModal.classList.add('hidden');
        }

        // Event listeners
        addToCartBtn.addEventListener('click', addToCart);
        closeModalBtn.addEventListener('click', closeModal);

        // Close modal when clicking outside
        successModal.addEventListener('click', function(e) {
            if (e.target === successModal) {
                closeModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !successModal.classList.contains('hidden')) {
                closeModal();
            }
        });
    });
</script>
<?php get_footer(); ?>