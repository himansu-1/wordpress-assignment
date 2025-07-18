<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ✅ Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="bg-gray-500 text-white">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="<?php echo home_url(); ?>" class="text-2xl font-bold">MySite</a>
            <nav class="space-x-4">
                <a
                    href="<?php echo home_url(); ?>"
                    class="hover:text-red-400 <?php if (is_front_page()) echo 'text-red-500 font-bold'; ?>">
                    Home
                </a>
                <a
                    href="<?php echo home_url('/about'); ?>"
                    class="hover:text-red-400 <?php if (is_page('about')) echo 'text-red-500 font-bold'; ?>">
                    About
                </a>
                <a
                    href="<?php echo home_url('/blog'); ?>"
                    class="hover:text-red-400 <?php if (is_page('blog')) echo 'text-red-500 font-bold'; ?>">
                    Blog
                </a>
                <a
                    href="<?php echo home_url('/product'); ?>"
                    class="hover:text-red-400 <?php if (is_page('product')) echo 'text-red-500 font-bold'; ?>">
                    Product
                </a>
                <a
                    href="<?php echo home_url('/contact'); ?>"
                    class="hover:text-red-400 <?php if (is_page('contact')) echo 'text-red-500 font-bold'; ?>">
                    Contact
                </a>
            </nav>
        </div>
    </header>