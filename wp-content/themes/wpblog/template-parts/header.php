<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ✅ Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Zoom view javascript CDN -->
    <script src="https://cdn.jsdelivr.net/npm/medium-zoom@1.1.0/dist/medium-zoom.min.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="bg-[#A2845E] text-slate-200">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="<?php echo home_url(); ?>" class="text-2xl font-bold">MySite</a>
            <nav class="space-x-4">
                <a
                    href="<?php echo home_url(); ?>"
                    class="hover:text-slate-300 <?php if (is_front_page()) echo 'text-white font-bold'; ?>">
                    Home
                </a>
                <a
                    href="<?php echo home_url('/about'); ?>"
                    class="hover:text-slate-300 <?php if (is_page('about')) echo 'text-white font-bold'; ?>">
                    About
                </a>
                <a
                    href="<?php echo home_url('/cart'); ?>"
                    class="hover:text-slate-300 <?php if (is_page('cart')) echo 'text-white font-bold'; ?>">
                    Cart
                </a>
                <a
                    href="<?php echo home_url('/product'); ?>"
                    class="hover:text-slate-300 <?php if ((is_page('product')) || (is_page('product-details'))) echo 'text-white font-bold'; ?>">
                    Product
                </a>
                <a
                    href="<?php echo home_url('/contact'); ?>"
                    class="hover:text-slate-300 <?php if (is_page('contact')) echo 'text-white font-bold'; ?>">
                    Contact
                </a>
            </nav>
        </div>
    </header>