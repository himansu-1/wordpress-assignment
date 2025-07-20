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

    <!-- ============= Favicon Start ============== -->
    <!-- Standard Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.ico" type="image/x-icon">

    <!-- PNG Icons -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/icons/favicon-16x16.png">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/icons/apple-touch-icon.png">

    <!-- Android Chrome -->
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/icons/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/icons/android-chrome-512x512.png">

    <!-- Manifest for PWA (optional) -->
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/icons/site.webmanifest">

    <!-- Safari Pinned Tab -->
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/icons/safari-pinned-tab.svg" color="#5bbad5">

    <!-- Windows Tile -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/favicon/icons/mstile-144x144.png">

    <!-- Theme Color for Mobile Browsers -->
    <meta name="theme-color" content="#ffffff">

    <!-- ============= Favicon End ============== -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="bg-[#A2845E] text-slate-200">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <!-- Logo -->
            <a href="<?php echo home_url(); ?>" class="flex items-center space-x-2 rounded-full border border-slate-100  p-1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Logo" class="h-14 w-auto">
            </a>

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