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
?>

<!-- <div class="container mx-auto px-4 py-6">
    <?php if ($product): ?>
        <h1 class="text-3xl font-bold mb-4"><?php echo esc_html($product->name); ?></h1>
        <p class="mb-4"><?php echo esc_html($product->description); ?></p>

        <div class="space-y-6">
            <?php
            foreach ($types as $type):
                $images = $wpdb->get_col($wpdb->prepare("SELECT image_path FROM $image_table WHERE product_type_id = %d", $type->id));
            ?>
            <div class="border p-4 rounded bg-gray-50">
                <h2 class="text-xl font-semibold"><?php echo esc_html($type->type_name); ?></h2>
                <p><?php echo esc_html($type->type_description); ?></p>
                <?php if ($images): ?>
                    <div class="flex flex-wrap mt-2 gap-2">
                        <?php foreach ($images as $img): ?>
                            <img src="<?php echo esc_url($img); ?>" class="w-24 h-24 object-cover rounded">
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>Product not found.</p>
    <?php endif; ?>
</div> -->


<div class="bg-dark text-white min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row gap-8 max-w-6xl mx-auto">
            <!-- Left Side - Product Carousel -->
            <div class="lg:w-1/2">
                <div class="bg-gray-100 rounded-2xl p-8 relative">
                    <div class="flex justify-center items-center h-96">
                        <img id="main-carousel-image" src="" alt="Product Image" class="object-contain h-full rounded-lg transition-all duration-300" />
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
                <!-- <div id="carousel-thumbnails" class="flex justify-center mt-4 space-x-2"></div> -->
                 <!-- Thumbnails -->
<div id="carousel-thumbnails" class="flex flex-wrap gap-2 justify-center mt-4 max-w-[400px] mx-auto"></div>

            </div>

            <!-- Right Side - Product Details -->
            <div class="lg:w-1/2">
                <div class="space-y-6">
                    <!-- Product Title -->
                    <div>
                        <h1 class="text-3xl font-bold text-tan mb-2 text-slate-700">Lorem Ipsum</h1>
                        <p class="text-gray-400 text-sm">★★★★★ (5/5 CUSTOMER REVIEWS)</p>
                        <p class="text-slate-600 mt-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu felis efficitur,
                            vel ex aliquet interdum id nec orci. Fusce eu neque non elit efficitur
                            dignibus quis laoreet at ante.
                        </p>
                    </div>

                    <!-- Recommended Section -->
                    <div class="bg-tan p-4 rounded-lg text-slate-700">
                        <h3 class="font-semibold mb-4">Recommended</h3>

                        <!-- Single Drink Subscription -->
                        <div class="mb-6">
                            <div class="flex items-center justify-between mb-3">
                                <div class="flex items-center">
                                    <input type="radio" id="single" name="subscription" class="mr-3" checked>
                                    <label for="single" class="font-medium">Single Drink Subscription</label>
                                </div>
                                <div class="text-right">
                                    <span class="font-bold text-lg">$6.00</span>
                                    <span class="text-gray-600 line-through ml-2">$10</span>
                                </div>
                            </div>

                            <!-- Choose Flavor -->
                            <div class="mb-4">
                                <h4 class="font-medium mb-2">Choose Flavor</h4>
                                <div class="flex space-x-4">
                                    <div class="text-center">
                                        <div class="w-8 h-16 bottle-brown rounded-lg mx-auto mb-1"></div>
                                        <div class="flex items-center">
                                            <input type="radio" id="chocolate" name="flavor" class="mr-1" checked>
                                            <label for="chocolate" class="text-xs">Chocolate</label>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div class="w-8 h-16 bottle-vanilla rounded-lg mx-auto mb-1"></div>
                                        <div class="flex items-center">
                                            <input type="radio" id="vanilla" name="flavor" class="mr-1">
                                            <label for="vanilla" class="text-xs">Vanilla</label>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div class="w-8 h-16 bottle-orange rounded-lg mx-auto mb-1"></div>
                                        <div class="flex items-center">
                                            <input type="radio" id="orange" name="flavor" class="mr-1">
                                            <label for="orange" class="text-xs">Orange</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- What's Included -->
                            <div class="mb-4">
                                <h4 class="font-medium mb-2">What's Included:</h4>
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="border border-gray-400 rounded-lg p-3 text-center">
                                        <div class="text-xs mb-2">Every 30 Days</div>
                                        <div class="w-6 h-12 bottle-vanilla rounded mx-auto"></div>
                                    </div>
                                    <div class="border border-gray-400 rounded-lg p-3 text-center">
                                        <div class="text-xs mb-2">One Time <span class="text-tan">(Free)</span></div>
                                        <div class="flex justify-center space-x-1">
                                            <div class="w-4 h-8 bottle-brown rounded"></div>
                                            <div class="w-4 h-8 bottle-vanilla rounded"></div>
                                            <div class="w-4 h-8 bottle-orange rounded"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Feature List -->
                            <div class="space-y-1 text-xs">
                                <div class="flex items-center">
                                    <i class="fas fa-check text-green-600 mr-2"></i>
                                    <span>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit.</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-check text-green-600 mr-2"></i>
                                    <span>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit.</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-check text-green-600 mr-2"></i>
                                    <span>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit.</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-check text-green-600 mr-2"></i>
                                    <span>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit.</span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-check text-green-600 mr-2"></i>
                                    <span>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit.</span>
                                </div>
                            </div>
                        </div>

                        <!-- Double Drink Subscription -->
                        <div class="border-t border-gray-400 pt-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <input type="radio" id="double" name="subscription" class="mr-3">
                                    <label for="double" class="font-medium">Double Drink Subscription</label>
                                </div>
                                <div class="text-right">
                                    <span class="font-bold text-lg">$12.00</span>
                                    <span class="text-gray-600 line-through ml-2">$20</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add to Cart Button -->
                    <button class="w-full bg-black text-white py-4 rounded-lg font-medium hover:bg-gray-800 transition-colors">
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Replace these URLs with your actual product images
        // const images = productData.images;
        // const images = [
        //     'https://via.placeholder.com/400x600?text=Image+1',
        //     'https://via.placeholder.com/400x600?text=Image+2',
        //     'https://via.placeholder.com/400x600?text=Image+3',
        //     'https://via.placeholder.com/400x600?text=Image+4'
        // ];
        const images = [
            '<?php echo get_template_directory_uri(); ?>/assets/images/image-1.png',
            '<?php echo get_template_directory_uri(); ?>/assets/images/image-2.png',
            '<?php echo get_template_directory_uri(); ?>/assets/images/image-3.png',
            '<?php echo get_template_directory_uri(); ?>/assets/images/image-1.png',
            '<?php echo get_template_directory_uri(); ?>/assets/images/image-2.png',
            '<?php echo get_template_directory_uri(); ?>/assets/images/image-3.png',
            '<?php echo get_template_directory_uri(); ?>/assets/images/image-1.png',
            '<?php echo get_template_directory_uri(); ?>/assets/images/image-2.png',
            '<?php echo get_template_directory_uri(); ?>/assets/images/image-3.png',
            '<?php echo get_template_directory_uri(); ?>/assets/images/image-1.png',
        ];

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
                thumb.className = 'w-16 h-16 object-cover rounded-lg border-2 cursor-pointer ' + (idx === currentIndex ? 'border-red-500' : 'border-transparent');
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
</script>
<?php get_footer(); ?>