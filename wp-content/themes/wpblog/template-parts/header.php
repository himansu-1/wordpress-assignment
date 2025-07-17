<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ✅ Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="bg-gray-900 text-white">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="<?php echo home_url(); ?>" class="text-2xl font-bold">MySite</a>
            <nav class="space-x-4">
                <a href="<?php echo home_url(); ?>" class="hover:text-red-400">Home</a>
                <a href="<?php echo home_url('/about'); ?>" class="hover:text-red-400">About</a>
                <a href="<?php echo home_url('/blog'); ?>" class="hover:text-red-400">Blog</a>
                <a href="<?php echo home_url('/contact'); ?>" class="hover:text-red-400">Contact</a>
            </nav>
        </div>
    </header>